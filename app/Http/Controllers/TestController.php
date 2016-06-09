<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use Carbon\Carbon;

use Idealley\CloudCmsSDK\Auth;
use Idealley\CloudCmsSDK\ClientBase;
use Idealley\CloudCms\Facades\CloudCms as CC;
use Intervention\Image\Facades\Image;
use League\OAuth2\Client\Provider\GenericProvider;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$node = "o:f913cff03624ac461283"; //courses
        $node = "o:1700d6e06750917d4d86" ; //Noninvasive ventilation: basic concepts
        $node ="ers:homePageAvailable";
        $association = "ers:category-association";

        $payload =       
            '{
                "search": "clinical",
                "traverse": {
                    "ers:category-association": "INCOMING"
                }
            }';

       /* $results = CC::nodes()
            ->listRelatives($node)
            ->addParams(['type' => 'ers:category-association'])
            ->addParams(['full' => 'true'])
            ->get(); */

        $query = '{ "enabled": true }';

        $results = CC::nodes()
            ->listAssociationItems($node, $association)
            ->addParams(['full' => 'true'])
            ->addParams(['direction' => 'INCOMING'])
            ->get();

        //$homepage = CC::nodes()->find($query)->get();   
       //dd($homepage);
dd($results);
        foreach ($results->rows as $key => $course) {
                    $courses[$key]['title'] = $course->title;
                    $courses[$key]['slug'] = $course->slug;
                    $courses[$key]['type'] = $course->type;
                    $courses[$key]['lead'] = $course->leadParagraph;
                    $courses[$key]['eventDates'] = $this->eventDate($course->eventDate, $course->eventEndDate);
                    $courses[$key]['eventLocation'] = $course->eventLocation;
                    $courses[$key]['registerButton'] = (array) $course->registerButton;
                    $courses[$key]['flag'] = (array) $course->flags;

                    //$img = CC::nodes()->deploymentUrl.'static/path/Samples/Catalog/Products/'.$course['_features']['f:filename']['filename'];
                    $features = (array) $course->_features;
                   //link to documents https://53ed64a9-671f-4e65-9f57-5e736e3d5d62-hosted.cloudcms.net/static/path/documents/documents/Bedroom_reservation_form_ERS_26-30_10_2016.pdf
                    //This function can be used by passing the _qname of the image
                    //CC::nodes()->getImage($_qname);
                    
                    //The path is correct, just put the file name there, but somehow it does not get attached to the element...
                    /*$img = CC::nodes()->deploymentUrl.'/static/path/images/'.$features['f:filename']->filename;

                    $courses[$key]['image'] = Image::cache(function($image) use($img){
                     return $image->make($img)->resize(420, 115, function ($constraint) {
                            $constraint->aspectRatio();
                        })->encode('data-url');
                 });*/



            }  
        dd($courses);    
        $params['courses'] =  (object) $courses; 
        return view('professional.ers-courses')->with($params);    

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
    public function show($id)
    {
        //
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

    private function eventDate($start, $end)
    {
        $startDate = new \DateTime($start);
        $start = Carbon::instance($startDate);
        $endDate = new \DateTime($end);   
        $end = Carbon::instance($endDate);

        $eventDate = $start->day.'-'.$end->day.' '.$end->format('F').', '.$end->year; 
        
        return $eventDate;
    }
}
