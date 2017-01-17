<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class CourseControllerTest extends TestCase
{
	/** @test */
    public function displays_all_courses()
    {
        $this->visit('professional-development/courses')
        	 ->see('ERS Courses')
        	 ->see('card-event')
        	 ->see('MORE')
        	 ->see('s7-map-marker')
        	 ->see('s7-date')
        	 ->click('more')
        	 ->see('article-title');
    }

	/** @test */
    // public function show_a_course()
    // {
    // 	$this->visit('professional-development/courses/')
    // }
}
