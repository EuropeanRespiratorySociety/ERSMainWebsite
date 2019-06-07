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

            $menu->add('The Society', array('url' => '#community', 'class' => 'horizontal ga-nav-society'));
                $menu->theSociety->add('Who we are', 'the-society/who-we-are' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->whoWeAre->add('Leadership and committees', 'the-society/who-we-are/leadership')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('National Delegates', 'the-society/who-we-are/leadership/national-delegates')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Science Council', 'the-society/who-we-are/leadership/science-council')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Assembly Heads', 'the-society/who-we-are/leadership/assembly-heads')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Assembly Secretaries', 'the-society/who-we-are/leadership/assembly-secretaries')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Education Council', 'the-society/who-we-are/leadership/education-council')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Council', 'the-society/who-we-are/leadership/council')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Advocacy Council', 'the-society/who-we-are/leadership/advocacy-council')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Early Career Members Committee', 'the-society/who-we-are/leadership/early-career-members-committee')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('ERS Election', 'the-society/who-we-are/leadership/ers-elections')
                        ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->leadershipAndCommittees->add('Open Positions', 'the-society/who-we-are/leadership/open-positions')
                        ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->whoWeAre->add('Executive office', 'the-society/who-we-are/executive-office')
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->whoWeAre->add('Governance and Transparency', 'the-society/who-we-are/ers-governance-and-transparency')
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->whoWeAre->add('Awards', 'the-society/who-we-are/awards' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                        $menu->awards->add('Gold Medals', 'the-society/who-we-are/awards/gold-medals')->link->attr(array('style' => 'display:none'));
                        $menu->awards->add('Special Honours', 'the-society/who-we-are/awards/special-honours')->link->attr(array('style' => 'display:none'));
                        $menu->awards->add('Research Excellence', 'the-society/who-we-are/awards/research-excellence')->link->attr(array('style' => 'display:none'));

                    $menu->whoWeAre->add('Fellow of ERS', 'the-society/who-we-are/fellow-of-ers')
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->whoWeAre->add('Contact', 'the-society/who-we-are/contact')
                                            ->prepend('<i class="s7-mail icon"></i><span>')
                                            ->append('</span>')
                                            ->link->attr(array('class' => 'contact'));
                $menu->theSociety->add('Membership', 'the-society/membership' )
                ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->membership->add('Benefits', 'the-society/membership#benefits' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->membership->add('Categories', 'the-society/membership#categories' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->membership->add('FAQs', 'the-society/membership#faqs' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->membership->add('CERS', 'the-society/membership/cers' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                $menu->theSociety->add('Assemblies', 'the-society/assemblies' )
                ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('1. General Pneumology', 'the-society/assemblies#general-pneumology' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('2. Respiratory Intensive Care', 'the-society/assemblies#respiratory-intensive-care' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('3. Basic and translational sciences', 'the-society/assemblies#basic-and-translational-sciences' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('4. Sleep and Breathing disorders; and clinical physiology', 'the-society/assemblies#sleep-and-breathing-disorders' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('5. Airway diseases, asthma and COPD', 'the-society/assemblies#airway-diseases' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('6. Epidemiology and Environment', 'the-society/assemblies#epidemiology-and-environment' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('7. Paediatrics', 'the-society/assemblies#paediatrics' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('8. Thoracic Surgery and Transplantation', 'the-society/assemblies#thoracic-surgery' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('9. Allied Respiratory Professionals', 'the-society/assemblies#allied-respiratory' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('10. Respiratory Infections', 'the-society/assemblies#respiratory-infections' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('11. Thoracic Oncology', 'the-society/assemblies#thoracic-oncology' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('12. Interstitial Lung Diseases', 'the-society/assemblies#interstitial-lung-diseases' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('13. Pulmonary Vascular Diseases', 'the-society/assemblies#pulmonary-vascular-diseases' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->assemblies->add('14. Clinical Techniques, Imaging and Endoscopy', 'the-society/assemblies#clinical-techniques' )
                    ->link->attr(array('class' => 'ga-nav-society'));                    
                $menu->theSociety->add('News And Features', 'the-society/news' )
                ->link->attr(array('class' => 'ga-nav-society'));
                    //$menu->newsAndFeatures->add('Respiratory Worldwide', 'the-society/news/respiratory-worldwide' );
                    $menu->newsAndFeatures->add('Respiratory Matters', 'the-society/news/respiratory-matters' )
                    ->link->attr(array('class' => 'ga-nav-society'));
                    $menu->newsAndFeatures->add('ERS Vision', 'https://www.ersvision.org/')
                    ->link->attr(array('target' => '_blank', 'class' => 'ga-nav-society'));
                    $menu->newsAndFeatures->add('Press Office', 'the-society/news/press-office')
                    ->link->attr(array('class' => 'ga-nav-society'));

            $menu->add('Congress and events','#scientific-and-educational-events')
            ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                $menu->congressAndEvents->add('Events calendar','congress-and-events/events-calendar')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                $menu->congressAndEvents->add('ERS International Congress','https://erscongress.org')->link->attr(array('target' => '_blank'));
               //  $menu->congressAndEvents->add('ERS International Congress','congress-and-events/ers-international-congress')
               // ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                $menu->congressAndEvents->add('ERS Respiratory Updates','congress-and-events/ers-respiratory-updates')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
               // $menu->congressAndEvents->add('ERS Satellites','congress-and-events/ers-satellite')
               // ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                //$menu->congressAndEvents->add('Paris 2018','congress-and-events/ers-2018');
                $menu->congressAndEvents->add('The Lung Science Conference','congress-and-events/metabolic-alterations-in-lung-ageing-and-disease')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                    $menu->theLungScienceConference->add('Estoril, your host city','congress-and-events/the-lung-science-conference/estoril-your-host-city')->link->attr(array('style' => 'display:none'));
                    $menu->theLungScienceConference->add('Previous Conferences','http://old.ersnet.org/previous-conferences.html')
                                            ->link->attr(array('target' => '_blank','style' => 'display:none'));
                $menu->congressAndEvents->add('Sleep and Breathing Conference','https://sleepandbreathing.org')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                $menu->congressAndEvents->add('ERS Presidential Summits','congress-and-events/ers-presidential-summits')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                $menu->congressAndEvents->add('ERS Research Seminars','congress-and-events/ers-research-seminars')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
                // $menu->congressAndEvents->add('Past International Congresses','congress-and-events/past-international-congresses');
                $menu->congressAndEvents->add('Event endorsement','congress-and-events/external-events-endorsement')
                ->link->attr(array('class' => 'ga-nav-congress-and-events'));
            $menu->add('Publications','#publications')
                                            ->link->attr(array(
                                                'class' => "ga-navigation"));
                $menu->publications->add('European Respiratory Journal', 'http://erj.ersjournals.com/')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('ERJ Open Research', 'http://openres.ersjournals.com/')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('European Respiratory Review', 'http://err.ersjournals.com/')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('Monograph', 'http://erm.ersjournals.com/')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('Breathe', 'http://breathe.ersjournals.com/')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('Guidelines', 'http://www.ers-education.org/pages/default.aspx?id=2005')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('White Books', 'https://www.erswhitebook.org/')
                                            ->link->attr(array(
                                                'target' => '_blank'));
                $menu->publications->add('ERS Handbooks', 'http://www.ers-education.org/publications/handbook-series.aspx')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('FIRS World Report', 'pdf/publications/firs-world-report.pdf')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('Air Quality and Health','publications/air-quality-and-health')
                                            ->link->attr(array(
                                                'class' => "ga-navigation"));
                $menu->publications->add('ERS Road Map', 'publications/european-respiratory-roadmap')
                                            ->link->attr(array(
                                                'target' => '_blank', 
                                                'class' => "ga-navigation"));
                $menu->publications->add('RED Congress Magazine', 'https://ersguide.org/')
                                            ->link->attr(array(
                                                'target' => '_blank',
                                                'class' => "ga-navigation"));
                $menu->publications->add('COPD Audit', 'pdf/publications/copd_audit_web_version.pdf')
                                            ->link->attr(array(
                                                'target' => '_blank', 
                                                'class' => "ga-navigation"));


            $menu->add('Professional development','#professional-development')
              ->link->attr(array(
                'class' => "ga-prof-dev"));
                $menu->professionalDevelopment->add('Courses','professional-development/courses')->link->attr(array(
                  'class' => "ga-prof-dev"));
                $menu->professionalDevelopment->add('Respiratory Digests','professional-development/respiratory-digests')
                ->link->attr(array(
                  'class' => "ga-prof-dev"));
                  // $menu->professionalDevelopment->add('Webinar','professional-development/ers-webinar-discussion-of-severe-asthma-with-ers-experts');
                $menu->professionalDevelopment->add('Fellowships','professional-development/fellowships')
                  ->link->attr(array(
                    'class' => "ga-prof-dev"));
                    $menu->fellowships->add('Short-Term','professional-development/fellowships/short-term-research-training-fellowships')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Long-Term','professional-development/fellowships/long-term-research-fellowships')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Fellowships in industry','professional-development/fellowships/ers-fellowships-in-industry')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Fellowships Programme on Guideline Methodology','professional-development/fellowships/fellowship-programme-on-guideline-methodology')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('Clinical Training Fellowship','professional-development/fellowships/clinical-training-fellowship')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('RESPIRE 3 - Host Application','professional-development/fellowships/respire-3-host-application-and-web-registry')->link->attr(array('style' => 'display:none'));
                    $menu->fellowships->add('RESPIRE 3 - Marie Curie Post-doctoral Research Fellowships (MCF RESPIRE 3)','professional-development/fellowships/marie-curie-post-doctoral-research-fellowships-(respire-3)')->link->attr(array('style' => 'display:none'));
            
                $menu->professionalDevelopment->add('Hermes activities','professional-development/hermes')
                  ->link->attr(array(
                    'class' => "ga-prof-dev"));
                    $menu->hermesActivities->add('HERMES examination in adult respiratory medicine','professional-development/hermes/adult/ers-hermes-examination-in-adult-respiratory-medicine')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Preparation: adult exam','professional-development/hermes/adult/preparation')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Eligibility, registration and fees: adult exam','professional-development/hermes/adult/eligibility-registration-and-fees')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Examination Committee: adult exam','professional-development/hermes/adult/examination-committee')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Diplomates: adult exam','professional-development/hermes/adult/diplomates-registry-adult')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('HERMES examination in paediatric respiratory medicine','professional-development/hermes/paediatric/ers-hermes-examination-in-paediatric-respiratory-medicine')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Preparation: paediatric exam','professional-development/hermes/paediatric/preparation-paediatric-exam')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Eligibility, registration and fees: paediatric exam','professional-development/hermes/paediatric/eligibility-registration-and-fees-paediatric-exam')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Examination Committee: paediatric exam','professional-development/hermes/paediatric/examination-committee')
                      ->link->attr(array('style' => 'display:none'));
                    $menu->hermesActivities->add('Diplomates: paediatric exam','professional-development/hermes/diplomates-paediatric-exam')
                      ->link->attr(array('style' => 'display:none'));
                    // $menu->professionalDevelopment->add('HERMES exams','http://hermes.ersnet.org/exams.html')
                                            // ->link->attr(array('target' => '_blank'));

                $menu->professionalDevelopment->add('Webinars','professional-development/ers-webinars')
                ->link->attr(array(
                  'class' => "ga-prof-dev"));
                  
                $menu->professionalDevelopment->add('CPD','professional-development/cpd')
                ->link->attr(array('style' => 'display:none'));
                $menu->professionalDevelopment->add('PhD Overview','professional-development/phd-overview')
                ->link->attr(array('style' => 'display:none'));

                //$menu->professionalDevelopment->add('Educational Activities','professional-development/educational-activities');
                $menu->professionalDevelopment->add('Grants and Sponsorships','professional-development/grants-and-sponsorships')->link->attr(array(
                  'class' => "ga-prof-dev"));
                $menu->professionalDevelopment->add('E-learning','http://www.ers-education.org/home.aspx')
                                            ->link->attr(array('target' => '_blank', 'class' => "ga-prof-dev"));                 
                //$menu->professionalDevelopment->add('Junior Members','http://juniors.ersnet.org')
                                            //->link->attr(array('target' => '_blank')); 
                // $menu->professionalDevelopment->add('Respipedia','http://respipedia.ers-education.org/home.aspx')
                //                             ->link->attr(array('target' => '_blank', 'class' => "ga-prof-dev"));
                $menu->professionalDevelopment->add('Training Programmes','professional-development/ers-certified-training-programmes')
                  ->link->attr(array(
                  'class' => "ga-prof-dev"));
                $menu->professionalDevelopment->add('CURRICULUM','professional-development/ers-curriculum-design-a-summary-of-projects')
                ->link->attr(array(
                  'class' => "ga-prof-dev"));
                $menu->professionalDevelopment->add('Accreditation','professional-development/accreditation')
                ->link->attr(array(
                'class' => "ga-prof-dev"));
                //$menu->professionalDevelopment->add('HERMES projects','http://hermes.ersnet.org/projects.html')
                  //->link->attr(array('target' => '_blank'));  


            $menu->add('Research','#research')
            ->link->attr(array('class' => 'ga-nav-research'));
                $menu->research->add('Task Forces and Guidelines', 'research/task-forces')
                ->link->attr(array('class' => 'ga-nav-research'));
                // $menu->research->add('Published Guidelines', 'research/published-guidelines')
                // ->link->attr(array('class' => 'ga-nav-research'));
                $menu->research->add('Clinical Research Collaborations', 'research/clinical-research-collaborations')
                ->link->attr(array('class' => 'ga-nav-research'));
                $menu->research->add('Research Seminars', 'research/research-seminars')
                ->link->attr(array('class' => 'ga-nav-research'));
                $menu->research->add('Research Agency', 'research/research-agency')
                ->link->attr(array('class' => 'ga-nav-research'));
                $menu->research->add('Pragmatic Trials Endorsement', 'research/pragmatic-trial-endorsement')
                ->link->attr(array('class' => 'ga-nav-research'));

                $menu->add('Advocacy and patient resources','#advocacy')
            ->link->attr(array('class' => 'ga-nav-advocacy'));
                $menu->advocacyAndPatientResources->add('EU-Affairs','advocacy/eu-affairs')
                ->link->attr(array('class' => 'ga-nav-advocacy'));
                $menu->advocacyAndPatientResources->add('EU-Projects','advocacy/eu-projects')
                ->link->attr(array('class' => 'ga-nav-advocacy'));
                $menu->advocacyAndPatientResources->add('Policy Areas','advocacy/policy-areas')
                ->link->attr(array('class' => 'ga-nav-advocacy'));
                    $menu->policyAreas->add('The ERS Tobacco Control Committee','advocacy/policy-areas/the-ers-tobacco-control-committee')->link->attr(array('style' => 'display:none'));;
                    $menu->policyAreas->add('Environment and Health Committee','advocacy/policy-areas/environment-and-health-committee')->link->attr(array('style' => 'display:none'));
                $menu->advocacyAndPatientResources->add('Alliances','advocacy/alliances')
                ->link->attr(array('class' => 'ga-nav-advocacy'));
                $menu->advocacyAndPatientResources->add('PATIENT RESOURCES','http://www.europeanlung.org/en/lung-disease-and-information/factsheets')
                                            ->link->attr(array('target' => '_blank', 'class' => 'ga-nav-advocacy'));
                $menu->advocacyAndPatientResources->add('Healthy Lungs for Life','http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                                            ->link->attr(array('target' => '_blank', 'class' => 'ga-nav-advocacy')); 
                $menu->advocacyAndPatientResources->add('European Lung Foundation','http://www.europeanlung.org/en/')
                                            ->link->attr(array('target' => '_blank', 'class' => 'ga-nav-advocacy'));

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
