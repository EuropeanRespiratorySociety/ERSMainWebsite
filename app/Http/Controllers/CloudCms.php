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
        $catnode = 'o:9a8195e6286a4f7b40ae';
   
        $nodes = CC::nodes()
                ->listChildren($catnode)
                ->addParams(['full' => 'true'])
                ->get();           

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

        
        // print out info about the repositories

        //$response['Rep info'] = "Showing: " . sizeof($repositories["rows"]) . " of: " . $repositories["total_rows"] . " total repositories\n";
        /*for ($i = 0; $i < sizeof($repositories["rows"]); $i++)
        {
            $repository = $repositories["rows"][$i];
            //$repositoryTitle = ($repository["title"] ? $repository["title"] : $repository["_doc"]);
            
            //$response['Repository'.$i] = "> " . $repositoryTitle . " (" . $repository["_doc"] . ")\n";
             
        }*/
        
        // inspect the raw array
        // var_dump($repositories);
    

    //return '<img src="https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/4439543d9959261676a7/features/test">';
    //return '<img src="https://api.cloudcms.com/nodes/0158e1c30704e4a5ab36/attachments/default">';
    //return $test;

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
        //
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

    public function requestTest()
    {
    $clientKey = '1a13e498-1dd6-45ec-a03a-af5689c45a33';
    $clientSecret = '91sxqgI8+vhc33Hs+vhMCRNhr2CTGVE4HgrX06NNaTkbz3DxqlLCco9ppTd4VWLXUEVBAOGKg8TFmCv7zKNcaHq9KBGu0X99LBDzoU02cwo=';
    $username = 'c3130b25-77a8-4131-a8c1-1ddbdb72173a';
    $password = 'o6g2C20ciq911uHcFHAzvYMzsHbRUghqQT1t2CK4p0ZzCHNudKombLahz4tJaFOzEYsd64f7Z73FlntBoTngaVqgrYHpKzIxG4ovKGLJsFE=';

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
    $body = '{"filename": "Strabery_Cupacake"}';
    $sort = '&sort={"_system.created_on.ms": 1}';    
    $client = new Client();
    //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:9a8195e6286a4f7b40ae/children?full=true', $headers, $body);
   // $request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/query?full=true&metadata=true'.$sort, $headers, $body);
   //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:9a8195e6286a4f7b40ae/list/catalog:product-has-review/items/query?full=true&metadata=true', $headers);
   //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:9a8195e6286a4f7b40ae/relatives/query?type=d:association&full=true&metadata=true', $headers);
    
    /////
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:9a8195e6286a4f7b40ae/relatives?type=a:child&full=true&metadata=true', $headers);
    //// OUTGOING
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/outgoing?full=true', $headers);
    //// INCOMING
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/incoming?full=true', $headers);
    //// list all associations
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/associations?full=true', $headers);
   //// ASSOCIATION ID catalog:product-has-review
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/list/catalog:product-has-review/items?full=true', $headers);
   ////ASSOCIATION ID POST body
   //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/list/catalog:product-has-review/items?full=true&metadata=true', $headers, $body);
    /////
   //$request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/list/catalog:product-has-review/items/search?text=chocolate&full=true&metadata=true', $headers);
    /////This is the url that we need to proxy to get the image
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/attachments/default', $headers);
   //get the features of a node...
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/o:386c912312c77e21425e/features/f:filename/', $headers);
   //path/tree tests bof..
   //$request = new GRequest('GET', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/n:root/path/catalog:product?base=root&depth=3', $headers);
   //traverse
   $request = new GRequest('POST', 'https://api.cloudcms.com/repositories/126d630737b199cfa4e7/branches/master/nodes/catalog:product/traverse?depth=3', $headers);


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
                    ->get();

    dd($node);  
    }
    public function fullSearch()
    {
    
    $payload = '{
        "search": "cupcake"       
    }';
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
                            "_type":  "catalog_product",
                            "body":  "chocolate"
                        }
                    },
                    "query": {
                        "bool": {
                            "must": { "match_all": {} }
                        },
                        "filter":{
                            "range":{
                                "price":{"gte": 3}
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
