<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class Navigation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MainNav', function($menu){

            $menu->add('The Society','the-society');
                $menu->theSociety->add('Who we are', 'the-society/who-we-are' );
                    $menu->whoWeAre->add('Satutes and Policies', 'the-society/who-we-are/statutes-policies-and-annual-report' );
                    $menu->whoWeAre->add('Awards', 'the-society/who-we-are/awards' );
                    $menu->whoWeAre->add('Fellow of ERS', 'the-society/who-we-are/fellow-of-ers' );
                $menu->theSociety->add('Leadership and committees', 'the-society/leadership' );
                $menu->theSociety->add('Membership', 'the-society/membership' );
                    $menu->leadershipAndCommittees->add('National Delegates', 'the-society/leadership/national-delegates' );
                    $menu->leadershipAndCommittees->add('Science Council', 'the-society/leadership/science-council' );
                    $menu->leadershipAndCommittees->add('Science Council', 'the-society/leadership/assembly-heads' );
                    $menu->leadershipAndCommittees->add('Science Council', 'the-society/leadership/education-council' );
                    $menu->leadershipAndCommittees->add('Science Council', 'the-society/leadership/assembly-secretaries' );
                    $menu->leadershipAndCommittees->add('Science Council', 'the-society/leadership/council' );
                    $menu->leadershipAndCommittees->add('Science Council', 'the-society/leadership/elections-2016' );
                $menu->theSociety->add('Executive office', 'the-society/executive-office' );
                    #$menu->theSociety->whoWeAre->add('Executive office', 'the-society/who-we-are/executive-office' );
                $menu->theSociety->add('Assemblies', 'the-society/assemblies' );

            $menu->add('Congress and events','congress-and-events');
                $menu->congressAndEvents->add('Events calendar','congress-and-events/events-calendar');
                $menu->congressAndEvents->add('ERS International Congress','http://erscongress.org');
                $menu->congressAndEvents->add('The Lung Science Conference','congress-and-events/the-lung-science-conference');
                $menu->congressAndEvents->add('Sleep and Breathing Conference','http://www.sleepandbreathing.org');
                $menu->congressAndEvents->add('ERS Presidential Summit','congress-and-events/ers-presidential-summit');
                $menu->congressAndEvents->add('ERS Research Seminars','congress-and-events/ers-research-seminars');
                $menu->congressAndEvents->add('Past International Congresses','congress-and-events/past-international-congresses');
                $menu->congressAndEvents->add('Event endorsement','congress-and-events/event-endorsement');

            $menu->add('Publications','#publications');
                $menu->publications->add('European Respiratory Journal', 'http://erj.ersjournals.com/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('ERJ Open Research', 'http://openres.ersjournals.com/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('European Respiratory Review', 'http://err.ersjournals.com/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('Monograph', 'http://erm.ersjournals.com/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('Breathe', 'http://breathe.ersjournals.com/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('Guidelines', 'http://www.ers-education.org/pages/default.aspx?id=2005')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('White Books', 'http://www.erswhitebook.org/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('ERS Handbooks', 'http://www.ers-education.org/publications/handbook-series.aspx')
                    ->link->attr(array('target' => '_blank'));                
                $menu->publications->add('FIRS World Report', 'pdf/publications/firs-world-report.pdf')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('Air Quality and Health','publications/air-quality-and-health');
                $menu->publications->add('ERS Road Map', 'http://www.ersroadmap.org/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('RED Congress Magazine', 'http://www.ersbuyersguide.org/')
                    ->link->attr(array('target' => '_blank'));
                $menu->publications->add('COPD Audit', 'pdf/publications/copd_audit_web_version.pdf')
                    ->link->attr(array('target' => '_blank'));


            $menu->add('Professional development','professional-development');
                $menu->professionalDevelopment->add('Fellowships','professional-development/fellowships');
                    $menu->fellowships->add('Short-Term','professional-development/fellowships/short-term');
                    $menu->fellowships->add('Long-Term','professional-development/fellowships/long-term');
                $menu->professionalDevelopment->add('ERS Courses','professional-development/courses');


            $menu->add('Research','research');
            $menu->add('Advocacy','advocacy');
                $menu->advocacy->add('EU-Affairs','advocacy/eu-affairs');
                $menu->advocacy->add('EU-Projects','advocacy/eu-projects');




        });

        return $next($request);
    }
}
