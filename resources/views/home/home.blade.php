@extends('template')
@section('content')

<div class="ers-content home-content">
  <div id="fullpage">
    <div class="section fp-auto-height">
      <div class="top-box" style="background-image: url('{{$items['mainNews']->highResImage}}');background-position: center {{$items['mainNews']->imageAlignment}}">
        <div class="subject">
               <div class="text-center">
               <em>{{$items['mainNews']->title}}</em>
               <h4><em>{{$items['mainNews']->createdOn}}</em></h4>
               </div>
        </div>
      </div>
    </div>
    <!-- Start Section 1 --> 
    @include('home.home-sections.news', array('items' => $items['news']))

    <!-- Start Section 2 -->  
    @include('home.home-sections.community')

    <!-- Start Section 3 -->  
    @include('home.home-sections.scientific', array('items' => $items['calendar'], 'first' => $items['firstEvent']))

    <!-- Start Section 4 -->  
    @include('home.home-sections.publications')

    <!-- Start Section 5 -->  
    @include('home.home-sections.professional', array(
              'funding' => $items['featuredFunding'],
              'eLearning' => $items['eLearning'],
              'course' => $items['featuredCourse']
              ))

     <!-- Start Section 6 -->  
    @include('home.home-sections.research')

     <!-- Start Section 7 -->  
    @include('home.home-sections.advocacy')

    <!-- Start Section 8 -->  
    @include('home.home-sections.elf')

    



        

  </div>
</div>





  @stop()  

    @section('scripts')
    <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-home.js" type="text/javascript"></script>
    <!--script src="http://erstemplate.app//js/app-home.js" type="text/javascript"></script-->

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        new WOW().init();
        App.home(); 

        $('.row-books').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        });            
      });
    </script>
  @stop()