<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class CourseController extends Controller
{
    protected $courses = 'o:f913cff03624ac461283'; //courses category node
    protected $educationalActivities = "";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CC = new CC();
        $results = $CC->getItem('courses');

        if($results == "invalid_token"){
            \File::cleanDirectory(env('CC_TOKEN_STORAGE_PATH'));
            return redirect(request()->fullUrl());
        }

        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri = request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $results = $CC->getCategory($params['item']->_qname);

        $courses = $CC->parseItems($results->rows, true);
        $sorted = $CC->sortItems($courses);
        $params['courses'] =  $sorted; 
        return view('professional.courses')->with($params);    

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function professionalDevelopment()
    {
        return redirect('/#professional-development'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function educationalActivities()
    {
        return view('professional.educational-activities'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $CC = new CC();
        $results = $CC->getItem($slug);

        if($results == "invalid_token"){
            \File::cleanDirectory(env('CC_TOKEN_STORAGE_PATH'));
            return redirect(request()->fullUrl());
        }
        
        //Slug should be unique, so we should get only one item
        $course = $CC->parseItems($results->rows);
        $params['course'] =  (object) $course[0]; 
        
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri = request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        if($course[0]['hasRelatedArticles'] > 0){
            $related = $CC->getRelatedArticle($course[0]['_qname']);
            $relatedItems = $CC->parseItems($related->rows);
            $params['relatedItems'] =  (object) $relatedItems;
        }
        if($params['course']->contentType == "event_course_ebus" ){
            return view('professional.ebus')->with($params);
        }
        return view('professional.course')->with($params); 
    }

}
