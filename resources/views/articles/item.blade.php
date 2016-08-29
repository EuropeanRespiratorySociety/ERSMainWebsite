@extends('template')
@section('meta')
        @include('partials.meta', array('meta' => [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ]
              , ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content article-items">
  <div class="row">
    <!--div class="col-md-3 medium-grey-bg left-photo-map">    
    
    </div-->
    <!-- Beginning Main Content Area -->
    <div class="col-md-9 lighter-grey-bg article-text">
      <div class="header">
        <div class="clearfix notification">
          @if(isset($item->flags))
          <p class="pull-right {{$item->flags['color'] }}">{{ $item->flags['text'] }}</p>
          @endif 
        </div>
      </div>
      <div class="page-head">
        <h2 class="">{{$item->title}}</h2>
        <h4 class="">@if(isset($item->subtitle)){{$item->subtitle}}@endif</h4>
        @if(isset($author))
        <h4 calss="author">
          <a href="authors/{{$author->slug}}">
            @if(isset($author->image))
              <img src="{{$author->image}}" alt="@if(isset($author->imageDescription)){{$author->imageDescription}}@endif" class="img-circle">
            @endif
            {{$author->title}}
          </a>
        </h4>
        @endif
      </div>
      <div class="article text-left @if($item->articleTwoColumns) two-columns @endif">
                @if(isset($item->createdOn) && isset($item->type))
                    @if($item->type == "News")<h4 class="date">{{ $item->createdOn }}</h4>@endif
                @endif
        @if(isset($item->lead)){!!$item->lead!!}@endif
        @if(isset($item->body)){!!$item->body!!}@endif
      </div>
    </div>
    <!-- Beginning Main Content Area -->
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">

      @if(isset($item->image))
      <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
      @endif
      @if(isset($item->location->lat)&&isset($item->location->long))
          <div id="map"></div>
      @endif
      @if(isset($item->video))
        <div class="videoWrapper">
          {!!$item->video!!} 
        </div>
      @endif
      @if(isset($relatedItems))
        @include('partials.related-items', array('relatedItems' => $relatedItems)) 
      @endif

      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

<!--Modal contents div-->
<!--END Modal contents div-->

@stop()  

@section('scripts')
  @if(isset($item->location->lat)&&isset($item->location->long))
    <script>
    function initMap() {
      function initialize(){
        var myLatLng ={ lat: {{$item->location->lat}}, lng: {{$item->location->long}} };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng,
          disableDefaultUI: true,
          fullscreenControl: true
        });

        var marker = new google.maps.Marker({
        map: map,  
        position: myLatLng
        });
      }
      google.maps.event.addDomListener(window, "load", initialize);
      }


    </script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-tI78_Glb_dewK0yre49LLKgCyBZuj5c&callback=initMap" async defer></script>  
    @endif
    
@stop()