<?php 

namespace App\Extensions;

use Carbon\Carbon;

class DateHelper
{
    /**
    * Generate a correctly formated date for the ERS Calendar
    *
    *@param string $date
    *@return object $calendar
    */
    public function calendar($date){
        $date = new \DateTime($date);
        $calendar = Carbon::instance($date);

        $cal['year'] = $calendar->year;
        $cal['month'] = $calendar->format('F');
        $cal['timestamp'] = $calendar->timestamp;

        return (object) $cal;
    }

    /**
    * This function check if one of the category is "Events Calendar" thus if the item has 
    * been added to the European Respiratory Socitey Calendar.
    *
    *@param array $array
    *@return boolean
    */

    public function isCalendar($array){
        $cal = false;
        foreach($array as $cat)
            if(in_array("Events Calendar", (array) $cat)){
               $cal = true;
        }

        return $cal;
    } 

	/**
    * Format a date according to the ERS Guidlines
    * 12 February || 2017 or 12-14 Februrary, 2017 || 31 March - 3 April, 2017
    *
    *@param string $start
    *@param string $end
    *@return string 
    */
    public function ersDate($start, $end = null)
    {
        $startDate = new \DateTime($start);
        $start = Carbon::instance($startDate);

        if($end !== null){
        	$endDate = new \DateTime($end);   
        	$end = Carbon::instance($endDate);

            if($start->format('F') != $end->format('F')) {
                return $start->day.' '.$start->format('F').' - '.$end->day.' '.$end->format('F').', '.$end->year;    
            }
            if($start->format('F') == $end->format('F')) {
                return $start->day.'-'.$end->day.' '.$end->format('F').', '.$end->year; 
            }
        }

        return $start->day.' '.$start->format('F').', '.$start->year;     
    }

    public function toTimestamp($date){
        $date = new \DateTime($date);
        return (Carbon::instance($date))->timestamp;
    }

    public function isAlreadyPassed($date){
        $now = new Carbon();
        $dateToTest = new \DateTime($date);
        if($now < $dateToTest) {
            return $this->ersDate($date);
        }

        return null;
    }


}