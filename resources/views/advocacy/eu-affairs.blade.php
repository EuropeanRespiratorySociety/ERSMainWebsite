@extends('template')
@section('content')
<style>
#eu_a_2 .col-md-3 img {
  height: 200px;
  width: auto;
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
    </div>

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
                </div>
                <div id="eu_a_2" class="tab-pane cont euaffair-publication">
                    <div class="row text-center">
                      <div class="col-md-9  col-xs-12 center-block">
                        <div class="col-md-3">
                            <a href="/publications/european-respiratory-roadmap">
                                <img class="img-responsive" src="https://cdn.ersnet.org/images/publications/roadmap.jpg">
                                <p>HEALTH POLICY MAKERS<br>VERSION</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                          <a href="/publications/european-respiratory-roadmap">
                              <img class="img-responsive" src="https://cdn.ersnet.org/images/publications/roadmap_2.png">
                              <p>HEALTHCARE PROFESSIONALS<br>VERSION</p>
                          </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/publications/european-respiratory-roadmap">
                                <img class="img-responsive" src="https://cdn.ersnet.org/images/publications/roadmap_2.png">
                                <p>HEALTHCARE PROFESSIONALS<br>VERSION</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/publications/european-respiratory-roadmap">
                                <img class="img-responsive" src="https://cdn.ersnet.org/images/publications/roadmap_2.png">
                                <p>HEALTHCARE PROFESSIONALS<br>VERSION</p>
                            </a>
                        </div>

                      </div>




                      </div>
                   </div>
				        </div>
                <div id="eu_a_3" class="tab-pane">   
                </div>
            </div>
        </div>
    <!-- END Tabs -->
</div>
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