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

class CloudCmsParser
{
    public $parsed;
    
    public function __construct() {
        $this->date = new DateHelper; 
        $this->parsed = [];
        $this->model = CC::setModel('ers:article');
        //Have to set Manually 
        $this->digestModel = [
            'title' => false,
            'slug' => false,
            'author' => false,
            'journal' => false,
            'journalLink' => false,
            'leadParagraph' => false,
            'shortLead' => false,
            'digestType' => false,
            'digestAuthor' => false,
            'comments' => false,
            'url' => false,
            'uri' => false,
            'unPublished' => false,
            '_system' => false,
            '_qname' => false,
            '_statistics' => false
        ];
        $this->helper = new CloudCmsHelper;
    }

	public function parse($items, $lead = false){
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
                /** 
                * Formating the properties
                */
                //we check if the article has been unpublished. If true we do not parse it
                if(!$item->unPublished){
                    $item->title = $this->formatTitle($item->title);
                    // Markdown Fields
                    $item->lead = Markdown::parse($item->leadParagraph);
                    $item->body = Markdown::parse($item->body);
                    $item->body2 = Markdown::parse($item->body2);
                    $item->body3 = Markdown::parse($item->body3);
                    $item->body4 = Markdown::parse($item->body4);
                    $item->references = Markdown::parse($item->references);

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
                            if(isset($sponsor->image) && $sponsor->image){
                                $img = CC::nodes()->getImage($sponsor->image->qname);
                                $sponsor->image = $img->imageUrl."?name=image500&size=500"."&v=".$item->_system->changeset;  
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
                        $item->image = $img->imageUrl."?name=image500&size=500"."&v=".$item->_system->changeset;
                    }

                    if($item->highResImage){
                        $img = CC::nodes()->getImage($item->highResImage->qname);
                        $item->highResImage = $img->imageUrl."?name=image1800&size=1800"."&v=".$item->_system->changeset;
                    }  

                    if($item->rulesAndRegulations){
                        $item->rulesAndRegulations = $this->getFile($item->rulesAndRegulations->id, $item->_system->changeset);
                    }

                    if($item->programme){
                        $item->programme = $this->getFile($item->programme->id, $item->_system->changeset);
                    }

                    if($item->practicalInfo){
                        $item->practicalInfo = $this->getFile($item->practicalInfo->id, $item->_system->changeset);
                    }

                    if($item->disclosure){
                        $item->disclosure = $this->getFile($item->disclosure->id, $item->_system->changeset);
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
                        $ersDateResult = $this->date->ersDate($item->eventDate);
                        if($item->eventTime){
                            $item->eventDates = $ersDateResult.' - '.$item->eventTime;
                        }else{
                            $item->eventDates = $ersDateResult;
                        }
                        $item->startDateTimestamp = $this->date->toTimestamp($item->eventDate);
                        $item->startDate = $ersDateResult;
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

                    if($item->deadline){
                      $item->deadline = $this->date->ersDate($item->deadline);
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
                    $item->modifiedOn = isset($item->_system->modified_on->timestamp) ? $this->date->ersDate($item->_system->modified_on->timestamp) : false;
                    $item->calendar = $item->eventDate ? $this->date->calendar($item->eventDate) : false;
                    $item->ms = $item->_system->modified_on->ms ?? false;   
                    $item->shortLead = $item->leadParagraph ? $this->truncate(strip_tags(Markdown::parse($item->leadParagraph)), 145) : false;
                    $item->hasRelatedArticles = $item->_statistics->{'ers:related-association'} ?? 0;
                    $item->hasRelatedCpdModules = $item->_statistics->{'ers:cpd-article-module-association'} ?? 0;
                    $item->hasRelatedModules = $item->_statistics->{'ers:article-module-association'} ?? 0;
                    $item->hasAuthor = $item->_statistics->{'ers:author-association'} ?? 0;
                    $item->salutation = $item->salutation ?? false;
                    $item->firstName = $item->firstName ?? false;
                    $item->lastName = $item->lastName ?? false;

                    $item->diseaseModules = $this->concatCpdModules($item);
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

    public function parseDigest($items, $lead = false){
        foreach ($items as $key => $i){
            $item = array_replace_recursive($this->digestModel, $i);
            //here we have a Laravel collection
            $item = collect($item);
            //We could cache the request?
            //We create an object to simplify manipulations
            $item = json_decode($item->toJson());
            /** 
            * Formating the properties
            */
            //we check if the article has been unpublished. If true we do not parse it
            if(!$item->unPublished){
                $item->title = $this->formatTitle($item->title);
                // Markdown Fields
                $item->lead = Markdown::parse($item->leadParagraph);

                // Added fields to the model
                $item->titleTruncate = $item->title ? $this->truncate($item->title, 100) : false;
                $item->digestTypeTruncate = $item->digestType ? $this->truncate($item->digestType, 30) : false;
                $item->digestAuthorsTruncate = $item->digestAuthor ? $this->truncate($item->digestAuthor, 40) : false;
                $item->journalTruncate = $item->journal ? $this->truncate($item->journal, 60) : false;
                $item->authorTruncate = $item->author ? $this->truncate($item->author, 50) : false;
                $item->createdOn = isset($item->_system->created_on->timestamp) ? $this->date->ersDate($item->_system->created_on->timestamp) : false;
                $item->modifiedOn = isset($item->_system->modified_on->timestamp) ? $this->date->ersDate($item->_system->modified_on->timestamp) : false;
                $item->ms = $item->_system->modified_on->ms ?? false;   
                $item->shortLead = $item->leadParagraph ? $this->truncate(strip_tags(Markdown::parse($item->leadParagraph)), 145) : false;
                $item->hasRelatedArticles = $item->_statistics->{'ers:related-association'} ?? 0;
                $item->hasAuthor = $item->_statistics->{'ers:author-association'} ?? 0;
               
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
            $type == "Hands-on" ||
            $type == "ERS Webinar"){
            
            return "label-school";
        }

        return "label-scientific";

    }

    protected function getFile($nodeId, $changeset){
        $fileUrl = CC::nodes()->deploymentUrl.'/static?node='.$nodeId.'&v='.$changeset;
        return $fileUrl;
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

    public function concatCpdModules($item){
        $diseaseModules = [];
        if(isset($item->cpdAirwayDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdAirwayDisease);
        }
        if(isset($item->cpdInterstitialDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdInterstitialDisease);
        }
        if(isset($item->cpdPaediatricDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdPaediatricDisease);
        }
        if(isset($item->cpdPulmonaryDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdPulmonaryDisease);
        }
        if(isset($item->cpdCriticalCareDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdCriticalCareDisease);
        }
        if(isset($item->cpdInfectionsDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdInfectionsDisease);
        }
        if(isset($item->cpdSleepDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdSleepDisease);
        }
        if(isset($item->cpdThoracicDisease)){
            $diseaseModules = array_merge($diseaseModules, $item->cpdThoracicDisease);
        }
        $positionNumber = 1;
        foreach($diseaseModules as $index => $diseaseModule){
            $diseaseModule->positionNumber = $positionNumber++;
            $diseaseModule->body = Markdown::parse($diseaseModule->body);
        }
        return $diseaseModules;
    }
}