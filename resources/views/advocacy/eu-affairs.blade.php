@extends('template')
@section('content')
<div class="ers-content category-tab-items">
    <div class="main-content">
        <div class="page-head"><h2 class="">EU Affairs</h2></div>
	    <div class="col-md-9 center-block lead">
	            <p>Advocacy is a core pillar of the Society. Through our Advocacy and European Affairs department based in Brussels, ERS raises public and political awareness on the importance of lung health.</p>  

                <p>We monitor legislative and policy developments and provide evidence-based input to ensure lung health is at the centre of the decision making process.</p>  

                <p>We organise events such as advocacy workshops, policy roundtables with MEPs and summits addressing the interface of science and policy, and we represent and promote the research needs of respiratory science and clinical care.</p>

                <p>In doing so, we work closely with advocacy actors and alliances, government representatives, European institutions and agencies, international organisations and the European Lung Foundation, which was founded by ERS to bring together patients and the public with respiratory professionals. 
                </p>
	    </div>
    </div>

    <!-- Tabs -->

        <div class="tab-container">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#eu_a_1" data-toggle="tab">NEWS</a></li>
              <li><a href="#eu_a_2" data-toggle="tab">ERS ROADMAP</a></li>
              <li><a href="http://erj.ersjournals.com/content/42/6/1433.extract" target="_blank">EUROPEAN LUNG CORNER</a></li>

              <!--li><a href="#eu_a_3" data-toggle="tab">EUROPEAN LUNG CORNER</a></li-->
            </ul>
            <div class="tab-content">
                <div id="eu_a_1" class="tab-pane active cont">
                    <div class="row row_news">
						@include('partials.items', array('items' => $items))             			       
                    </div>
                </div>
                <div id="eu_a_2" class="tab-pane cont">
                    <div class="row text-center">
                        <div class="col-md-3 col-md-offset-3">
                            <a href="http://www.ersroadmap.org/index.php?option=com_zoo&view=category&layout=category&Itemid=102">
                                <img class="img-responsive" src="../images/publications/roadmap.jpg">
                                <p>HEALTH POLICY MAKERS<br>VERSION</p>
                            </a>
                        </div>
                        <div class="col-md-3">
	                        <a href="http://www.ersroadmap.org/index.php?option=com_zoo&view=category&layout=category&Itemid=137">
	                            <img class="img-responsive" src="../images/publications/roadmap_2.png">
	                            <p>HEALTHCARE PROFESSIONALS<br>VERSION</p>
	                        </a>
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