  @extends('template')
  @section('content')

  <div class="ers-content executive-content">
  	<div id="fullpage">
  		<div class="section fp-auto-height">
  			<div class="main-content">
  				<div class="page-head">
  					<h2 class="">Policy areas</h2>
  				</div>

  				<div class="col-md-7 center-block lead">
  					ERS advocates for tobacco control, tobacco control, air quality and advocacy for health research. The European Union (EU) institutions decide on policy and legislation in areas such as research, environment and public health for over 500 million people in 28 countries. EU polices may affect you even if you are an ERS member from a non-EU country. ERS therefore takes EU affairs very seriously and its dedicated office located in Brussels aims to raise awareness of respiratory diseases and raise the profile of the respiratory profession across Europe. <br>
  					ERS attempts to shape EU policies by engaging directly with policy makers; securing the allocation of vital resources that can deliver better lung health; and building coalitions on prevention, research, environment, tobacco control, public health, patients and specific disease areas.
  					Find out more about our work on the following topics:

  				</div>
  			</div>
  		</div>

  		<!-- Section 1 -->
  		@include('advocacy.policy-areas.tobacco-control')

  		<!-- Section 2 -->
  		@include('advocacy.policy-areas.chronic-diseases')

  		<!-- Section 3 -->
  		@include('advocacy.policy-areas.environment-policy')

  		<!-- Section 4 -->
  		@include('advocacy.policy-areas.research-and-innovation')

  	</div>
  </div>






  @stop()  

  @section('scripts')
  <!--script src="../js/fullpage.js" type="text/javascript"></script-->
  <!--script src="../js/app-assemblies.js" type="text/javascript"></script-->

  <!--script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script-->
  <!--script src="http://erstemplate.app/js/app-policy-areas.js" type="text/javascript"></script-->


  <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
  <script src="https://bootstrap.ersnet.org/js/app-policy-areas.js" type="text/javascript"></script>

    	<script type="text/javascript">
    		$(document).ready(function(){
      	//initialize the javascript
      	new WOW({offset: 110, mobile: false }).init();
      	App.assemblies();             
      });
  </script>
  @stop()