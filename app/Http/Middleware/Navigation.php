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

            $menu->add('The Society', array('url' => 'the-society', 'class' => 'horizontal'));
                $menu->theSociety->add('Who we are', 'the-society/who-we-are' );
                    $menu->whoWeAre->add('Leadership and committees', 'the-society/who-we-are/leadership' );
                        $menu->leadershipAndCommittees->add('National Delegates', 'the-society/who-we-are/leadership/national-delegates' );
                        $menu->leadershipAndCommittees->add('Science Council', 'the-society/who-we-are/leadership/science-council' );
                        $menu->leadershipAndCommittees->add('Assembly Heads', 'the-society/who-we-are/leadership/assembly-heads' );
                        $menu->leadershipAndCommittees->add('Assembly Secretaries', 'the-society/who-we-are/leadership/assembly-secretaries' );
                        $menu->leadershipAndCommittees->add('Education Council', 'the-society/who-we-are/leadership/education-council' );
                        $menu->leadershipAndCommittees->add('Council', 'the-society/who-we-are/leadership/council' );
                        $menu->leadershipAndCommittees->add('Junior Members Committee', 'http://juniors.ersent.org' )->link->attr(array('target' => '_blank'));
                        $menu->leadershipAndCommittees->add('Election 2016', 'the-society/who-we-are/leadership/elections-2016' );
                    $menu->whoWeAre->add('Executive office', 'the-society/who-we-are/executive-office' );
                    $menu->whoWeAre->add('Satutes and Policies', 'the-society/who-we-are/statutes-policies-and-annual-report' );
                    $menu->whoWeAre->add('Awards', 'the-society/who-we-are/awards' );
                    $menu->whoWeAre->add('Fellow of ERS', 'the-society/who-we-are/fellow-of-ers' );
                $menu->theSociety->add('Membership', 'the-society/membership' );
                    $menu->membership->add('Benefits', 'the-society/membership#benefits' );
                    $menu->membership->add('Categories', 'the-society/membership#categories' );
                    $menu->membership->add('FAQs', 'the-society/membership#faqs' );
                $menu->theSociety->add('Assemblies', 'the-society/assemblies' );
                    $menu->assemblies->add('1. Clinical', 'the-society/assemblies#clinical' );
                    $menu->assemblies->add('2. Respiratory Intensive Care', 'the-society/assemblies#respiratory-intensive-care' );
                    $menu->assemblies->add('3. Cell and Molecular Biology', 'the-society/assemblies#cell-and-molecular-biology' );
                    $menu->assemblies->add('4. Clinical Physiology, Sleep and Pulomonary Circulation', 'the-society/assemblies#clinical-physiology' );
                    $menu->assemblies->add('5. Airway Diseases', 'the-society/assemblies#airway-diseases' );
                    $menu->assemblies->add('6. Occupation and Epidemiology', 'the-society/assemblies#occupation-and-epidemiology' );
                    $menu->assemblies->add('7. Paediatrics', 'the-society/assemblies#paediatrics' );
                    $menu->assemblies->add('8. Thoracic Surgery and Transplantation', 'the-society/assemblies#thoracic-surgery' );
                    $menu->assemblies->add('9. Allied Respiratory Professionals', 'the-society/assemblies#allied-respiratory' );
                    $menu->assemblies->add('10. Respiratory Infections', 'the-society/assemblies#respiratory-infections' );
                    $menu->assemblies->add('11. Thoracic Oncology', 'the-society/assemblies#thoracic-oncology' );
                $menu->theSociety->add('News And Features', 'the-society/news' );
                    $menu->newsAndFeatures->add('Respiratory World Wide', 'the-society/news/respiratory-world-wide' );
                    $menu->newsAndFeatures->add('Respiratory Maters', 'the-society/news/respiratory-matters' );
                    $menu->newsAndFeatures->add('ERS Vision', 'http://www.ersvision.org/')->link->attr(array('target' => '_blank'));
                    $menu->newsAndFeatures->add('Press Office', 'the-society/news/press-office');
                    $menu->newsAndFeatures->add('Contact', 'the-society/news/contact')
                                            ->prepend('<i class="s7-mail icon"></i><span>')
                                            ->append('</span>')
                                            ->link->attr(array('class' => 'contact'));

            $menu->add('Congress and events','congress-and-events');
                $menu->congressAndEvents->add('Events calendar','congress-and-events/events-calendar');
                $menu->congressAndEvents->add('ERS International Congress','http://erscongress.org');
                $menu->congressAndEvents->add('The Lung Science Conference','congress-and-events/the-lung-science-conference');
                    $menu->theLungScienceConference->add('Estoril, your host city','congress-and-events/the-lung-science-conference/estoril-your-host-city');
                    $menu->theLungScienceConference->add('Previous Conferences','http://old.ersnet.org/previous-conferences.html')
                                            ->link->attr(array('target' => '_blank'));
                $menu->congressAndEvents->add('Sleep and Breathing Conference','http://www.sleepandbreathing.org');
                $menu->congressAndEvents->add('ERS Presidential Summit','congress-and-events/ers-presidential-summit');
                $menu->congressAndEvents->add('ERS Research Seminars','congress-and-events/ers-research-seminars');
                $menu->congressAndEvents->add('Past International Congresses','congress-and-events/past-international-congresses');
                $menu->congressAndEvents->add('Event endorsement','congress-and-events/external-events-endorsement');

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


            $menu->add('Professional development','#professional-development');
                $menu->professionalDevelopment->add('Fellowships','professional-development/fellowships');
                $menu->professionalDevelopment->add('HERMES projects','http://hermes.ersnet.org/projects.html')
                                            ->link->attr(array('target' => '_blank'));                 
                $menu->professionalDevelopment->add('HERMES exams','http://hermes.ersnet.org/exams.html')
                                            ->link->attr(array('target' => '_blank'));                 
                    $menu->fellowships->add('Short-Term','professional-development/fellowships/short-term');
                    $menu->fellowships->add('Long-Term','professional-development/fellowships/long-term');
                $menu->professionalDevelopment->add('Educational Activities','professional-development/educational-activities');
                    $menu->educationalActivities->add('ERS Courses','professional-development/educational-activities/courses');
                $menu->professionalDevelopment->add('Grants and Sponsorships','professional-development/grants-and-sponsorships');
                $menu->professionalDevelopment->add('E-learning','http://www.ers-education.org/home.aspx')
                                            ->link->attr(array('target' => '_blank'));                 
                $menu->professionalDevelopment->add('Junior Members','http://juniors.ersnet.org')
                                            ->link->attr(array('target' => '_blank')); 
                $menu->professionalDevelopment->add('Respipedia','http://respipedia.ers-education.org/home.aspx')
                                            ->link->attr(array('target' => '_blank'));               
                $menu->professionalDevelopment->add('Accreditation','professional-development/accreditation');


            $menu->add('Research','research');
                $menu->research->add('Task Forces', 'research/task-forces');
                $menu->research->add('Published Guidelines', 'research/published-guidelines');
                $menu->research->add('Clinical Research Collaborations', 'research/clinical-research-collaborations');
                $menu->research->add('Research Seminars', 'research/research-seminars');
                $menu->research->add('Research Agency', 'research/research-agency');

            $menu->add('Advocacy','#advocacy');
                $menu->advocacy->add('EU-Affairs','advocacy/eu-affairs');
                $menu->advocacy->add('EU-Projects','advocacy/eu-projects');
                $menu->advocacy->add('Policy Areas','advocacy/policy-areas');
                    $menu->policyAreas->add('The ERS Tobacco Control Committee','advocacy/policy-areas/the-ers-tobacco-control-committee');
                    $menu->policyAreas->add('Environment and Health Committee','advocacy/policy-areas/environment-and-health-committee');
                $menu->advocacy->add('Alliances','advocacy/alliances');
                $menu->advocacy->add('Healthy Lungs for Life','http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                                            ->link->attr(array('target' => '_blank')); 
                $menu->advocacy->add('European Lung Foundation','http://www.europeanlung.org/en/')
                                            ->link->attr(array('target' => '_blank'));                   




        });

        return $next($request);
    }
}
