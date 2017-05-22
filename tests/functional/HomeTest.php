<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /** @test */
    public function displays_latest_news()
    {
        $this->visit('/')
            ->see('https://bootstrap.ersnet.org/css/all.css')
            ->see('https://bootstrap.ersnet.org/js/jquery.min.js')
            ->see('https://bootstrap.ersnet.org/js/all.js')    
            ->see('Latest News')
            ->click('All News')
            ->see('News')
            ->seePageIs('the-society/news');
    }

    /** @test */
    public function displays_calendar_items()
    {
        $this->visit('/')
             ->see('Scientific and educational meetings')
             ->click('All Events')
             ->see('page-head')
             ->seePageIs('congress-and-events/events-calendar');
    }


}
