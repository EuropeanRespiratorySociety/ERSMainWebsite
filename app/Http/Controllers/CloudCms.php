<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GRequest;
use Illuminate\Http\Request;
use Idealley\CloudCmsSDK\Auth;
use Idealley\CloudCmsSDK\ClientBase;
use Idealley\CloudCms\Facades\CloudCms as CC;
use Intervention\Image\Facades\Image;
use League\OAuth2\Client\Provider\GenericProvider;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;

class CloudCms extends Controller
{
    
private $token;    
private $headers;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $catnode = 'o:9a8195e6286a4f7b40ae';
   
        $nodes = CC::nodes()
                ->listChildren($catnode)
                ->addParams(['full' => 'true'])
                ->addParams(['metadata' => 'true'])
                ->addParams(['sort' => '{"_system.created_on.ms": -1}'])
                ->get();           
              //  dd($nodes);
        foreach ($nodes['rows'] as $key => $post) {
                $blog[$key]['title'] = $post['title'];
                //$blog[$key]['body'] = Markdown::parse($post['headline']);
                $blog[$key]['body'] = $post['headline'];
                $blog[$key]['slug'] = $post['slug'];  

                $img = CC::nodes()->deploymentUrl.'static/path/Samples/Catalog/Products/'.$post['_features']['f:filename']['filename'];

                $blog[$key]['image'] = Image::cache(function($image) use($img){
                     return $image->make($img)->resize(400, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->encode('data-url');
                  });
                

            }

    $posts = (object) $blog;
    $params['posts'] =  $posts;    

    return view('blog.category')->with($params);    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $query = '{"slug": "'.$slug.'"}';
        $node = CC::nodes()
                    ->find($query)
                    ->addParams(['full' => 'true'])   
                    ->get();

        $path = 'Samples/Catalog/Products/';            
        $img = CC::nodes()
                    ->getImage($node['rows'][0]['_qname'])
                    ->addParams(['name' => $node['rows'][0]['_features']['f:filename']['filename']])
                    ->addParams(['size' => '400'])
                    ->set();
                             
        $blog['title'] = $node['rows'][0]['title'];
        $blog['body'] = $node['rows'][0]['body'];
        $blog['slug'] = $node['rows'][0]['slug'];
       
        $blog['image'] = Image::cache(function($image) use($img) {
                          $image->make($img)->resize(300, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                })->encode('data-url');
                            },null,false);

        $params['blog'] = $blog;
        return view('blog.item')->with($params);    

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function requestTest2()
    {

        $body = '{ "categories": "birthdays"}';
        $nodeId = 'o:9a8195e6286a4f7b40ae'; //product
        //$nodeId = 'o:386c912312c77e21425e'; //strawberry
        $association = 'a:child';
        $direction = 'OUTGOING';
        $node = CC::nodes()
                    ->queryAssociationItems($nodeId, $association, $body )
                    ->addParams(['full' => 'true']) 
                    ->get();
        
        dd($node);
    }
    public function requestTest()
    {
;

    $provider = new GenericProvider([
        'clientId'                => $clientKey,    // The client ID assigned to you by the provider
        'clientSecret'            => $clientSecret, 
        'urlAuthorize'            => 'https://api.cloudcms.com/oauth/authorize',
        'urlAccessToken'          => 'https://api.cloudcms.com/oauth/token',
        'redirectUri'             => 'http://assets.ersnet.org/',    
        'urlResourceOwnerDetails' => 'https://api.cloudcms.com'
    ]);
     // do the handshake
    $accessToken = $provider->getAccessToken('password', [
            'username' => $username,
            'password' => $password
        ]);
    $token = $accessToken->getToken();
    
    $headers = array('authorization' => 'Bearer '.$token);
    $body = '{"categories": "birthdays",
 “_doc”: {“$in”: [“9abda266065283f50554”]}  }';
    $sort = '&sort={"_system.created_on.ms": 1}';    
    $client = new Client();
    //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:9a8195e6286a4f7b40ae/children?full=true', $headers, $body);
   $request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/query?full=true&metadata=true'.$sort, $headers, $body);
   //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:9a8195e6286a4f7b40ae/list/catalog:product-has-review/items/query?full=true&metadata=true', $headers);

    /////
   //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/list/catalog:product-has-review/items/search?text=chocolate&full=true&metadata=true', $headers);
    /////This is the url that we need to proxy to get the image
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/attachments/default', $headers);
   //get the features of a node...
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/features/f:filename/', $headers);
   //path/tree tests bof..
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/n:root/path/catalog:product?base=root&depth=3', $headers);
   //traverse

   $body='{"_doc":"9112bffa2b829773463c","title":"Dean Martin","name":"dean.martin","email":"dean.martin@celebrityroast.com","firstName":"Dean","lastName":"Martin", "url":"test-url"}';
   $body='{"new":"value5"}';
   $request = new GRequest('PUT', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/9112bffa2b829773463c?inject=true', $headers, $body);


    //dd($request);
    $response = $client->send($request);
    $body = $response->getBody()->getContents();
    $post = json_decode($body, true);
    dd($post);  
    }


    public function search($query)
    {
    $node = CC::nodes()
                    ->search()
                    ->addParams(['full' => 'true'])  
                    ->addParams(['text' => $query])
                    ->addParams(['type' => 'ers:article']) 
                    ->get();

    dd($node);  
    }
    public function fullSearch()
    {
    
    $payload = '{ "search": "cupcake", }';
    $payload1 = '{
        "search": {
            "query_string" : {
                "default_field" : "body",
                "query" : "cupcakes AND chocolate"
            }
        }     
    }';
    $payload2 = '
    {
        "search": {
            "filtered": {    
                    "filter": {
                        "term": {
                            "_type":  "ers_article"
                        }
                    },
                    "query": {
                        "query_string": {
                            "query": "lung"
                        }
                        }         
                    }
                }
            }
        }         
    }';

    $node = CC::nodes()
                    ->fullSearch($payload2)
                    ->addParams(['full' => 'true'])  
                    ->get();

    dd($node);  
 
    }
}
