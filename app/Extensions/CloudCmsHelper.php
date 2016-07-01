<?php 

namespace App\Extensions;

use Carbon\Carbon;
use Lavary\Menu\Menu;
use Idealley\CloudCms\Facades\CloudCms as CC;
use Intervention\Image\Facades\Image;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;

class CloudCmsHelper
{
    public function getCategory($catnode){
        $results = CC::nodes()
            ->listRelatives($catnode)
            ->addParams(['type' => 'ers:category-association'])
            ->addParams(['full' => 'true'])
            ->get();

        return $results;    
    }

    public function getAuthoredArticles($catnode){
        $results = CC::nodes()
            ->listRelatives($catnode)
            ->addParams(['type' => 'ers:author-association'])
            ->addParams(['full' => 'true'])
            ->get();

        return $results;    
    }

    public function getRelatedArticle($node){
        $results = CC::nodes()
            ->listRelatives($node)
            ->addParams(['type' => 'ers:related-association']) 
            ->addParams(['full' => 'true'])
            ->get();

        return $results;    
    }
    public function getAuthor($node){
        $results = CC::nodes()
            ->listRelatives($node)
            ->addParams(['type' => 'ers:author-association']) 
            ->addParams(['full' => 'true'])
            ->get();

        return $results;    
    }

    public function getCategorySorted($catnode, $field="eventDate", $direction=1){
        $results = CC::nodes()
            ->listRelatives($catnode)
            ->addParams(['type' => 'ers:category-association'])
            ->addParams(['sort' => '{"'.$field.'": '.$direction.'}']) 
            ->addParams(['metadata' => 'true'])
            //->addParams(['skip' => 2]) 
            //->addParams(['limit' => 2]) 
            ->addParams(['full' => 'true'])
            ->get();

        return $results;    
    }

	public function getItem($slug){
		$query = '{"slug": "'.$slug.'"}';
		$result = CC::nodes()
                    ->query($query)
                    ->addParams(['full' => 'true'])
                    ->addParams(['metadata' => 'true'])   
                    ->get();
        return $result;            
	}

    public function getContentByProperty($property, $contentType, $sort = -1){
        $query = '{"'.$property.'": "'.$contentType.'"}';
        $result = CC::nodes()
                    ->query($query)
                    ->addParams(['full' => 'true']) 
                    ->addParams(['metadata' => 'true'])
                    ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                    ->get();
        return $result;  

    }

    public function setCanonical($node, $payload){
        $result = CC::nodes()
            ->updateNode($node, $payload)
            ->addParams(['inject' => 'true'])
            ->get();
        //add test if success or not
    }

    public function sortHomepage($items){
        $articleCounter = 1;
        $calendarCounter = 1;
        $fundingCounter = 1;
        $elearningCounter = 1;
        $courseCounter = 1;

        foreach ($items as $key => $item) {

            $item = (object) $item;

            if(isset($item->type) && $item->type == "e-learning" && $elearningCounter <= 1){
                $sorted['eLearning'] = $item;
                $elearningCounter++;
            }

            if($item->contentType == "event_course" && $item->featuredCourse && $courseCounter <= 1){
                $sorted['featuredCourse'] = $item;
                $courseCounter++;
            }

            if(($item->contentType == "event_fellowship" || $item->contentType == "event_seminar") && $item->featuredFunding && $fundingCounter <= 1){
                $sorted['featuredFunding'] = $item;
                $fundingCounter++;
            }

            if(isset($item->category2) && $calendarCounter <= 5){
                if($this->isCalendar($item->category2)){
                    if(isset($sorted['firstEvent'])){
                      $sorted['calendar'][$key] = $item;  
                    }
                    if($calendarCounter <= 1){
                        $sorted['firstEvent'] = $item;
                    }
                    $calendarCounter++;
                }
            }
            
            if($item->contentType == "article" && $articleCounter <= 4){

                if(isset($sorted['mainNews'])){
                    $sorted['news'][$key] = $item;
                }

                if($articleCounter <= 1){
                    $sorted['mainNews'] = $item;
                }
                $articleCounter++;
            }
        }
            return $sorted;
    }

	public function parseItems($items, $lead = false){
        //dd($items);
          /*  if(empty($items)){
                abort(404);
            }*/
                $parsed = [];
		        foreach ($items as $key => $item) {
                    $parsed[$key]['title'] = $item->title;
                    if(isset($item->salutation)){$parsed[$key]['salutation']=$item->salutation;}
                    if(isset($item->firstName)){$parsed[$key]['firstName']=$item->firstName;}
                    if(isset($item->lastName)){$parsed[$key]['lastName']=$item->lastName;}
                    if(isset($item->email)){$parsed[$key]['email']=$item->email;}
                    if(isset($item->tagLine)){$parsed[$key]['tagLine']=$item->tagLine;}
                    if(isset($item->subTitle)){
                    	$parsed[$key]['subtitle'] = $item->subTitle;
                    }	
                    $parsed[$key]['slug'] = $item->slug;
                    if (isset($item->tags)){$parsed[$key]['tags'] = $item->tags;}
                    if(isset($item->flags)){$parsed[$key]['flags'] = $this->getFlags($item->flags);}
                    $parsed[$key]['fullyBooked'] = false;
                    if(isset($item->fullyBooked)){$parsed[$key]['fullyBooked'] = $item->fullyBooked;}
                    if(isset($item->contentType)){$parsed[$key]['contentType'] = $item->contentType;}
                    if(isset($item->type)){$parsed[$key]['type'] = $item->type;}
                    if(isset($item->type)){$parsed[$key]['typeColor'] = $this->setTypeColor($item->type);}
                    if(isset($item->category)){
                    	$parsed[$key]['category'] = $item->category->title;
                    	$parsed[$key]['categoryId'] = $item->category->qname;
                    }
                    if(isset($item->category2)){
                        $parsed[$key]['category2'] = $item->category2;
                    }	
                    $parsed[$key]['_qname'] = $item->_qname;
                    $parsed[$key]['_type'] = $item->_type;
                    if(isset($item->ebusDate)){$parsed[$key]['ebusDate'] = $item->ebusDate;}  
                    if(isset($item->eventDate)){$parsed[$key]['eventDates'] = $this->ersDate($item->eventDate, $item->eventEndDate);}  
                    if(isset($item->eventDate)){$parsed[$key]['calendar'] = $this->calendar($item->eventDate);}   
                    if(isset($item->earlybirdDeadline)){$parsed[$key]['earlybirdDeadline'] = $this->ersDate($item->earlybirdDeadline);}
                    if(isset($item->extendedDeadline)){ $parsed[$key]['extendedDeadline'] = $this->ersDate($item->extendedDeadline);}
                    if(isset($item->_system->created_on->timestamp)){ $parsed[$key]['createdOn'] = $this->ersDate($item->_system->created_on->timestamp);}
                    if(isset($item->_system->created_on->ms)){ $parsed[$key]['ms'] = $item->_system->created_on->ms;}
                    if(isset($item->openingDate)){ $parsed[$key]['openingDate'] = $this->ersDate($item->openingDate);}
                    if(isset($item->eventLocation)){$parsed[$key]['eventLocation'] = $item->eventLocation;}                
                    
                    if(isset($item->leadParagraph)){
                    	$parsed[$key]['shortLead'] = $this->truncate(strip_tags(Markdown::parse($item->leadParagraph)));
                    	$parsed[$key]['lead'] = Markdown::parse($item->leadParagraph);
                    }

                    if(isset($item->registerButton)){$parsed[$key]['registerButton'] = (array) $item->registerButton;}

                    if(isset($item->image)){
                        $img_qname = $item->image->qname;
                        $img = CC::nodes()->getImage($img_qname);
                        $parsed[$key]['image'] = $img->imageUrl."?name=image5000&size=500";
                    }

                    if(isset($item->highResImage)){
                        $img_qname = $item->highResImage->qname;
                        $img = CC::nodes()->getImage($img_qname);
                        $parsed[$key]['highResImage'] = $img->imageUrl."?name=image1800&size=1800";
                    }

                    if(isset($item->imageAlignment)){$parsed[$key]['imageAlignment'] = $item->imageAlignment;}
                    if(isset($item->imageDescription)){$parsed[$key]['imageDescription'] = $item->imageDescription;}
                    if(isset($item->url)){$parsed[$key]['url'] = $item->url;}
                    if(isset($item->uri)){$parsed[$key]['uri'] = $item->uri;}
                    $parsed[$key]['featuredCourse'] = false;
                    if(isset($item->featuredCourse)){$parsed[$key]['featuredCourse'] = $item->featuredCourse;}
                    $parsed[$key]['featuredFunding'] = false;
                    if(isset($item->featuredFunding)){$parsed[$key]['featuredFunding'] = $item->featuredFunding;}

                    if(!$lead){
	                    if(isset($item->organisers)){ $parsed[$key]['organisers'] = $item->organisers;}
	                    if(isset($item->faculty)){ $parsed[$key]['faculty'] = $item->faculty;}
                        if(isset($item->body)){$parsed[$key]['body'] = Markdown::parse($item->body);}
                        $parsed[$key]['articleTwoColumns'] = false;
                        if(isset($item->articleTwoColumns)){$parsed[$key]['articleTwoColumns'] = $item->articleTwoColumns;}
	                    if(isset($item->feeList)){$parsed[$key]['feeList'] = $item->feeList;}
                        if(isset($item->cancellationPolicy)){$parsed[$key]['cancellationPolicy'] = Markdown::parse($item->cancellationPolicy);}
                        if(isset($item->travelInfo)){$parsed[$key]['travelInfo'] = Markdown::parse($item->travelInfo);}
                        if(isset($item->technicalInfo)){$parsed[$key]['technicalInfo'] = Markdown::parse($item->technicalInfo);}
	                    if(isset($item->sponsors)){$parsed[$key]['sponsors'] = $this->getSponsors($item->sponsors);}
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
                            $path = "path/documents/rules_and_regulations/";
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
                	}
                }  
            //dd($parsed);
        return $parsed; 
	}

    public function calendar($date){
        $date = new \DateTime($date);
        $calendar = Carbon::instance($date);

        $cal['year'] = $calendar->year;
        $cal['month'] = $calendar->format('F');
        $cal['timestamp'] = $calendar->timestamp;

        return (object) $cal;
    }

    public function isCalendar($array){
        $cal = false;
        foreach($array as $cat)
            if(in_array("Events Calendar", (array) $cat)){
               $cal = true;
        }

        return $cal;
    } 

	public function ersDate($start, $end = null)
    {
        $startDate = new \DateTime($start);
        $start = Carbon::instance($startDate);

        if($end !== null){
        	$endDate = new \DateTime($end);   
        	$end = Carbon::instance($endDate);
        	return $start->day.'-'.$end->day.' '.$end->format('F').', '.$end->year; 
        }

        return $start->day.' '.$start->format('F').', '.$start->year;     
    }

    public function setTypeColor($type){
        if($type == "ERS Course" || $type == "ERS Online Course" || $type == "e-learning" || $type == "Skill Workshop" || $type == "Skill Course"){
            return "label-school";
        }

        return "label-scientific";

    }

    public function getDocuments($documents){
    	$files = [];
    	foreach($documents as $key => $document){
    		$files[$key]['url'] = CC::nodes()->deploymentUrl.'/static/path/documents/documents/'.$document->title;
    	}

    	return $files;
    }

    public function getFlags($flags){
        foreach ($flags as $key => $flag) {
            $parsed[$key]['text'] = $flag->text;
            $parsed[$key]['color'] = $flag->color;
        }
        if(isset($parsed)){
            return $parsed[0];
        }
    }

    public function getSponsors($sponsors){
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

    public function parseVenues($items){
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

    public function getDeadlines($item){
        $parsed = [];
    
            if(isset($item->applicationDeadline)){$parsed['applicationDeadline'] = $this->ersDate($item->applicationDeadline);}    
            if(isset($item->applicationDeadline2)){$parsed['applicationDeadline2'] = $this->ersDate($item->applicationDeadline2);} 
            if(isset($item->notification)){$parsed['notification'] = $item->notification;}
            if(isset($item->notification2)){$parsed['notification2'] = $item->notification2;}
            if(isset($item->startDate)){$parsed['startDate'] = $item->startDate;}
            if(isset($item->startDate2)){$parsed['startDate2'] = $item->startDate2;}

            return (object) $parsed;

    }

    public function getBursary($bursary){
    	   $parsed = [];

    	   if(isset($bursary->text)){$parsed['text'] = Markdown::parse($bursary->text);}
    	   if(isset($bursary->deadline)){$parsed['deadline'] = $this->ersDate($bursary->deadline);}
    	   if(isset($bursary->notificationOfResults)){$parsed['results'] = $this->ersDate($bursary->notificationOfResults);}
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


}