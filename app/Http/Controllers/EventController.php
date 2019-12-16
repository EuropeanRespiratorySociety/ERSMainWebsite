<?php

namespace App\Http\Controllers;

use CC;
//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CCH;
use App\Extensions\CloudCmsParser as CCP;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;

//Respiratory Failure and Mechanical Ventilation Controller
class EventController extends Controller
{
    public function __construct() {
        $this->CCH = new CCH();
        $this->CCP = new CCP();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function rfmvIndex()
  { 
    $results = $this->CCH->getItem('ers-respiratory-failure-and-mechanical-ventilation-conference');
    $params = $this->buildParamsModel($results['rows']);    
    return view('congress-and-events.event-main')->with($params);    
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rfmvShow($slug)
    {
        $results = $this->CCH->getItem($slug);
        $params = $this->buildParamsModel($results['rows']);
        $params['landingPage'] = (object)   array('title' => 'all RF&MV', 'link' => 'congress-and-events/ers-respiratory-failure-and-mechanical-ventilation-conference');
        $params['faculties'] = $this->rfmvFaculties($slug);
        return view('congress-and-events.event')->with($params); 
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function lscIndex()
  { 
    $results = $this->CCH->getItem('ers-lung-science-conference');
    $params = $this->buildParamsModel($results['rows']);
    return view('congress-and-events.event-main')->with($params);    
  }

  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lscShow($slug)
    {
        $results = $this->CCH->getItem($slug);
        $params = $this->buildParamsModel($results['rows']);
        $params['landingPage'] = (object)   array('title' => 'all LSC', 'link' => 'congress-and-events/ers-lung-science-conference');
        $params['faculties'] = false;
        return view('congress-and-events.event')->with($params); 
    }


    private function buildParamsModel($article){
        $item = $this->CCH->parseItems($article);
        $params['item'] =  (object) $item[0]; 
        
        if(!$item[0]->url || !$item[0]->uri){
            $this->CCH->setCanonical($item[0]->_qname);
        }
        $params['relatedItems'] = false;
        if($item[0]->related){
            foreach($item[0]->related as $relatedItem){
                if(isset($relatedItem->highResImage)){
                    $img = CC::nodes()->getImage($relatedItem->highResImage->qname);
                    $relatedItem->highResImage = $img->imageUrl."?name=image1800&size=1800"."&v=".$item[0]->_system->changeset;
                }
                if(isset($relatedItem->title)){
                    $relatedItem->title = $this->CCP->formatTitle($relatedItem->title);
                }
                if(isset($relatedItem->leadParagraph)){
                    $relatedItem->leadParagraph = Markdown::parse($relatedItem->leadParagraph);
                }
            }
            $params['relatedItems'] =  (object) $item[0]->related;
        }
        return $params;
    }

    private function rfmvFaculties($slug){
        if($slug === "rfmv-programme"){
            $faculty1 = new UiFaculty(
                "faculty1",
                "https://cdn.ersnet.org/preview/node/o:1c82277e9ce8e5229b37?name=img120&v1",
                "Professor Laurent Brochard",
                "Division Director,University of Toronto Interdepartmental Division of Critical Care Medicine",
                "&quot;The way we deliver Mechanical Ventilation has a huge impact on patient’s various outcomes. In addition, it is a window into our patients’ physiology, which is largely underused.&quot;"
            );
            $faculty2 = new UiFaculty(
                "faculty2",
                "https://cdn.ersnet.org/preview/node/o:52b05b116f22297adef6?name=img120&v1",
                "Dr Lise Piquilloud",
                "Associate Physician, Medical Senior Lecturer and Privat-Docent, Intensive Adult Medicine, University of Lausanne",
                "&quot;Take the great opportunity to meet specialists from chronic, acute and paediatric respiratory failure at the same conference. I encourage early career professionals to attend and get a comprehensive coverage of the main topics in the field.&quot;"
            );
            $faculty3 = new UiFaculty(
                "faculty3",
                "https://cdn.ersnet.org/preview/node/o:d51d778e56e15dbfec6d?name=img120&v1",
                "Professor Alexandre Demoule",
                "Medical Director and Principal Investigator,<br> Sorbonne Université",
                "&quot;Factors that make this new conference unique include the large variety of topics covered over the three specialist tracks, the hands on state-of-the-art sessions, and the inclusion of renowned speakers from all over the world. It is difficult to choose a particular highlight within the programme, as it is fantastic from the beginning to end! Early career professionals are especially encouraged to attend, as the programme has been developed with them in mind to ensure it is accessible.&quot;"
            );
            $faculty4 = new UiFaculty(
                "faculty4",
                "https://cdn.ersnet.org/preview/node/o:3be50550f96b63fe64ea?name=img120&v1",
                "Professor Martin Tobin",
                "Pulmonary and Critical Care Medicine, <br>Loyola University Medical Center",
                "&quot;Worsening of respiratory disease ultimately causes ventilatory failure, and every respirologist needs to have expertise in management of ventilator support. This conference will provide essential knowledge and is structured especially for junior physicians.&quot;"
            );
            $faculty5 = new UiFaculty(
                "faculty5",
                "https://cdn.ersnet.org/preview/node/o:31dbf75d883365bf1141?name=img120&v1",
                "Professor Nicholas Hart",
                "Clinical Director Lane Fox Respiratory Service,<br> Guy's and St Thomas' NHS Foundation Trust London",
                "&quot;Get 2020 vision and join this superstar faculty in Berlin for the best respiratory failure and mechanical ventilation conference in Europe.&quot;"
            );
            return (object) array(
                $faculty1,
                $faculty2,
                $faculty3,
                $faculty4, 
                $faculty5, 
            );
        }else{
            return false;
        }
    }
}


class UiFaculty
{
    public function __construct($id, $imgSrc, $fullName, $title, $description)
    {
        $this->id = $id;
        $this->imgSrc = $imgSrc;
        $this->fullName = $fullName;
        $this->title = $title;
        $this->description = $description;
    }
}
