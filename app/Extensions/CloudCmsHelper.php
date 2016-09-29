<?php 

namespace App\Extensions;

use CC;
use App\Extensions\DateHelper;

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
            }
        }         
    }';

    $results = CC::nodes()
                    ->fullSearch($payload)
                    ->addParams(['full' => 'true'])  
                    ->get();

    return $results;  
    }

    public function getSchema(){
        $results = CC::branches()
            ->getSchema('ers:article')
            ->addParams(['full' => 'true'])
            ->get();

        return $results;    
    }

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

    public function getCategorySorted($catnode, $field = "eventDate", $direction = 1){
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

    /**
    *   To use this method do not forget to set the skip value to false if you do not need pagination
    *
    */
    public function getContentByProperty($property, $contentType, $sort = -1, $skip = null){
        $query = '{"'.$property.'": "'.$contentType.'"}';

        if($skip === null){
            $results = CC::nodes()
                        ->query($query)
                        ->addParams(['metadata' => 'true'])
                        ->get();
            return $results; 
        } 
        if($skip === false){
            $results = CC::nodes()
                        ->query($query)  
                        ->addParams(['full' => 'true']) 
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                        ->get();
            return $results; 
        } 
        $results = CC::nodes()
                        ->query($query)
                        ->addParams(['full' => 'true']) 
                        ->addParams(['metadata' => 'true'])
                        ->addParams(['sort' => '{"_system.created_on.ms": '.$sort.'}']) 
                        ->addParams(['skip' => $skip]) 
                        ->get();
        return $results; 

    }

    public function paginate($results, $page, $limit = 25){
        $totalItems = $results->total_rows;

        $maxNumberOfPages = 1;
        if($limit){
            $maxNumberOfPages = ceil($totalItems / $limit);

            for ($i=0; $i < $maxNumberOfPages; $i++) { 
                $params[$i + 1]['active'] = false;
                if(!$page && $i == 0){
                    $params[$i + 1]['page'] = null;                
                    $params[$i + 1]['active'] = true;
                } else {
                    $params[$i + 1]['page'] = "?page=".($i + 1);
                }

                if($page == ($i + 1)){
                    $params[$i + 1]['active'] = true;
                }

                $params[$i + 1]['pageNumber'] = $i + 1;
            }
        }

        if($page > $maxNumberOfPages){
            abort(404);
        }

        $skip = 0;
        if($page > 1 && $limit !== 0){
            $skip = ($page -1) * $limit;
        }

        $pagination = array('totalItems' => $totalItems, 'numberOfPages' => (int) $maxNumberOfPages, 'page' => $page, 'skip' => $skip, 'pages' => $params);

        return (object) $pagination;
    }

    /**
    * This function set the coordinates in CC the inject param let's you send only
    * the data that needs to be added to the node. Without it we need to send the
    * whole node to replace it.
    * @param string $node 
    * @param json object $payload
    * @return void
    */
    public function setCanonical($node, $payload){
        $result = CC::nodes()
            ->updateNode($node, $payload)
            ->addParams(['inject' => 'true'])
            ->get();
        //add test if success or not
    }

    /**
    * This function set the coordinates in CC the inject param let's you send only
    * the data that needs to be added to the node. Without it we need to send the
    * whole node to replace it. The accuracy is a value returned by Google's API
    * @param string $node
    * @param string $lat
    * @param string $long
    * @param string $accuracy
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
        $elearningCounter = 1;
        $courseCounter = 1;
        $nonERS = false;

        foreach ($items as $key => $item) {

            $item = (object) $item;

            if($item->nonErsCalendarItem || $item->ersEndorsedEvent) {
                $nonERS = true;
            }

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

            if(isset($item->category2) && $calendarCounter <= 5 && !$nonERS){
                if($cal->isCalendar($item->category2) || $item->category == "Events Calendar"){
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

                if($item->mainNews != true){
                    $sorted['news'][$key] = $item;
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
    * Sort the calendar to have all item in ascending order and of the current year and upcoming
    *@param array $items
    *@return array
    */
    public function sortCalendar($items){
        $carbon = new Carbon();
        foreach($items as $key => $value){ 
            if($value['calendar']->year >= $carbon->year){
                    $sorted[$value['calendar']->year][$value['calendar']->month][$key] = $value; 
            }
        }
        ksort($sorted);
        return $sorted;
    }

    /**
    * Sort event items based on the start date timestamp
    *@param array $items
    *@return object
    */
    public function sortItems($items){
        usort($items, function($a, $b){
            return $a['startDateTimestamp'] <=> $b['startDateTimestamp'];
        });
        
        return (object) $items;
    }

    /**          
     *
     * @param  object $address
     * @return array
     */
    public function getCoordinates($address){
        $address1 = $address->streetAddress ?? '';
        $address2 = $address->streetAddress2 ?? '';
        $address3 = $address->postalCode ?? '';
        $address4 = $address->city ?? '';
        $address5 = $address->country ?? '';

        $query = $address1 . ', ' . $addressLine2 . ', ' . $addressLine3 .' ' . $addressLine4 . ', ' . $addressLine5;

        $coordinates = Geocoder::getCoordinatesForQuery($query);
        return $coordinates;

    }

	public function parseItems($data, $lead = false){
        $items = new CloudCmsParser;
        $items->parse($data, $lead);
        return $items->parsed; 
	}


}