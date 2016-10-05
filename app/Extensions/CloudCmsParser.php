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
        $this->helper = new CloudCmsHelper;
    }

	public function parse($items, $lead = false){
           //dd($items);
          if(empty($items) && App::environment() != 'local' && request()->path() != "search"){
                abort(404);
            }
                $parsed = [];
                foreach ($items as $key => $item) {
                    $unPublished = $item->unPublished ?? false ;

                    if($unPublished != true) {   
                        $parsed[$key]['unpublished'] = $unPublished;
                        $parsed[$key]['comments'] = $item->comments ?? false;
                        if(isset($item->title)){
                            $parsed[$key]['title'] = $this->formatTitle($item->title);
                        }
                        if(isset($item->salutation)){$parsed[$key]['salutation'] = $item->salutation;}
                        if(isset($item->firstName)){$parsed[$key]['firstName'] = $item->firstName;}
                        if(isset($item->lastName)){$parsed[$key]['lastName'] = $item->lastName;}
                        if(isset($item->email)){$parsed[$key]['email'] = $item->email;}
                        if(isset($item->tagLine)){$parsed[$key]['tagLine'] = $item->tagLine;}
                        if(isset($item->subTitle)){
                            $parsed[$key]['subtitle'] = $item->subTitle;
                        }   
                        if(isset($item->slug)){$parsed[$key]['slug'] = $item->slug;}
                        if (isset($item->tags)){$parsed[$key]['tags'] = $item->tags;}
                        if(isset($item->flags)){$parsed[$key]['flags'] = $this->getFlags($item->flags);}
                        $parsed[$key]['fullyBooked'] = $item->fullyBooked ?? false;
                        if(isset($item->contentType)){$parsed[$key]['contentType'] = $item->contentType;}
                        if(isset($item->type)){$parsed[$key]['type'] = $item->type;}
                        $parsed[$key]['contrastOnHomepage'] = $item->contrastOnHomepage ?? false;
                        $parsed[$key]['mainNews'] = $item->mainNews ?? false;
                        if(isset($item->type)){$parsed[$key]['typeColor'] = $this->setTypeColor($item->type);}
                        if(isset($item->category)){
                            if(isset($item->category->title)){$parsed[$key]['category'] = $item->category->title;}
                            if(isset($item->category->qname)){$parsed[$key]['categoryId'] = $item->category->qname;}
                        }
                        if(isset($item->category2)){
                            $parsed[$key]['category2'] = $item->category2;
                        }   
                        if(isset($item->_qname)){$parsed[$key]['_qname'] = $item->_qname;}
                        if(isset($item->_type)){$parsed[$key]['_type'] = $item->_type;}
                        if(isset($item->ebusDate)){
                            $parsed[$key]['ebusDate'] = $item->ebusDate;
                        }  
                        if(isset($item->eventDate) && isset($item->eventEndDate)){
                            $parsed[$key]['eventDates'] = $this->date->ersDate($item->eventDate, $item->eventEndDate);
                            $parsed[$key]['startDateTimestamp'] = $this->date->toTimestamp($item->eventDate);
                            $parsed[$key]['startDate'] = $this->date->ersDate($item->eventDate);
                            $parsed[$key]['endDate'] = $this->date->ersDate($item->eventEndDate);
                        } elseif(isset($item->eventDate) && !isset($item->eventEndDate)){
                            $parsed[$key]['eventDates'] = $this->date->ersDate($item->eventDate);
                            $parsed[$key]['startDateTimestamp'] = $this->date->toTimestamp($item->eventDate);
                            $parsed[$key]['startDate'] = $this->date->ersDate($item->eventDate);
                        }
                        if(isset($item->eventDate)){$parsed[$key]['calendar'] = $this->date->calendar($item->eventDate);}   
                        if(isset($item->earlybirdDeadline)){$parsed[$key]['earlybirdDeadline'] = $this->date->isAlreadyPassed($item->earlybirdDeadline);}
                        if(isset($item->extendedDeadline)){ $parsed[$key]['extendedDeadline'] = $this->date->ersDate($item->extendedDeadline);}
                        if(isset($item->_system->created_on->timestamp)){ $parsed[$key]['createdOn'] = $this->date->ersDate($item->_system->created_on->timestamp);}
                        $parsed[$key]['doNotDisplayCreatedOn'] = $item->doNotDisplayCreatedOn ?? false ;
                        if(isset($item->_system->created_on->ms)){ $parsed[$key]['ms'] = $item->_system->created_on->ms;}
                        if(isset($item->openingDate)){ $parsed[$key]['openingDate'] = $this->date->ersDate($item->openingDate);}
                        if(isset($item->eventLocation)){$parsed[$key]['eventLocation'] = $item->eventLocation;}                
                        
                        if(isset($item->leadParagraph)){
                            $parsed[$key]['shortLead'] = $this->truncate(strip_tags(Markdown::parse($item->leadParagraph)));
                            $parsed[$key]['lead'] = Markdown::parse($item->leadParagraph);
                        }

                        if(isset($item->registerButton)){$parsed[$key]['registerButton'] = (array) $item->registerButton;}

                        if(isset($item->image)){
                            $img_qname = $item->image->qname;
                            $img = CC::nodes()->getImage($img_qname);
                            $parsed[$key]['image'] = $img->imageUrl."?name=image500&size=500";
                        }

                        if(isset($item->highResImage)){
                            $img_qname = $item->highResImage->qname;
                            $img = CC::nodes()->getImage($img_qname);
                            $parsed[$key]['highResImage'] = $img->imageUrl."?name=image1800&size=1800";
                        }

                        if(isset($item->imageAlignment)){$parsed[$key]['imageAlignment'] = $item->imageAlignment;}
                        if(isset($item->itemImageAlignment)){$parsed[$key]['itemImageAlignment'] = $item->itemImageAlignment;}
                        if(isset($item->itemImageBackgroundSize)){$parsed[$key]['itemImageBackgroundSize'] = $item->itemImageBackgroundSize;}
                        if(isset($item->imageSize)){$parsed[$key]['imageSize'] = $item->imageSize;}
                        if(isset($item->imageDescription)){$parsed[$key]['imageDescription'] = $item->imageDescription;}
                        if(isset($item->url)){$parsed[$key]['url'] = $item->url;}
                        if(isset($item->uri)){$parsed[$key]['uri'] = $item->uri;}
                        $parsed[$key]['featuredCourse'] = $item->featuredCourse ?? false;
                        $parsed[$key]['featuredFunding'] = $item->featuredFunding ?? false;
                        $parsed[$key]['nonErsCalendarItem'] = $item->nonErsCalendarItem ?? false;
                        $parsed[$key]['ersEndorsedEvent'] = $item->ersEndorsedEvent ?? false;
                        $parsed[$key]['hasRelatedArticles'] = $item->_statistics->{'ers:related-association'} ?? 0;
                        $parsed[$key]['hasAuthor'] = $item->_statistics->{'ers:author-association'} ?? 0;

                        if(isset($item->sponsors) && !empty($item->sponsors)){$parsed[$key]['sponsors'] = $this->getSponsors($item->sponsors);}

                        if(!$lead){
                            if(isset($item->organisers)){ $parsed[$key]['organisers'] = $item->organisers;}
                            if(isset($item->faculty)){ $parsed[$key]['faculty'] = $item->faculty;}
                            if(isset($item->body)){$parsed[$key]['body'] = Markdown::parse($item->body);}
                            if(isset($item->popUp)){$parsed[$key]['popUp'] = Markdown::parse($item->popUp);}
                            if(isset($item->popUpText)){$parsed[$key]['popUpText'] = $item->popUpText;}
                            $parsed[$key]['articleTwoColumns'] = $item->articleTwoColumns ?? false;
                            if(isset($item->feeList)){$parsed[$key]['feeList'] = $item->feeList;}
                            if(isset($item->cancellationPolicy)){$parsed[$key]['cancellationPolicy'] = Markdown::parse($item->cancellationPolicy);}
                            if(isset($item->travelInfo)){$parsed[$key]['travelInfo'] = Markdown::parse($item->travelInfo);}
                            if(isset($item->technicalInfo)){$parsed[$key]['technicalInfo'] = Markdown::parse($item->technicalInfo);}
                            if(isset($item->deadlines)){$parsed[$key]['deadlines'] = $this->getDeadlines($item->deadlines);}
                            if(isset($item->venue)){
                                if(isset($item->venue)){$parsed[$key]['venue'] = $item->venue ;}
                                if(isset($parsed[$key]['venue']->info)){$parsed[$key]['venue']->info = Markdown::parse($item->venue->info) ;}
                            }
                            if(isset($item->suggestedAccommodation)){$parsed[$key]['suggestedAccommodation'] = $this->parseVenues($item->suggestedAccommodation);}
                            if(isset($item->ebusVenues)){$parsed[$key]['ebusVenues'] = $this->parseVenues($item->ebusVenues);}
                            if(isset($item->abstracts)){$parsed[$key]['abstracts'] = $this->getBursary($item->abstracts);}
                            if(isset($item->mentorship)){$parsed[$key]['mentorship'] = $this->getBursary($item->mentorship);}
                            if(isset($item->bursaryApplication)){$parsed[$key]['bursaryApplication'] = $this->getBursary($item->bursaryApplication);}
                            if(isset($item->documents)){$parsed[$key]['documents'] = $this->getDocuments($item->documents);}
                            if(isset($item->programme)){
                                $path = "path/documents/programme/";
                                $file_title = $item->programme->title;
                                $file = CC::nodes()->getFile($file_title, $path);
                                $parsed[$key]['programmeFile'] = $file;
                            }
                            if(isset($item->programmeButtonText)){ $parsed[$key]['programmeButtonText'] =$item->programmeButtonText;}
                            if(isset($item->programmeNotice)){ $parsed[$key]['programmeNotice'] =$item->programmeNotice;}
                            if(isset($item->rulesAndRegulations)){
                                $path = "path/documents/rules-and-regulations/";
                                $file_title = $item->rulesAndRegulations->title;
                                $file = CC::nodes()->getFile($file_title, $path);
                                $parsed[$key]['rulesAndRegulations'] = $file->fileUrl;
                            }

                            if(isset($item->practicalInfo)){
                                $path = "path/documents/practical_info/";
                                $file_title = $item->practicalInfo->title;
                                $file = CC::nodes()->getFile($file_title, $path);
                                $parsed[$key]['practicalInfoFile'] = $file;
                            }

                            if(isset($item->disclosure)){
                                $path = "path/documents/disclosures/";
                                $file_title = $item->disclosure->title;
                                $file = CC::nodes()->getFile($file_title, $path);
                                $parsed[$key]['disclosureFile'] = $file;
                            }
                            if(isset($item->practicalInfoButton)){$parsed[$key]['practicalInfoButton'] = $item->practicalInfoButton;}
                            if(isset($item->loc->lat)&&isset($item->loc->long)){
                                $parsed[$key]['location'] = (object) $item->loc;
                            } else {
                                if(isset($item->venue)){
                                    $coordinates = $this->helper->getCoordinates($item->venue);
                                    $this->helper->setCoordinates($item->_qname, $coordinates['lat'], $coordinates['lng'], $coordinates['accuracy']);
                                }
                            }
                            if(isset($item->video)){$parsed[$key]['video'] = $this->getVideo($item->video, 400);}                   
                        }
                    } 
                }     
           //dd($parsed);
        return $this->parsed = $parsed; 
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
            $parsed[$key]['text'] = $flag->text;
            $parsed[$key]['color'] = $flag->color;
        }
        if(isset($parsed)){
            return $parsed[0];
        }
    }

    protected function getSponsors($sponsors){
        unset($parsed);
        foreach ($sponsors as $key => $sponsor) {
            if(isset($sponsor->text)){$parsed[$key]['text'] = $sponsor->text;}
            if(isset($sponsor->image)){
                        $img_qname = $sponsor->image->qname;
                        $img = CC::nodes()->getImage($img_qname);
                        $parsed[$key]['image'] = $img->imageUrl."?name=image200&size=200";
                    }
                    /*if(isset($img)){
                        $parsed[$key]['image'] = Image::cache(function($image) use($img){
                         return $image->make($img->imageUrl)->resize(null, 50, function ($constraint) {
                                $constraint->aspectRatio();
                            })->encode('data-url');
                        });
                    }*/
        }
        if(isset($parsed)){
            return $parsed[0];
        }
    }

    protected function parseVenues($items){
        $parsed = [];
        foreach ($items as $key => $item) {
    
            if(isset($item->info)){$parsed[$key]['info'] = Markdown::parse($item->info);}
            if(isset($item->name)){$parsed[$key]['name'] = $item->name;}
            if(isset($item->url)){$parsed[$key]['url'] = $item->url;}
            if(isset($item->streetAddress)){$parsed[$key]['streetAddress'] = $item->streetAddress;}
            if(isset($item->streetAddress2)){$parsed[$key]['streetAddress2'] = $item->streetAddress2;}
            if(isset($item->streetAddress3)){$parsed[$key]['streetAddress3'] = $item->streetAddress3;}
            if(isset($item->postalCode)){$parsed[$key]['zip'] = $item->postalCode;}
            if(isset($item->city)){$parsed[$key]['city'] = $item->city;}
            if(isset($item->country)){$parsed[$key]['country'] = $item->country;}
            if(isset($item->phoneNumber)){$parsed[$key]['phone'] = $item->phoneNumber;}

        }

            return (object) $parsed;

    }

    protected function getDeadlines($item){
        $parsed = [];
    
            if(isset($item->applicationDeadline)){
                $parsed['applicationDeadline'] = $this->date->ersDate($item->applicationDeadline);
            } else {
                 $parsed['applicationDeadline'] = false;
            }
            if(isset($item->applicationDeadline2)){
                $parsed['applicationDeadline2'] = $this->date->ersDate($item->applicationDeadline2);
            } else {
                $parsed['applicationDeadline2'] = false;
            } 
            $parsed['notification'] = $item->notification ?? false;
            $parsed['notification2'] = $item->notification2 ?? false;
            $parsed['startDate'] = $item->startDate ?? false;
            $parsed['startDate2'] = $item->startDate2 ?? false;

            return (object) $parsed;

    }

    protected function getBursary($bursary){
    	   $parsed = [];

    	   if(isset($bursary->text)){$parsed['text'] = Markdown::parse($bursary->text);}
    	   if(isset($bursary->deadline)){$parsed['deadline'] = $this->date->ersDate($bursary->deadline);}
    	   if(isset($bursary->notificationOfResults)){$parsed['results'] = $this->date->ersDate($bursary->notificationOfResults);}
    	   if(isset($bursary->applyButtonUrl)){$parsed['url'] = $bursary->applyButtonUrl;}

           if(empty($parsed) || !isset($bursary->applyButtonUrl)){
                return $parsed = false;
           }

    	   return (object) $parsed;

    }

    public function truncate($string, $length=80, $append="&hellip;"){
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
        return $array['0'];
    }


}