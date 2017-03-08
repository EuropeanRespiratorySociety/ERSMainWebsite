<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

class RedirectController extends Controller
{
    /**
     * Redirect.
     *
     * @return \Illuminate\Http\Response
     */
    public function careerDevelopment()
    {
        return redirect('/#career-development'); 
    }

    /**
     * Redirect to home slide url.
     *
     * @return \Illuminate\Http\Response
     */
    public function publications()
    { 
        return redirect('/#publications');
    }

    /**
     * Redirect to home slide url.
     *
     * @return \Illuminate\Http\Response
     */
    public function community()
    { 
        return redirect('/#community');
    }

    /**
     * Redirect to home slide url.
     *
     * @return \Illuminate\Http\Response
     */
    public function research()
    { 
        return redirect('/#research');
    }

    /**
     * Redirect to home slide url.
     *
     * @return \Illuminate\Http\Response
     */
    public function sciAndEduEvents()
    { 
        return redirect('/#scientific-and-educational-events');
    }

    /**
     * Redirect to home slide url.
     *
     * @return \Illuminate\Http\Response
     */
    public function advocacy()
    { 
        return redirect('/#advocacy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchSeminars()
    { 
        return redirect('/research/research-seminars');  
    }        



}