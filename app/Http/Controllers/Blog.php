<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Incraigulous\Contentful\Facades\Contentful;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;
use Incraigulous\ContentfulSDK\ManagementSDK;
use Incraigulous\ContentfulSDK\PayloadBuilders\Entry;
use Incraigulous\ContentfulSDK\PayloadBuilders\EntryField;
use Incraigulous\ContentfulSDK\PayloadBuilders\Space;

class Blog extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    } 

    protected $fields = [
        'title' => '',
        'author' => '',
        'extract' => '',
        'body' => '',
        'video' => '',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            //Get all posts from a category
            $entries = Contentful::entries()
                ->limitByType('2wKn6yEnZewu2SCCkus4as')
                ->where('fields.category.sys.id','=', 'FJlJfypzaewiwyukGi2kI')
                ->includeLinks(1)
                ->get();

           // dd($entries);
            //get a specific asset
            $assets = Contentful::assets()
                //->setWidth(100)
                ->get();  


            function recursive_array_search($needle,$haystack) {
                foreach($haystack as $key=>$value) {
                    $current_key=$key;
                    if($needle===$value OR (is_array($value) && recursive_array_search($needle,$value) !== false)) {
                        return $current_key;
                        }
                    }
                return false;
            }

            foreach ($entries['items'] as $key => $post) {
                $blog[$key]['title'] = $post['fields']['title'];
                $blog[$key]['body'] = Markdown::parse($post['fields']['extract']);
                $blog[$key]['slug'] = $post['fields']['slug'];
                $blog[$key]['imageId'] = $post['fields']['featuredImage']['sys']['id'];

                $arrayKey = recursive_array_search($blog[$key]['imageId'], $assets['items']);             

                $blog[$key]['imageUrl'] = $assets['items'][$arrayKey]['fields']['file']['url'].'?'.'w=300&h=100&fit=thumb';

            }

            $posts = (object) $blog;    

            return view('blog.category')->with('posts', $posts);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('blog.post', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $managementSDK = new ManagementSDK(config('contentful.oauthToken'), config('contentful.space'));
        $result = $managementSDK->entries()->contentType('2wKn6yEnZewu2SCCkus4as')->post(
            new Entry([
                    new EntryField('title', $request->title),
                    //new EntryField('author', $request->author),
                    //new EntryField('category', $request->category),
                    new EntryField('extract', $request->extract),
                    new EntryField('body', $request->body), 
                    new EntryField('video3', $request->video), 
            ])
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            //Get a specific item
            $entry = Contentful::entries()
                ->limitByType('2wKn6yEnZewu2SCCkus4as')
                ->includeLinks(10)
                ->get();

 

    /**
     * get youtube video ID from URL
     *
     * @param string $url
     * @return string Youtube video id or FALSE if none found. 
     */
    function youtube_id_from_url($url) {
        $pattern = 
            '%^# Match any youtube URL
            (?:https?://)?  # Optional scheme. Either http or https
            (?:www\.)?      # Optional www subdomain
            (?:             # Group host alternatives
              youtu\.be/    # Either youtu.be,
            | youtube\.com  # or youtube.com
              (?:           # Group path alternatives
                /embed/     # Either /embed/
              | /v/         # or /v/
              | /watch\?v=  # or /watch\?v=
              )             # End path alternatives.
            )               # End host alternatives.
            ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
            $%x'
            ;
        $result = preg_match($pattern, $url, $matches);
        if (false !== $result) {
            return $matches[1];
        }
        return false;
    }

  

            foreach ($entry['items'] as $key => $post) {
               if($post['fields']['slug'] == $id) {

                    
                    //content
                    $blog['title'] = $post['fields']['title'];
                    $blog['body'] = Markdown::parse($post['fields']['body']);
                    $blog['slug'] = $post['fields']['slug'];
                    
                    //media
                    $blog['imageId'] = $post['fields']['featuredImage']['sys']['id'];

                    if(isset($post['fields']['gallery'])){
                        //Prepare the gallery of images
                         foreach($post['fields']['gallery'] as $keyId => $imgId) {
                            $id = $imgId['sys']['id'];
                            foreach ($entry['includes']['Asset'] as $key => $asset) {
                                if( $id == $asset['sys']['id']) {
                                    $gallery[$key]['id']          = $asset['sys']['id'];
                                    $gallery[$key]['imageUrl']    = $asset['fields']['file']['url'];
                                 }
                            }       
                        }

                    $blog['gallery'] = $gallery;

                    }

                    if(isset($post['fields']['location'])){
                        $blog['location'] = $post['fields']['location'];
                    }
                    if(isset($post['fields']['video3'])){
                        $blog['video'] = youtube_id_from_url($post['fields']['video3']);
                    }

                    //metadeta
                    $blog['createdAt'] = $post['sys']['createdAt'];
                     
                }
            }

            //get a specific asset
            $assets = Contentful::assets()
                ->where('sys.id', '=', $blog['imageId'])
                ->get();   

            //setting the width of the image on the fly!
            $blog ['imageUrl'] = $assets['items'][0]['fields']['file']['url'].'?'.'w=400&fm=jpg';     

         return view('blog.item')->with('blog', $blog);         
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

    





}