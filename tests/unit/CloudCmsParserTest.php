<?php

use App\Extensions\CloudCmsParser;

class CloudCmsParserCase extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->CC = new CloudCmsParser;
    }

    /** @test */
    public function does_the_parser_has_a_Model()
    {
        $this->assertTrue(is_array($this->CC->model));
    }

    /** @test */
    public function are_the_values_of_the_model_set_to_false()
    {
        $this->assertContains(false, $this->CC->model);
    }

    /** @test */
    public function it_returns_correct_data(){
        $items[0]['title'] = "This is a title that needs to be parsed";
        $this->CC->parse($items);
        $items = $this->CC->parsed;
        $this->assertTrue(is_array($items));
        $this->assertTrue(is_object($items[0]));
    }

    /** @test */
    public function it_parses(){
        $items[0]['title'] = "This is a title that needs to be parsed";
        $this->CC->parse($items);
        $items = $this->CC->parsed;

        $this->assertContains("This is a title that needs to be parsed", $items[0]->title);
        $this->assertFalse($items[0]->lastName);
        $this->assertFalse($items[0]->eventDates);
        $this->assertFalse($items[0]->flags->text);
        $this->assertFalse($items[0]->flags->color);
        $this->assertFalse($items[0]->feeList->junior);
        $this->assertFalse($items[0]->feeList->ersMember);
        $this->assertFalse($items[0]->deadlines->applicationDeadline);
        $this->assertFalse($items[0]->deadlines->applicationDeadline2);
        $this->assertFalse($items[0]->deadlines->notification);
        $this->assertFalse($items[0]->deadlines->notification2);
        $this->assertFalse($items[0]->deadlines->startDate);
        $this->assertFalse($items[0]->deadlines->startDate2);
        $this->assertFalse($items[0]->venue->name);
        $this->assertFalse($items[0]->venue->url);
        $this->assertFalse($items[0]->ebusVenues[0]->url);
        $this->assertFalse($items[0]->ebusVenues[0]->name);
        $this->assertFalse($items[0]->suggestedAccommodation[0]->url);
        $this->assertFalse($items[0]->suggestedAccommodation[0]->name);
        $this->assertFalse($items[0]->sponsors->image);
        $this->assertFalse($items[0]->sponsors->text);
        $this->assertFalse($items[0]->bursaryApplication->text);
        $this->assertFalse($items[0]->bursaryApplication->deadline);
        $this->assertFalse($items[0]->bursaryApplication->notificationOfResults);
        $this->assertFalse($items[0]->bursaryApplication->applyButtonUrl);
        $this->assertFalse($items[0]->mentorship->text);
        $this->assertFalse($items[0]->mentorship->deadline);
        $this->assertFalse($items[0]->mentorship->notificationOfResults);
        $this->assertFalse($items[0]->mentorship->applyButtonUrl);
        $this->assertFalse($items[0]->abstracts->text);
        $this->assertFalse($items[0]->abstracts->deadline);
        $this->assertFalse($items[0]->abstracts->notificationOfResults);
        $this->assertFalse($items[0]->abstracts->applyButtonUrl);
        $this->assertFalse($items[0]->registerButton->text);
        $this->assertFalse($items[0]->registerButton->link);
        $this->assertFalse($items[0]->typeColor);
    }

    /** @test */
    public function it_parses_markdown(){
        $items[0]['body'] = "###this is a title\n we try some bullets * Item one\n * Item 2\n * Item 3\n **This should be bold**\n ";
        $this->CC->parse($items);
        $items = $this->CC->parsed;
        $this->assertContains('<h3>', $items[0]->body);
        $this->assertContains('<ul>', $items[0]->body);
        $this->assertContains('<li>', $items[0]->body);
        $this->assertNotContains('\n', $items[0]->body);
    }


    /** @test */
    public function string_get_truncated(){
        $string = "This is a string that needs to be truncated";
        $truncated = $this->CC->truncate($string, 25);
        //The truncate methods keeps full words and cut the string for it
        //to be as close as the value passsed as second parameter and
        //adds "&hellip;" at the end which adds 8 characters
        $this->assertTrue(strlen($truncated) <= 33);
        $this->assertContains('&hellip;', $truncated);

        //Testing a custom "&hellip;"
        $truncated = $this->CC->truncate($string, 25, '***');
        $this->assertTrue(strlen($truncated) <= 28);
        $this->assertContains('***', $truncated);
    }

    /** @test */
    public function formats_title_correctly(){
        $title = "This is the title | this part should not appear as it allows to do comments in CC";
        $formated = $this->CC->formatTitle($title);
        $this->assertContains("This is the title", $formated);
        $this->assertNotContains("this part should not appear as it allows to do comments in CC", $formated);
        $this->assertNotContains("|", $formated);
    }
}
