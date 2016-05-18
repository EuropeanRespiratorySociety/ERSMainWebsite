@extends('template')
@section('content')
<div class="ers-content light-grey-bg">
<div class="main-content">

	<div class="row row_event">

	<div class="col-md-3">
        <div class="card card-event">
        <span class="label label-school">ERS Course</span>
            <div class="card-image">
                	<img class="img-responsive" src="../images/course/course_event.jpg">
            </div>

                    
            <div class="card-content">
                    
                    <p class="title">EBUS training programme - Part 1
                    <span>Next upcomming course</span>
                    </p>
                    <p class="date">14–16 April 2016</p>
                    <p>Overview of different ILDs, including their diagnostic procedures…
                    </p>
                    <p class="btn-rounded early_bird">Early Bird deadline 3 May  
                    </p>
                    <p class="place">
                        <span class="icon s7-map-marker"></span>
                        Copenhagen, Denmark
                    </p>

                    
                   
                </div>

            
                    
            <div class="card-action clearfix">
                <a href="#" target="new_blank"  class="btn pull-right btn-register">register</a>
                <!--a href="#" target="new_blank" class="btn pull-right btn-default">register</a-->
                
            </div>
        </div>
    </div>
	<div class="col-md-3">
	        <div class="card card-event-box">
	        	<div class="card-content">
	        		<div>
	                <p class="title">EBUS training programme - Part 1
                    <span>Next upcomming course</span>
                    </p>
                    <p class="date">14–16 April 2016</p>
                    <p>Overview of different ILDs, including their diagnostic procedures…
                    </p>
                    <p class="btn-rounded early_bird">Early Bird deadline 3 May  
                    </p>
                    <p class="place">
                        <span class="icon s7-map-marker"></span>
                        Copenhagen, Denmark
                    </p>

                    
	                </div>
	            </div>

	            <div class="card-image">
	                	<img class="img-responsive" src="../images/course/course_img.jpg">
	            </div>

	            
	                    
	            <div class="card-action clearfix">
	                <a href="#" target="new_blank"  class="btn pull-right btn-register">register</a>
	            </div>
	        </div>
	     </div>
	     </div>
</div>
</div>
@stop()  

    @section('scripts')
    <!--script src="../js/fullpage.js" type="text/javascript"></script-->
    <!--script src="../js/app-assemblies.js" type="text/javascript"></script-->

    <!--script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>
    <script src="http://erstemplate.app/js/app-assemblies.js" type="text/javascript"></script-->

    <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-assemblies.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
        new WOW({offset: 110, mobile: false }).init();
        App.assemblies();             
      });
    </script>
    @stop()