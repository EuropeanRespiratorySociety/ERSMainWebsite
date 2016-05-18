  @extends('template')
	@section('content')
	<div class="ers-content">

      <div id="fullpage">

        
        <div class="section">
          <div class="main-content">
            <h2>Who we are</h2>
          </div>
        </div>

      </div>  

	@stop()  

    @section('scripts')
    <script src="../js/fullpage.js" type="text/javascript"></script>
    <script src="../js/app-fullpage.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
        new WOW({offset: 110, mobile: false }).init();
        App.fullpage();             
      });
    </script>
    @stop()