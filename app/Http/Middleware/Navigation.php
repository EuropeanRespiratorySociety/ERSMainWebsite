<?php

namespace App\Http\Middleware;

use App;
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

            $menu->add('The Society', array('url' => '#community', 'class' => 'horizontal'));
                $menu->theSociety->add('Who we are', 'the-society/who-we-are' );
                    $menu->whoWeAre->add('Leadership and committees', 'the-society/who-we-are/leadership');
                        $menu->leadershipAndCommittees->add('National Delegates', 'the-society/who-we-are/leadership/national-delegates');
                        $menu->leadershipAndCommittees->add('Science Council', 'the-society/who-we-are/leadership/science-council');
                        $menu->leadershipAndCommittees->add('Assembly Heads', 'the-society/who-we-are/leadership/assembly-heads');
                        $menu->leadershipAndCommittees->add('Assembly Secretaries', 'the-society/who-we-are/leadership/assembly-secretaries');
                        $menu->leadershipAndCommittees->add('Education Council', 'the-society/who-we-are/leadership/education-council');
                        $menu->leadershipAndCommittees->add('Council', 'the-society/who-we-are/leadership/council');
                        $menu->leadershipAndCommittees->add('Advocacy Council', 'the-society/who-we-are/leadership/advocacy-council');
                        $menu->leadershipAndCommittees->add('Early Career Members Committee', 'the-society/who-we-are/leadership/early-career-members-committee');
                        $menu->leadershipAndCommittees->add('ERS Election', 'the-society/who-we-are/leadership/ers-elections');
                        $menu->leadershipAndCommittees->add('Open Positions', 'the-society/who-we-are/leadership/open-positions');
                    $menu->whoWeAre->add('Executive office', 'the-society/who-we-are/executive-office');
                    $menu->whoWeAre->add('Governance and Transparency', 'the-society/who-we-are/ers-governance-and-transparency');
                    $menu->whoWeAre->add('Awards', 'the-society/who-we-are/awards' );
                        $menu->awards->add('Gold Medals', 'the-society/who-we-are/awards/gold-medals')->link->attr(array('style' => 'display:none'));
                        $menu->awards->add('Special Honours', 'the-society/who-we-are/awards/special-honours')->link->attr(array('style' => 'display:none'));
                        $menu->awards->add('Research Excellence', 'the-society/who-we-are/awards/research-excellence')->link->attr(array('style' => 'display:none'));

                    $menu->whoWeAre->add('Fellow of ERS', 'the-society/who-we-are/fellow-of-ers');
                    $menu->whoWeAre->add('Contact', 'the-society/who-we-are/contact')
                                            ->prepend('<i class="s7-mail icon"></i><span>')
                                            ->append('</span>')
                                            ->link->attr(array('class' => 'contact'));
                $menu->theSociety->add('Membership', 'the-society/membership' );
                    $menu->membership->add('Benefits', 'the-society/membership#benefits' );
                    $menu->membership->add('Categories', 'the-society/membership#categories' );
                    $menu->membership->add('FAQs', 'the-society/membership#faqs' );
                $menu->theSociety->add('Assemblies', 'the-society/assemblies' );
                    $menu->assemblies->add('1. Clinical', 'the-society/assemblies#clinical' );
                    $menu->assemblies->add('2. Respiratory Intensive Care', 'the-society/assemblies#respiratory-intensive-care' );
                    $menu->assemblies->add('3. Cell and Molecular Biology', 'the-society/assemblies#cell-and-molecular-biology' );
                    $menu->assemblies->add('4. Clinical Physiology, Sleep and Pulmonary Circulation', 'the-society/assemblies#clinical-physiology' );
                    $menu->assemblies->add('5. Airway Diseases', 'the-society/assemblies#airway-diseases' );
                    $menu->assemblies->add('6. Occupation and Epidemiology', 'the-society/assemblies#occupation-and-epidemiology' );
                    $menu->assemblies->add('7. Paediatrics', 'the-society/assemblies#paediatrics' );
                    $menu->assemblies->add('8. Thoracic Surgery and Transplantation', 'the-society/assemblies#thoracic-surgery' );
                    $menu->assemblies->add('9. Allied Respiratory Professionals', 'the-society/assemblies#allied-respiratory' );
                    $menu->assemblies->add('10. Respiratory Infections', 'the-society/assemblies#respiratory-infections' );
                    $menu->assemblies->add('11. Thoracic Oncology', 'the-society/assemblies#thoracic-oncology' );
                $menu->theSociety->add('News And Features', 'the-society/news' );
                    //$menu->newsAndFeatures->add('Respiratory Worldwide', 'the-society/news/respiratory-worldwide' );
                    $menu->newsAndFeatures->add('Respiratory Matters', 'the-society/news/respiratory-matters' );
                    $menu->newsAndFeatures->add('ERS Vision', 'http://www.ersvision.org/')->link->attr(array('target' => '_blank'));
                    $menu->newsAndFeatures->add('Press Office', 'the-society/news/press-office');

            $menu->add('Congress and events','#scientific-and-educational-events');
                $menu->congressAndEvents->add('Events calendar','congress-and-events/events-calendar');
               // $menu->congressAndEvents->add('ERS International Congress','https://erscongress.org')->link->attr(array('target' => '_blank'));
                $menu->congressAndEvents->add('ERS International Congress','congress-and-events/ers-international-congress');
                $menu->congressAndEvents->add('ERS Respiratory Updates','congress-and-events/ers-respiratory-updates');
                //$menu->congressAndEvents->add('Paris 2018','congress-and-events/ers-2018');
                $menu->congressAndEvents->add('The Lung Science Conference','congress-and-events/cell-matrix-interactions-in-lung-disease-and-regeneration');
                    $menu->theLungScienceConference->add('Estoril, your host city','congress-and-events/the-lung-science-conference/estoril-your-host-city')->link->attr(array('style' => 'display:none'));
                    $menu->theLungScienceConference->add('Previous Conferences','http://old.ersnet.org/previous-conferences.html')
                                            ->link->attr(array('target' => '_blank','style' => 'display:none'));
                $menu->congressAndEvents->add('Sleep and Breathing Conference','http://www.sleepandbreathing.org');
                $menu->congressAndEvents->add('ERS Presidential Summits','congress-and-events/ers-presidential-summits');
                $menu->congressAndEvents->add('ERS Research Seminars','congress-and-events/ers-research-seminars');
                // $menu->congressAndEvents->add('Past International Congresses','congress-and-events/past-international-congresses');
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
                // $menu->professionalDevelopment->add('Webinar','professional-development/ers-webinar-discussion-of-severe-asthma-with-ers-experts');
                $menu->professionalDevelopment->add('Fellowships','professional-development/fellowships');
                $menu->professionalDevelopment->add('HERMES projects','http://hermes.ersnet.org/projects.html')
                                            ->link->attr(array('target' => '_blank'));                 
                $menu->professionalDevelopment->add('HERMES exams','http://hermes.ersnet.org/exams.html')
                                            ->link->attr(array('target' => '_blank'));                 
                    $menu->fellowships->add('Short-Term','professional-development/fellowships/short-term-research-training-fellowships')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Long-Term','professional-development/fellowships/long-term-research-fellowships')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Fellowships in industry','professional-development/fellowships/ers-fellowships-in-industry')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Fellowships Programme on Guideline Methodology','professional-development/fellowships/fellowship-programme-on-guideline-methodology')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Clinical Training Fellowship','professional-development/fellowships/clinical-training-fellowship')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('RESPIRE 3 - Host Application','professional-development/fellowships/respire-3-host-application-and-web-registry')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('RESPIRE 3 - Marie Curie Post-doctoral Research Fellowships (MCF RESPIRE 3)','professional-development/fellowships/marie-curie-post-doctoral-research-fellowships-(respire-3)')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('RESPIRE 2 - Marie Curie Post-doctoral Research Fellowships','professional-development/fellowships/marie-curie-post-doctoral-research-fellowships-respire-2')->link->attr(array('style' => 'display:none'));


                //$menu->professionalDevelopment->add('Educational Activities','professional-development/educational-activities');
                $menu->professionalDevelopment->add('ERS Courses','professional-development/courses');
                $menu->professionalDevelopment->add('Grants and Sponsorships','professional-development/grants-and-sponsorships');
                $menu->professionalDevelopment->add('E-learning','http://www.ers-education.org/home.aspx')
                                            ->link->attr(array('target' => '_blank'));                 
                //$menu->professionalDevelopment->add('Junior Members','http://juniors.ersnet.org')
                                            //->link->attr(array('target' => '_blank')); 
                $menu->professionalDevelopment->add('Respipedia','http://respipedia.ers-education.org/home.aspx')
                                            ->link->attr(array('target' => '_blank'));               
                $menu->professionalDevelopment->add('Accreditation','professional-development/accreditation');
                $menu->professionalDevelopment->add('Training Programmes','professional-development/ers-certified-training-programmes');


            $menu->add('Research','#research');
                $menu->research->add('Task Forces', 'research/task-forces');
                $menu->research->add('Published Guidelines', 'research/published-guidelines');
                $menu->research->add('Clinical Research Collaborations', 'research/clinical-research-collaborations');
                $menu->research->add('Research Seminars', 'research/research-seminars');
                $menu->research->add('Research Agency', 'research/research-agency');

            $menu->add('Advocacy and patient resources','#advocacy');
                $menu->advocacyAndPatientResources->add('EU-Affairs','advocacy/eu-affairs');
                $menu->advocacyAndPatientResources->add('EU-Projects','advocacy/eu-projects');
                $menu->advocacyAndPatientResources->add('Policy Areas','advocacy/policy-areas');
                    $menu->policyAreas->add('The ERS Tobacco Control Committee','advocacy/policy-areas/the-ers-tobacco-control-committee')->link->attr(array('style' => 'display:none'));;
                    $menu->policyAreas->add('Environment and Health Committee','advocacy/policy-areas/environment-and-health-committee')->link->attr(array('style' => 'display:none'));
                $menu->advocacyAndPatientResources->add('Alliances','advocacy/alliances');
                $menu->advocacyAndPatientResources->add('Healthy Lungs for Life','http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                                            ->link->attr(array('target' => '_blank')); 
                $menu->advocacyAndPatientResources->add('European Lung Foundation','http://www.europeanlung.org/en/')
                                            ->link->attr(array('target' => '_blank'));                   

            if(App::environment() != 'local'){
                 foreach ($menu->items as $item) {
                    $item->link->secure();
                    if(request()->path() == $item->link->path['url']) {
                        $item->active();
                        if( $item->parent ) {
                            $item->activate( $menu->whereId( $item->parent )->first() );
                        }
                    }
                 }
            }
        });

        return $next($request);
    }
}
