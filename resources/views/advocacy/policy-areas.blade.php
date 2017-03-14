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
  					ERS advocates for tobacco control, air quality and advocacy for health research. The European Union (EU) institutions decide on policy and legislation in areas such as research, environment and public health for over 500 million people in 28 countries. EU polices may affect you even if you are an ERS member from a non-EU country. ERS therefore takes EU affairs very seriously and its dedicated office located in Brussels aims to raise awareness of respiratory diseases and raise the profile of the respiratory profession across Europe. <br>
  					ERS attempts to shape EU policies by engaging directly with policy makers; securing the allocation of vital resources that can deliver better lung health; and building coalitions on prevention, research, environment, tobacco control, public health, patients and specific disease areas.
  					Find out more about our work on the following topics:
  				</div>

          <div class="row assemblies_menu">
              <div class="col-md-4 col-md-offset-3">
                  <div class="bs-grid-block">
                      <div class="content">
                          <ul class="text-left">
                              <li data-menuanchor="tobacco-control">
                                  <a href="advocacy/policy-areas#tobacco-control">Tobacco control</a>
                              </li>
                              <li data-menuanchor="environment-and-health">
                                  <a href="advocacy/policy-areas#environment-and-health">Environment and health</a>
                              </li>
                              <li data-menuanchor="science-and-healthcare">
                                  <a href="advocacy/policy-areas#science-and-healthcare">Science and healthcare</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="bs-grid-block">
                      <div class="content">
                          <ul class="text-left">

                              <li data-menuanchor="tuberculosis">
                                  <a href="advocacy/policy-areas#tuberculosis">Tuberculosis</a>
                              </li>
                              <li data-menuanchor="chronic-diseases">
                                  <a href="advocacy/policy-areas#chronic-diseases">Chronic-diseases</a>
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>


  			</div><!-- main-content -->
  		</div><!-- section -->



  		<!-- Section 1 -->
  		@include('advocacy.policy-areas.tobacco-control')

  		<!-- Section 2 -->
      @include('advocacy.policy-areas.environment-and-health')
  		
  		<!-- Section 3 -->
  		@include('advocacy.policy-areas.science-and-healthcare')

      <!-- Section 4 -->
      @include('advocacy.policy-areas.tuberculosis')

  		<!-- Section 5 -->
      @include('advocacy.policy-areas.chronic-diseases')

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
  <script type="text/javascript">
      var options = {
        useEasing : true,
      };
      var data94 = new CountUp("data94", 0, 94, 0, 2.5, options);
      var data33 = new CountUp("data33", 0, 33, 0, 5, options);
      var data15 = new CountUp("data15", 0, 15, 0, 3, options);

      var data400k = new CountUp("data400k", 0, 400000, 0, 9, options);
      var data50bis = new CountUp("data50bis", 0, 50, 0, 11, options);
      var data15 = new CountUp("data15", 0, 15, 0, 13, options);
      var data20 = new CountUp("data20", 0, 20, 0, 14, options);

      var data400kbis = new CountUp("data400kbis", 0, 400000, 0, 8, options);
      var data340 = new CountUp("data340", 0, 340000, 0, 8, options);
      var data70 = new CountUp("data70", 0, 70000, 0, 13, options);

      var data50 = new CountUp("data50", 0, 50, 0, 7, options);
      var data10 = new CountUp("data10", 0, 10, 0, 9, options);
      var data42 = new CountUp("data42", 0, 42, 0, 11, options);



      data94.start();
      data33.start();
      data15.start();

      data400k.start();
      data50bis.start();
      data15.start();
      data20.start();

      data400kbis.start();
      data340.start();
      data70.start();

      data50.start();
      data10.start();
      data42.start();






  </script>
  @stop()