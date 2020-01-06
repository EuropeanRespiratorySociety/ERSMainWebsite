@extends('template')
@section('meta')
        @include('partials.meta', array('meta' => 
              [
              'url' => 'https://www.ersnet.org'
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content home-content">
  <div id="fullpage">
    <div class="section fp-auto-height">
    @if(isset($items['mainNews']))
    <a href="{{url('the-society/news/'.$items['mainNews']->slug)}}">
    @endif 
      <div class="top-box" @if(isset($items['mainNews']->highResImage))style="background-image: url('{{$items['mainNews']->highResImage}}');background-position: center {{$items['mainNews']->imageAlignment}}" @endif>
        {{-- style="position: -webkit-sticky; position: sticky;margin-bottom:15px" to put blue box in bottom - -webkit-sticky; for IOS--}}
          <div class="subject"> 
            <div class="text-center">
              <span>{{$items['mainNews']->title}}</span>
              @if($items['mainNews']->doNotDisplayCreatedOnOnHomepage != true)
                <h4><em>{{$items['mainNews']->createdOn}}</em></h4>
              @endif
            </div> 
          </div>
      </div>
          @if(isset($items['mainNews']))
    </a>
    @endif
    </div>
    {{-- Start Section 1 --}}
    @include('home.home-sections.news', array('items' => $items['news']))

    {{-- Start Section 2 --}} 
    @include('home.home-sections.community')

    {{-- Start Section 3 --}} 
    @include('home.home-sections.scientific', array(
        'items' => isset($items['calendar']) ? $items['calendar'] : false, 
        'first' => isset($items['firstEvent']) ? $items['firstEvent'] : false ))

    {{-- Start Section 4 --}}  
    @include('home.home-sections.publications')

    {{-- Start Section 5 --}} 
    @include('home.home-sections.professional')

    {{-- Start Section 6 --}} 
    @include('home.home-sections.research')

     {{-- Start Section 7 --}}  
    @include('home.home-sections.advocacy')

    {{-- Start Section 8 --}}  
    @include('home.home-sections.elf')

    {{-- Footer --}}
    @include('footer')  

  </div>
</div>
@stop()  

@section('scripts')
    {{-- <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-home.js" type="text/javascript"></script>
    <script src="http://erstemplate.app//js/app-home.js" type="text/javascript"></script> --}}

    {{-- Cloud Front is the ERS CDN --}}
    <script src="https://cdn.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://cdn.ersnet.org/js/app-home.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        new WOW().init();
        App.home(); 

      /*  $('.row-books').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        });    */        
      }); 
    </script>
@stop()