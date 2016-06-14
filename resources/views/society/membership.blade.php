  @extends('template')
  @section('content')

  <div class="ers-content executive-content">
  	<div id="fullpage">
  		<div class="section fp-auto-height">
  			<div class="main-content">

  			Membership

  			</div>
  		</div>
  	</div>
  </div>

  @stop()  

  @section('scripts')
    <!--script src="../js/fullpage.js" type="text/javascript"></script-->
    <!--script src="../js/app-assemblies.js" type="text/javascript"></script-->

    <!--script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>
    <script src="http://erstemplate.app/js/app-executive-office.js" type="text/javascript"></script>
    <script src="http://erstemplate.app/js/map-lausanne.js" type="text/javascript"></script-->

    <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-executive-office.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
        new WOW({offset: 110, mobile: false }).init();
        App.assemblies();             
      });
    </script>
    @stop()