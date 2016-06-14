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
                    if(isset($item->flags)){$parsed[$key]['flags'] = $this->getFlags($item->flags);}
                    if(isset($item->type)){$parsed[$key]['type'] = $item->type;}
                    if(isset($item->category)){
                    	$parsed[$key]['category'] = $item->category->title;
                    	$parsed[$key]['categoryId'] = $item->category->qname;
                    }	
                    $parsed[$key]['_qname'] = $item->_qname;
                    $parsed[$key]['_type'] = $item->_type;
                    if(isset($item->eventDate)){$parsed[$key]['eventDates'] = $this->ersDate($item->eventDate, $item->eventEndDate);}   
                    if(isset($item->earlybirdDeadline)){$parsed[$key]['earlybirdDeadline'] = $this->ersDate($item->earlybirdDeadline);}
                    if(isset($item->extendedDeadline)){ $parsed[$key]['extendedDeadline'] = $this->ersDate($item->extendedDeadline); }
                    if(isset($item->eventLocation)){$parsed[$key]['eventLocation'] = $item->eventLocation;}                
                    
                    if(isset($item->leadParagraph)){
                    	$parsed[$key]['shortLead'] = $this->truncate(Markdown::parse($item->leadParagraph));
                    	$parsed[$key]['lead'] = Markdown::parse($item->leadParagraph);
                    }

                    if(!$lead){
	                    if(isset($item->organisers)){ $parsed[$key]['organisers'] = $item->organisers;}
	                    if(isset($item->faculty)){ $parsed[$key]['faculty'] = $item->faculty;}
	                    if(isset($item->body)){$parsed[$key]['body'] = Markdown::parse($item->body);}
	                    if(isset($item->feeList)){$parsed[$key]['feeList'] = $item->feeList;}
	                    if(isset($item->cancellationPolicy)){$parsed[$key]['cancellationPolicy'] = Markdown::parse($item->cancellationPolicy);}
	                    if(isset($item->sponsors)){$parsed[$key]['sponsors'] = $item->sponsors;}
	                    if(isset($item->venue)){$parsed[$key]['venue'] = $item->venue;}
	                    if(isset($item->suggestedAccommodation)){$parsed[$key]['suggestedAccommodation'] = $this->getSuggestedAccommodations($item->suggestedAccommodation);}
	                    if(isset($item->bursaryApplication)){$parsed[$key]['bursaryApplication'] = $this->getBursary($item->bursaryApplication);}
	            		if(isset($item->documents)){$parsed[$key]['documents'] = $this->getDocuments($item->documents);}

	                    
                	}
                	if(isset($item->registerButton)){$parsed[$key]['registerButton'] = (array) $item->registerButton;}
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

    public function getSuggestedAccommodations($items){
    	$parsed = [];
    	foreach ($items as $key => $item) {
    
    		if(isset($item->info)){$parsed[$key]['info'] = Markdown::parse($item->info);}
    		if(isset($item->name)){$parsed[$key]['name'] = $item->name;}
    		if(isset($item->url)){$parsed[$key]['url'] = $item->url;}
    		if(isset($item->streetAddress)){$parsed[$key]['streetAddress'] = $item->streetAddress;}
    		if(isset($item->streetAddress2)){$parsed[$key]['streetAddress2'] = $item->streetAddress2;}
    		if(isset($item->postalCode)){$parsed[$key]['zip'] = $item->postalCode;}
    		if(isset($item->city)){$parsed[$key]['city'] = $item->city;}
    		if(isset($item->country)){$parsed[$key]['country'] = $item->country;}
    		if(isset($item->phoneNumber)){$parsed[$key]['phone'] = $item->phoneNumber;}

    	}

    		return (object) $parsed;

    }

    public function getBursary($bursary){
    	
    		if(isset($bursary->text)){$parsed['text'] = Markdown::parse($bursary->text);}
    		if(isset($bursary->deadline)){$parsed['deadline'] = $this->ersDate($bursary->deadline);}
    		if(isset($bursary->notificationOfResults)){$parsed['results'] = $this->ersDate($bursary->notificationOfResults);}
    		if(isset($bursary->applyButtonUrl)){$parsed['url'] = $bursary->applyButtonUrl;}

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