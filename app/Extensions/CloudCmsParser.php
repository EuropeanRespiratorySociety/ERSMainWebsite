<?php 

namespace App\Extensions;

use App;
use Embed;
use CC;
use App\Extensions\DateHelper;
use App\Extensions\CloudCmsHelper;
use Carbon\Carbon;
use Lavary\Menu\Menu;
use Intervention\Image\Facades\Image;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;
use Spatie\Geocoder\GeocoderFacade as Geocoder;

class CloudCmsParser
{
    public $parsed;
    
    public function __construct() {
        $this->date = new DateHelper; 
        $this->parsed = [];
        $this->model = CC::setModel('ers:article');
        $this->helper = new CloudCmsHelper;
    }

	public function parse($items, $lead = false){
          if(empty($items) && App::environment() != 'local' && request()->path() != "search"){
                abort(404);
            }
            foreach ($items as $key => $i){
                //$item += $this->model;
                $item = array_replace_recursive($this->model, $i);
                //here we match repeatable elements from CC with the model
                foreach($item['suggestedAccommodation'] as $kk => $s){
                 $item['suggestedAccommodation'][$kk] = array_replace_recursive($this->model['suggestedAccommodation'][0], $s);
                }
                foreach($item['ebusVenues'] as $kk => $s){
                 $item['ebusVenues'][$kk] = array_replace_recursive($this->model['ebusVenues'][0], $s);
                }
                //here we have a Laravel collection
                $item = collect($item);
                //We could cache the request?
                //We create an object to simplify manipulations
                $item = json_decode($item->toJson());
                //dd($item);
                /** 
                * Formating the properties
                */
                //we check if the article has been unpublished. If true we do not parse it
                if(!$item->unPublished){
                    $item->title = $this->formatTitle($item->title);
                    // Markdown Fields
                    $item->lead = Markdown::parse($item->leadParagraph);
                    $item->body = Markdown::parse($item->body);
                    
                    if($item->popUp){
                        $item->popUp = Markdown::parse($item->popUp);
                    }

                    if($item->cancellationPolicy){
                        $item->cancellationPolicy = Markdown::parse($item->cancellationPolicy);
                    }

                    if($item->travelInfo){
                        $item->travelInfo = Markdown::parse($item->travelInfo);
                    }

                    if($item->technicalInfo){
                        $item->technicalInfo = Markdown::parse($item->technicalInfo);
                    }

                    if($item->venue->info){
                        $item->venue->info = Markdown::parse($item->venue->info);

                    }

                    if($item->venue->streetAddress && $item->venue->city && $item->venue->postalCode){
                        if(!$item->loc->lat || !$item->loc->long){
                            $coordinates = $this->helper->getCoordinates($item->venue);
                            $this->helper->setCoordinates($item->_qname, $coordinates['lat'], $coordinates['lng'], $coordinates['accuracy']);
                        }
                    }


                    if($item->suggestedAccommodation){
                        $this->parseVenues($item->suggestedAccommodation);
                    }

                    if($item->ebusVenues){
                        $this->parseVenues($item->ebusVenues);
                    }

                    if($item->abstracts){
                        $this->getBursary($item->abstracts);
                    }

                    if($item->mentorship){
                        $this->getBursary($item->mentorship);
                    }

                    if($item->bursaryApplication){
                        $this->getBursary($item->bursaryApplication);
                    }

                    //Specific fields
                    if($item->sponsors){
                        foreach($item->sponsors as $sponsor){
                            if($sponsor->image){
                                $img = CC::nodes()->getImage($sponsor->image->qname);
                                $sponsor->image = $img->imageUrl."?name=image500&size=500";  
                            } else { 
                                $sponsor->image = false; 
                            }
                            $sponsor->text ?? false;
                        }  
                    }

                    if($item->flags){
                        $item->flags = $this->getFlags($item->flags);
                    }

                    if($item->deadlines){
                        $item->deadlines = $this->getDeadlines($item->deadlines);
                    }
                    
                    // Files/Images
                    if($item->image){
                        $img = CC::nodes()->getImage($item->image->qname);
                        $item->image = $img->imageUrl."?name=image500&size=500";
                    }

                    if($item->highResImage){
                        $img = CC::nodes()->getImage($item->highResImage->qname);
                        $item->highResImage = $img->imageUrl."?name=image1800&size=1800";
                    }  

                    if($item->rulesAndRegulations){
                        $file = CC::nodes()->getFile($item->rulesAndRegulations->title, "path/documents/rules-and-regulations/");
                        $item->rulesAndRegulations = $file->fileUrl;
                    }

                    if($item->programme){
                        $file = CC::nodes()->getFile($item->programme->title, "path/documents/programme/");
                        $item->programme = $file->fileUrl;
                    }

                    if($item->practicalInfo){
                        $file = CC::nodes()->getFile($item->practicalInfo->title, "path/documents/practical_info/");
                        $item->practicalInfo = $file->fileUrl;
                    }

                    if($item->disclosure){
                        $file = CC::nodes()->getFile($item->disclosure->title, "path/documents/disclosures/");
                        $item->disclosure = $file->fileUrl;
                    }

                    // Video
                    if($item->video){
                     $item->video = $this->getVideo($item->video, 400);
                    }
          
                    if($item->eventDate && $item->eventEndDate){
                        $item->eventDates = $this->date->ersDate($item->eventDate, $item->eventEndDate);
                        $item->startDateTimestamp = $this->date->toTimestamp($item->eventDate);
                        $item->startDate = $this->date->ersDate($item->eventDate);
                        $item->endDate = $this->date->ersDate($item->eventEndDate);
                    } elseif($item->eventDate && !$item->eventEndDate){
                        $item->eventDates = $this->date->ersDate($item->eventDate);
                        $item->startDateTimestamp = $this->date->toTimestamp($item->eventDate);
                        $item->startDate = $item->eventDates;
                        $item->endDate = false;
                    } else {
                        $item->eventDates = false;
                        $item->startDateTimestamp = false;
                        $item->startDate = false;
                        $item->endDate = false;    
                    }
                    if($item->earlybirdDeadline){
                        $item->earlybirdDeadline = $this->date->isAlreadyPassed($item->earlybirdDeadline);
                    }

                    if($item->extendedDeadline){
                        $item->extendedDeadline = $this->date->ersDate($item->extendedDeadline);
                    }

                    if($item->openingDate){
                        $item->openingDate = $this->date->ersDate($item->openingDate);
                    }

                    // Added fields to the model
                    $item->typeColor = $item->type ? $this->setTypeColor($item->type) : false;
                    $item->articleOneColumn = $item->articleOneColumn ?? false;
                    $item->createdOn = isset($item->_system->created_on->timestamp) ? $this->date->ersDate($item->_system->created_on->timestamp) : false;
                    $item->modifiedOn = isset($item->_system->modified_on->timestamp) ? $this->date->ersDate($item->_system->created_on->timestamp) : false;
                    $item->calendar = $item->eventDate ? $this->date->calendar($item->eventDate) : false;
                    $item->ms = $item->_system->modified_on->ms ?? false;   
                    $item->shortLead = $item->leadParagraph ? $this->truncate(strip_tags(Markdown::parse($item->leadParagraph)), 145) : false;
                    $item->hasRelatedArticles = $item->_statistics->{'ers:related-association'} ?? 0;
                    $item->hasAuthor = $item->_statistics->{'ers:author-association'} ?? 0;
                    $item->salutation = $item->salutation ?? false;
                    $item->firstName = $item->firstName ?? false;
                    $item->lastName = $item->lastName ?? false;
                    //removing empty arrays
                    foreach($item as $k => $v){
                        if(empty($v)){
                            $item->$k = false; 
                        }
                    }
                    $this->parsed[$key] = $item;               
                }
            }
            return $this->parsed; 
    }

    protected function setTypeColor($type){
        if( $type == "ERS Course" || 
            $type == "ERS Online course" || 
            $type == "e-learning" || 
            $type == "ERS Skill workshop" || 
            $type == "ERS Skills course"|| 
            $type == "ERS Endorsed activity" || 
            $type == "Hands-on"){
            
            return "label-school";
        }

        return "label-scientific";

    }

    protected function getDocuments($documents){
    	$files = [];
    	foreach($documents as $key => $document){
    		$files[$key]['url'] = CC::nodes()->deploymentUrl.'/static/path/documents/documents/'.$document->title;
    	}

    	return $files;
    }

    protected function getVideo($url, $width){
        $video = Embed::make($url)->parseUrl();
        if($video){
            $video->setAttribute(['width' => $width]);
            return $video->getHtml();
        }

        return $video; //should return false
    }

    protected function getFlags($flags){
        foreach ($flags as $key => $flag) {
            $flag->text ?? false;
            if($flag->text){
                $flag->text = $this->truncate($flag->text, 42);
            }
            $flag->color ?? false;
        }
        // return only one for now
        if(isset($flag)){
            return $flag;
        }
    }

    protected function parseVenues($items){  
        foreach ($items as $item) {
            $item->info = $item->info ? Markdown::parse($item->info) : false;
        } 
    }

    protected function getDeadlines($item){
            $item->applicationDeadline = $this->date->ersDate($item->applicationDeadline);
            $item->applicationDeadline2 = $this->date->ersDate($item->applicationDeadline2);
            // $item->notification = $item->notification ?? false;
            // $item->notification2 = $item->notification2 ?? false;
            // $item->startDate = $item->startDate ?? false;
            // $item->startDate2 = $item->startDate2 ?? false;

            return $item;

    }

    protected function getBursary($bursary){

    	   $bursary->text = $bursary->text ? Markdown::parse($bursary->text) : false;
    	   $bursary->deadline = $bursary->deadline ? $this->date->ersDate($bursary->deadline) : false;
    	   $bursary->notificationOfResults = $bursary->notificationOfResults ? $this->date->ersDate($bursary->notificationOfResults) : false;
    	   $bursary->applyButtonUrl = $bursary->applyButtonUrl ? $bursary->applyButtonUrl : false;

    }

    public function truncate($string, $length = 80, $append="&hellip;"){
    	$string = trim($string);

    	if(strlen($string) > $length) {
    		$string = wordwrap($string, $length);
    		$string = explode("\n", $string, 2);
    		$string = $string[0]. $append;
    	}
        
    	return $string;

    }

    public function formatTitle($title){
        $array = explode('|', $title);
        if(empty($array['0'])) return false;
        return $array['0'];
    }


}