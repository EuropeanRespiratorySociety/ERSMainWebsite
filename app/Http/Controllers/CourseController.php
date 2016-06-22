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
        $results = $CC->getCategory($this->courses);
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
        $params['course'] =  (object) $course[0]; 
        return view('professional.course')->with($params); 
    }

}
