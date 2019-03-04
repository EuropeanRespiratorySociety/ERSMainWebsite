@extends('template')
@section('content')
<style>
#eu_a_2 .col-md-3 img {
  height: 200px;
  width: 141px;;
}

#eu_a_2 .col-md-3 img.horizonal-doc {
  height: 141px;
  width: 200px;
}

.publish-row {
  margin-bottom: 30px;
}

.euaffair-publication span{
  text-transform: uppercase;
}
</style>


<div class="ers-content category-tab-items">
    <div class="main-content">
        <div class="page-head"><h2 class="">EU Affairs</h2></div>
	    <div class="col-md-9 center-block lead">
	            <p>The ERS EU Affairs department works closely with the EU Institutions, global organisations such as the Global NCD Alliance, the Framework Convention Alliance and WHO to support science-based policy development in the respiratory field. The ERS EU Affairs department works closely with the European Lung Foundation to put patients at the heart of policy and participates in meetings of the Forum of International Respiratory Societies. </p>

	            <p>The Society is also involved in various alliances with other scientific societies.  The Tobacco Control Committee, the Environment and Health Committee and ERS Advocacy Council Chair work to promote better communication about European opportunities for research.
                </p>
                
	            <p>ERS has provided data which has informed several WHO and EU documents, directives and policies. Find out more about our areas of focus on our policy page.</p>
	    </div>
    </div><!-- main-content close -->

    <!-- Tabs -->

        <div class="tab-container">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#eu_a_1" data-toggle="tab">NEWS</a></li>
              <li><a href="#eu_a_2" data-toggle="tab">Publications</a></li>
              <li><a href="http://erj.ersjournals.com/content/42/6/1433.extract" target="_blank">EUROPEAN LUNG CORNER</a></li>

              <!--li><a href="#eu_a_3" data-toggle="tab">EUROPEAN LUNG CORNER</a></li-->
            </ul>
            <div class="tab-content">
                <div id="eu_a_1" class="tab-pane active cont">
                    <div class="row row_news">
						          @include('partials.items', array('items' => $items))             			       
                    </div>
                </div><!-- eu_a_1 close -->
                <div id="eu_a_2" class="tab-pane cont euaffair-publication">
                    <div class="row text-center">
                      <div class="col-md-9  col-xs-12 center-block">
                        <div class="row publish-row">
                          <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
                              <a href="https://ers.app.box.com/s/zj0x90cz9cwutldzlxbnoglzonmmnrbk" target="_blank">
                                  <img class="img-responsive horizonal-doc" src="http://localhost:8888/images/publications/euaffair/ERS-10principles-v8.png">
                                  <p>ERS 10 principles for lung health</p>
                              </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <a href="/publications/european-respiratory-roadmap" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/Ambitions_for_Europe.png">
                                <p style="margin-bottom: 35px;">Ambitions for Europe</p>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                              <a href="/publications/european-respiratory-roadmap" target="_blank">
                                  <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/LATAM REPORT_First_EN_DEF.png">
                                  <p>Tobacco control in Latin-American and Iberian countries - Volume 1 <br />
                                    <a href="/publications/european-respiratory-roadmap"><span>Spanish</span></a><br />
                                    <a href="/publications/european-respiratory-roadmap"><span>Portuguese</span></a>
                                  </p>
                              </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                              <a href="/publications/european-respiratory-roadmap" target="_blank">
                                  <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/LATAM REPORT_Second_EN_DEF.png">
                                  <p>Tobacco control in Latin-American and Iberian countries – Volume 2<br />
                                    <a href="/publications/european-respiratory-roadmap" target="_blank"><span>Spanish</span></a><br />
                                    <a href="/publications/european-respiratory-roadmap" target="_blank"><span>Portuguese</span></a>
                                  </p>
                              </a>
                          </div>
                        </div><!-- 1st row close-->

                        <div class="row publish-row">
                          <div class="col-md-3 col-xs-6">
                            <a href="https://ers.app.box.com/s/druntvdpyex1akxos8ps4upheomqodi9" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/ERS_TB_RECOM_EN_V1.png">
                                <p>Tobacco control recommendations for Latin and Iberian countries
                            </a>
                                  <br />
                                  <a href="https://ers.app.box.com/s/n9k5v4zqimkveh83614x5as1udm9cwb7"><span>Spanish</span></a><br />
                                </p>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <a href="https://ers.app.box.com/s/aknlfme32buzbwn01z7u3ltvjk3hcrxu" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/Link-1.-ERS-ENSP-Leaflet-on-plain-packaging.png">
                                <p style="margin-bottom: 55px;">Plain and simple facts on plain packaging</p>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <a href="https://www.ersnet.org/pdf/advocacy/ERS_ELF_EU_Research_Project_WEB.pdf" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/ERS_ELF_EU_Research_Project_WEB.png">
                                <p>A selection of EU-funded respiratory research projects</p>
                            </a>
                          </div>
                         <div class="col-md-3 col-xs-6">
                            <a href="/publications/european-respiratory-roadmap"target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/2016.02.22-2nd-ERS-TB-leaflet-(official)_HD-no-crop.png">
                                <p>The tuberculosis threat – Working together to combat TB</p>
                            </a>
                          </div>
                        </div><!-- 2nd row close-->

                        <div class="row publish-row">
                          <div class="col-md-3 col-xs-6">
                            <a href="/publications/european-respiratory-roadmap" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/2016_HLFL_COPD-in-Europe-brochure_v2.png">
                                <p>COPD in Europe</p>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <a href="/publications/european-respiratory-roadmap" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/Lung-Cancer-Leaflet.png">
                                <p>Lung cancer in Europe – Tackling the biggest cancer killer</p>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6" >
                            <a href="https://www.ersnet.org/pdf/advocacy/ers_spotlight_on_clean_air_and_health.pdf" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/ers_spotlight_on_clean_air_and_health.png">
                                <p>Spotlight on clean air and health</p>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <a href="https://www.ersnet.org/pdf/publications/air-quality-ENG.pdf" target="_blank">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/air-quality-ENG.png">
                                <p>Air quality and health</p>
                            </a>
                          </div>
                        </div><!-- 3rd row close-->

                        <div class="row publish-row">
                          <div class="col-md-3 col-xs-6">
                            <a href="/publications/european-respiratory-roadmap">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/roadmap-euaffair.png">
                                <p>European Respiratory roadmap – health policy makers version</p>
                            </a>
                          </div>
                          <div class="col-md-3 col-xs-6">
                            <a href="/publications/european-respiratory-roadmap">
                                <img class="img-responsive" src="http://localhost:8888/images/publications/euaffair/roadmap-euaffair02.png">
                                <p>European respiratory roadmap – healthcare professionals version</p>
                            </a>
                          </div>
                        </div><!-- 4th row close-->


				        </div><!-- eu_a_2 close -->
                <div id="eu_a_3" class="tab-pane">   
                </div><!-- eu_a_3 close -->
            </div><!-- tab content close -->
        </div><!-- tab-container close -->
    <!-- END Tabs -->
</div><!-- ers-content close-->
@stop()  

@section('scripts')
<script type="text/javascript">
    $('.row_news').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-4',
        },            
        percentPosition: true
        
    });
</script> 
@stop()