@extends('template')
@section('content')

<div class="ers-content home-content">
  <div id="fullpage">
    <div class="section fp-auto-height">
      <div class="top-box">
        <div class="subject">
               <div class="text-center">
               <em>“ Member states encouraged to adopt plain packaging to tackle smoking epidemic ”</em>
               <label><em>ERS News 2 June, 2016</em></label>
               </div>
        </div>
      </div>
    </div>
    <!-- Start Section 1 --> 
    @include('home.home-sections.news')

    <!-- Start Section 2 -->  
    @include('home.home-sections.community')

    <!-- Start Section 2 -->  
    @include('home.home-sections.scientific')

    <!-- Start Section 3 -->  
    @include('home.home-sections.publications')

    <!-- Start Section 3 -->  
    @include('home.home-sections.professional')

    



        

  </div>
</div>





  @stop()  

    @section('scripts')
    <!--script src="../js/fullpage.js" type="text/javascript"></script-->
    <!--script src="../js/app-assemblies.js" type="text/javascript"></script-->

    <!--script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>
    <script src="http://erstemplate.app/js/app-home.js" type="text/javascript"></script-->

    <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-home.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        new WOW({offset: 0, mobile: false }).init();
        App.assemblies();             
      });
    </script>
  @stop()