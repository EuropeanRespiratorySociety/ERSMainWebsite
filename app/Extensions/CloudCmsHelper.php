<?php 
namespace App\Extensions;

use CC;
use Carbon\Carbon;
use App\Extensions\DateHelper;
use App\Extensions\PaginationHelper;
use App\Extensions\CloudCmsParser;
use Spatie\Geocoder\GeocoderFacade as Geocoder;

class CloudCmsHelper
{

    public function search($query){
    $payload = '
    {
        "search": {
            "filtered": {    
                "filter": {
                    "term": {
                            "_type":  "ers_article"
                        }
                },
                "query": {
                    "query_string": {
                            "query": "'.$query.'"
                    }
                }
            }
        }         
    }';

    $payload2 = '
    {
        "search": {
            "filtered": {
                "filter": {
                    "term": {
                        "_type": "ers_article"
                    }
                },
                "query": {
                    "bool": {
                        "should": [
                            {"match": {"_all": "'. $query .'"}}
                        ],
                        "must_not": [
                            {"match": {"unPublished": true }}  
                        ]
                    }
                }
            }
        }    
    }';

    $results = CC::nodes()
                    ->fullSearch($payload2)
                    ->addParams(['full' => 'true'])  
                    //->addParams(['limit' => 5]) 
                    ->get();
                   // dd($results);
    $results = $this->validateResults($results);   
    return $results;  
    }

    public function getSchema(){
        $results = CC::branches()
            ->getSchema('ers:article')
            ->addParams(['full' => 'true'])
            ->get();
        $results = $this->validateResults($results);   
        return $results;    
    }

    /**
    * Get the model from CloudCMS or the locally saved version
    *
    */ 
    public function setModel(){
        CC::setModel('ers:article');
    }

    /**
    * Delete the model from CloudCMS stored locally
    *
    */ 
    public function unsetModel(){
        CC::unsetModel();
    }

    /**
    * Get all associated items that have a specific association,
    * by default the association is set to the category one.
    * @param string $_qname
    * @param string $type (Optional - type of association e.g. ers:category-association)
    * @return array
    */
    public function getAssociation($_qname, $type = 'ers:category-association', $limit = 25){
        $query = '{ "unPublished": { "$ne": true}}';

        $results = CC::nodes()
            ->queryRelatives($_qname, $query)
            ->addParams(['type' => $type])
            ->addParams(['metadata' => 'true'])
            ->addParams(['full' => 'true'])
            ->addParams(['limit' => $limit])
            ->get();
        $results = $this->validateResults($results);      
        return $results;    
    }



    /**
    * Get all associated items that have a specific relation and sort them by a field
    * @param string $startNode (QName of the starting node)
    * @param string $type (Optional - type of association e.g. ers:category-association)
    * @param string $field (Optional - the field to sort on)
    * @param int $direction (the sorting direction 1 or -1)
    */
    public function getAssociationSorted($startNode, $type = 'ers:category-association', $field = "_system.created_on.ms", $direction = 1){
        $query = '{ 
            "unPublished": { "$ne": true},
            "_type": { "$ne": "ers:notifications"}
        }';

        $results = CC::nodes()
            ->queryRelatives($startNode, $query)
            ->addParams(['type' => $type])
            ->addParams(['sort' => '{"'.$field.'": '.$direction.'}']) 
            ->addParams(['metadata' => 'true'])
            ->addParams(['limit' => 400])
            ->addParams(['full' => 'true'])
            ->get();    
        $results = $this->validateResults($results);       
        return $results;    
    }

    /**
    * Get all associated items that have a specific relation and sort them by a field
    * @param string $startNode (QName of the starting node)
    * @param string $type (Optional - type of association e.g. ers:category-association)
    * @param string $field (Optional - the field to sort on)
    * @param int $direction (the sorting direction 1 or -1)
    */
    public function getOutgoingAssociationSorted($startNode, $type, $field = "_system.created_on.ms", $direction = 1){
        $query = '{ 
            "unPublished": { "$ne": true},
            "_type": { "$ne": "ers:notifications"}
        }';

        $results = CC::nodes()
            ->queryRelatives($startNode, $query)
            ->addParams(['type' => $type])
            ->addParams(['sort' => '{"'.$field.'": '.$direction.'}']) 
            ->addParams(['metadata' => 'true'])
            ->addParams(['direction' => 'OUTGOING'])
            ->addParams(['limit' => 400])
            ->addParams(['full' => 'true'])
            ->get();    
        $results = $this->validateResults($results);       
        return $results;    
    }
    
    /**
    * Get a single article (or category) by slug 
    * @param string $slug (slug-of-the-artice)
    */
	public function getItem($slug){
		$query = '{"slug": "'.$slug.'"}';
		$result = CC::nodes()
                    ->query($query)
                    ->addParams(['full' => 'true'])
                    ->addParams(['metadata' => 'true'])   
                    ->get(); 
        $result = $this->validateResults($result);               
        return $result;            
    }
    
    /**
    * Get a single article (or category) by slug and published
    * @param string $slug (slug-of-the-artice)
    */
	public function getPublishedItem($slug){
        $query = '{"slug": "'.$slug.'",
            "unPublished": { "$ne": true }
        }';
		$result = CC::nodes()
                    ->query($query)
                    ->addParams(['full' => 'true'])
                    ->addParams(['metadata' => 'true'])   
                    ->get(); 
        $result = $this->validateResults($result);               
        return $result;            
	}

    /**
    * To use this method do not forget to set the skip value to false if you do not need pagination
    * @param string $property ("type")
    * @param string $propertyValue ("News")
    * @param int $sort (Optional - Direction)
    * @param int $skip (Optional - Used for pagination)
    */
    public function getContentByProperty($property, $propertyValue, $sort = -1, $skip = null){
        $query = '{
            "'.$property.'": "'.$propertyValue.'",
            "unPublished": { "$ne": true }
            }';

        if($skip === null){
            $results = CC::nodes()
                        ->query($query)
                        ->addParams(['metadata' => 'true'])
                        ->get();
            $results = $this->validateResults($results);               
            return $results; 
        } 
        if($skip === false){
            $results = CC::nodes()
                        ->query($query)  
                        ->addParams(['full' => 'true']) 
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                        ->get();
            $results = $this->validateResults($results);                          
            return $results; 
        } 
        $results = CC::nodes()
                        ->query($query)
                        ->addParams(['full' => 'true']) 
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                        ->addParams(['skip' => $skip]) 
                        ->get();
        $results = $this->validateResults($results);                          
        return $results; 

    }
    
    /**
    * Call CloudCMS with a specific request
    * To use this method do not forget to set the skip value to false if you do not need pagination
    * @param string $query 
    * @param int $limit (Optional - Number of results)
    * @param int $sort (Optional - Direction)
    * @param int $skip (Optional - Used for pagination)
    */
    public function getContentByQuery($query, $limit=25, $sort = -1, $skip = null){
        
        if($skip === null){
            $results = CC::nodes()
                        ->query($query)
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['limit' => $limit])
                        ->get();
            $results = $this->validateResults($results);               
            return $results; 
        } 
        if($skip === false){
            $results = CC::nodes()
                        ->query($query)  
                        ->addParams(['full' => 'true']) 
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                        ->addParams(['limit' => $limit])
                        ->get();
            $results = $this->validateResults($results);                          
            return $results; 
        } 
        $results = CC::nodes()
                        ->query($query)
                        ->addParams(['full' => 'true']) 
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                        ->addParams(['skip' => $skip]) 
                        ->addParams(['limit' => $limit])
                        ->get();
        $results = $this->validateResults($results);                          
        return $results; 
    }

     /**
    * Get all node with the category association EventCalendar on CloudCMS 
    * + available on Home page, not fully booked and ers event 
    * @param string $field (Optional - the field to sort on)
    * @param int $direction (the sorting direction 1 or -1)
    */
    public function getHomePageEvents($field = "_system.created_on.ms", $direction = 1){
        $query = '{ 
            "unPublished": { "$ne": true},
            "availableOnHomepage": "true",
            "nonErsCalendarItem": { "$ne": true},
            "fullyBooked":{ "$ne": true}
        }';

        $results = CC::nodes()
            ->queryRelatives('o:cc1c5be57719dade0371', $query) //qname for event_calendar category on CloudCMS
            ->addParams(['type' =>'ers:category-association'])
            ->addParams(['sort' => '{"'.$field.'": '.$direction.'}']) 
            ->addParams(['metadata' => 'true'])
            ->addParams(['limit' => 25])
            ->addParams(['full' => 'true'])
            ->get();    
        $results = $this->validateResults($results);       
        return $results;    
    }

    /**
    * Paginate the results 
    * @param array $results
    * @param int $page
    * @param int $limit (optional)
    */
    public function paginate($results, $page, $limit = 25){
        $paginator = new PaginationHelper($results['total_rows'], $page, $limit);
        return (object) $paginator->pagination;
    }

    /**
    * This function set the canonical url in CC the inject param let's you send only
    * the data that needs to be added to the node. Without it we need to send the
    * whole node to replace it.
    * @param string $node 
    * @param json object $payload
    * @return void
    */
    public function setCanonical($node, $uri = null){
        if($uri === null){
            $uri = request()->path(); 
        }
        
        $url = "https://www.ersnet.org/".$uri;
        $payload = json_encode(['url' => $url, 'uri' => $uri]);
        
        $result = CC::nodes()
            ->updateNode($node, $payload)
            ->addParams(['inject' => 'true'])
            ->get();
        //add test if success or not
    }

    /**
    * This function set the coordinates in CC the inject param let's you send only
    * the data that needs to be added to the node. Without it we need to send the
    * whole node to replace it.
    * @param string $node
    * @param string $lat
    * @param string $long
    * @param string $accuracy - A value returned by Google's API
    * @return void
    */
    public function setCoordinates($node, $lat, $long, $accuracy){
        if($accuracy !== 'NOT_FOUND'){
        $payload = json_encode(['loc' => ['lat' => $lat, 'long' => $long]]);
        } else {
            $payload = json_encode(['loc' => ['lat' => $accuracy, 'long' => $accuracy]]);
        }
        $result = CC::nodes()
            ->updateNode($node, $payload)
            ->addParams(['inject' => 'true'])
            ->get();
    }

    /**
    * Sort the all the elments that have been selected to appear on the homepage
    * 
    *@param Object $items
    *@return Array $sorted
    */
    public function sortHomepage($items ){
        $cal = new DateHelper;
        $articleCounter = 1;
        $calendarCounter = 1;
        $fundingCounter = 1;
        $courseCounter = 1;
        $nonERS = false;

        foreach ($items as $key => $item) {
            $nonERS = false;
            $item = (object) $item;

            if($item->nonErsCalendarItem || $item->ersEndorsedEvent) {
                $nonERS = true;
            }
            
            if($item->featuredCourse && $courseCounter <= 4){
                $sorted['featuredCourses'][] = $item;
                $courseCounter++;
            }
            //Featured Funding == Research Section
            if($item->featuredFunding && $fundingCounter <= 4){
                $sorted['featuredResearchItems'][] = $item;
                $fundingCounter++;
            }
           
            if($item->category2 && $calendarCounter <= 5 && !$nonERS){
                if($cal->isCalendar($item->category2) || $item->category->title == "Events Calendar"){
                    if(isset($sorted['firstEvent'])){
                        $sorted['calendar'][] = $item;  
                    }
                    if($calendarCounter <= 1){
                        $sorted['firstEvent'] = $item;
                    }
                    $calendarCounter++;
                }
            }
            
            if($item->contentType == "article" && $articleCounter <= 4){

                if($item->mainNews != true){
                    $sorted['news'][] = $item;
                }

                if($articleCounter <= 1 || $item->mainNews == true){
                    $sorted['mainNews'] = $item;
                }
                $articleCounter++;
            }
        }
        return $sorted;
    }


    /**
    * Prepare the calendar for display to have all item in ascending order and of the current year and upcoming
    *   +"nonErsCalendarItem": false
    *    "ersEndorsedEvent": true
    * @param array $items
    * @param string $type (optional)
    * @return array
    */
    public function prepareCalendar($items, $type = 'ers'){
        $carbon = new Carbon();
        foreach($items as $key => $value){
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'all'){
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
            }
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'ers'){
                if(!$value->nonErsCalendarItem && !$value->ersEndorsedEvent) {
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
                }            
            }
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'non-ers'){
                if($value->nonErsCalendarItem) {
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
                } 
            }
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'endorsed'){
                if($value->ersEndorsedEvent) {
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
                } 
            }
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'deadline'){
                if($value->ersDeadline) {
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
                } 
            }
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'national'){
                if($value->nationalSocietyEvent) {
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
                } 
            }
            if($value->startDateTimestamp >= $carbon->timestamp && $type == 'regional'){
                if($value->regionalSocietyEvent) {
                    $sorted[$value->calendar->year][$value->calendar->month][$key] = $value; 
                } 
            }
        }

        if(!isset($sorted)){
            return false;
        }
        ksort($sorted);
        return $sorted;
    }

    /**
    * Sort event items based on the start date timestamp
    * @param object $items
    * @return object
    */
    public function sortItems($items){
        usort($items, function($a, $b){
            return $a->startDateTimestamp <=> $b->startDateTimestamp;
        }); 
        return (object) $items;
    }

    /**          
     * Get the coordinates of an address
     * @param  object $address
     * @return array
     */
    public function getCoordinates($address){
        $address1 = $address->streetAddress ?? '';
        $address2 = $address->streetAddress2 ?? '';
        $address3 = $address->streetAddress3 ?? '';
        $address4 = $address->postalCode ?? '';
        $address5 = $address->city ?? '';
        $address6 = $address->country ?? '';

        $query = $address1 . ', ' . $address2 . ' ' . $address3 .' ' . $address4 . ', ' . $address5 . ', ' . $address6;

        $coordinates = Geocoder::getCoordinatesForQuery($query);
        return $coordinates;

    }

	public function parseItems($data, $lead = false){
        $items = new CloudCmsParser;
        $items->parse($data, $lead);
        return $items->parsed; 
	}

    public function parseDigestItems($data, $lead = false){
        $items = new CloudCmsParser;
        $items->parseDigest($data, $lead);
        return $items->parsed; 
    }
    
    /**
    * Validates the results, if token is not valid, forces a refresh of the request
    * @return mixed $results
    */
    public function validateResults($results){
        if($results != "invalid_token"){
            return $results;
        }
        $this->deleteToken();
        //Using Php version of redirect as Laravel's does not work :(
        //redirect(request()->fullUrl());
        die(header("location: " . request()->fullUrl()));
        
    }

    /**
    * Delete the token where ever it is saved (mostlikely file as no other implementation of the interface exists yet ;) ) 
    */
    public function deleteToken(){
        $CC = new CC;
        $CC::unsetToken();
    }


}