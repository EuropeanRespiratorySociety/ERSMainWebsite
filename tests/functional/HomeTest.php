<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * Test the latest news.
     *
     * @return void
     */
    public function testLatestNews()
    {
        $this->visit('/')
             ->see('Latest News')
             ->click('All News')
             ->see('News')
             ->seePageIs('the-society/news');
    }

    /**
     * Test the Calendar.
     *
     * @return void
     */
    public function testCalendar()
    {
        $this->visit('/')
             ->see('Scientific and educational meetings')
             ->click('All Events')
             ->see('page-head')
             ->seePageIs('congress-and-events/events-calendar');
    }


}
