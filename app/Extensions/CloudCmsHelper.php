<?php 

namespace App\Extensions;

use Carbon\Carbon;
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

	public function getItem($slug){
		$query = '{"slug": "'.$slug.'"}';
		$result = CC::nodes()
                    ->query($query)
                    ->addParams(['full' => 'true'])   
                    ->get();
        return $result;            
	}

	public function parseItems($items, $lead = false){
		        foreach ($items as $key => $item) {
                    $parsed[$key]['title'] = $item->title;
                    if(isset($item->subTitle)){
                    	$parsed[$key]['subtitle'] = $item->subTitle;
                    }	
                    $parsed[$key]['slug'] = $item->slug;
                    $parsed[$key]['tags'] = $item->tags;
                    $parsed[$key]['flags'] = $this->getFlags($item->flags);
                    $parsed[$key]['type'] = $item->type;
                    $parsed[$key]['category'] = $item->category->title;
                    $parsed[$key]['categoryId'] = $item->category->qname;
                    $parsed[$key]['eventDates'] = $this->ersDate($item->eventDate, $item->eventEndDate);   
                    $parsed[$key]['earlybirdDeadline'] = $this->ersDate($item->earlybirdDeadline);
                    if(isset($item->extendedDeadline)){ $parsed[$key]['extendedDeadline'] = $this->ersDate($item->extendedDeadline); }
                    $parsed[$key]['eventLocation'] = $item->eventLocation;                
                    
                    $parsed[$key]['lead'] = $item->leadParagraph;

                    if(!$lead){
	                    if(isset($item->organisers)){ $parsed[$key]['organisers'] = $item->organisers;}
	                    if(isset($item->body)){$parsed[$key]['body'] = Markdown::parse($item->body);}
	                    if(isset($item->feeList)){$parsed[$key]['feeList'] = $item->feeList;}
	                    if(isset($item->cancellationPolicy)){$parsed[$key]['cancellationPolicy'] = $item->cancellationPolicy;}
	                    if(isset($item->sponsors)){$parsed[$key]['sponsors'] = $item->sponsors;}
	                    if(isset($item->venue)){$parsed[$key]['venue'] = $item->venue;}
	                    if(isset($item->suggestedAccommodation)){$parsed[$key]['suggestedAccommodation'] = $item->suggestedAccommodation;}
	                    $parsed[$key]['bursaryApplication'] = $this->getBursary($item->bursaryApplication);
	            		if(isset($item->documents)){$parsed[$key]['documents'] = $this->getDocuments($item->documents);}

	                    
                	}
                	$parsed[$key]['registerButton'] = (array) $item->registerButton;
                    //$img = CC::nodes()->deploymentUrl.'static/path/Samples/Catalog/Products/'.$item['_features']['f:filename']['filename'];
                    $features = (array) $item->_features;
                   //link to documents https://53ed64a9-671f-4e65-9f57-5e736e3d5d62-hosted.cloudcms.net/static/path/documents/documents/Bedroom_reservation_form_ERS_26-30_10_2016.pdf
                    //This function can be used by passing the _qname of the image
                    //CC::nodes()->getImage($_qname);
                    
                    //The path is correct, just put the file name there, but somehow it does not get attached to the element...
                    /*$img = CC::nodes()->deploymentUrl.'/static/path/images/'.$features['f:filename']->filename;

                    $parsed[$key]['image'] = Image::cache(function($image) use($img){
                     return $image->make($img)->resize(420, 115, function ($constraint) {
                            $constraint->aspectRatio();
                        })->encode('data-url');
                 });*/

            }  
            //dd($parsed);
        return $parsed; 
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

    public function getBursary($bursary){
    	if(isset($bursary)){
    		$parsed['text'] = Markdown::parse($bursary->text);
    		$parsed['deadline'] = $this->ersDate($bursary->deadline);
    		$parsed['results'] = $this->ersDate($bursary->notificationOfResults);
    		$parsed['url'] = $bursary->applyButtonUrl;

    		return (object) $parsed;
    	}

    	return null;

    }


}