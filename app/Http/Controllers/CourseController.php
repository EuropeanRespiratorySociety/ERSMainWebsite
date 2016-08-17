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
        $item = $CC->parseItems($results->rows);
        
        if(isset($item[0])){
            $params['item'] =  (object) $item[0];   
        } else{
            abort(404);
        }

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri = request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $results = $CC->getCategory($params['item']->_qname);
        $courses = $CC->parseItems($results->rows, true);
        $params['courses'] =  (object) $courses; 
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
        //Slug should be unique, so we should get only one item
        $course = $CC->parseItems($results->rows);

        if(isset($course[0])){
            $params['course'] =  (object) $course[0];   
        } else{
            abort(404);
        }
        
        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri = request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $related = $CC->getRelatedArticle($course[0]['_qname']);
        $relatedItems = $CC->parseItems($related->rows);
        $params['relatedItems'] =  (object) $relatedItems;
        if($params['course']->contentType == "event_course_ebus" ){
            return view('professional.ebus')->with($params);
        }
        return view('professional.course')->with($params); 
    }

}
