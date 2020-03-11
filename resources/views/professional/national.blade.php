@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()

@section('content')
<div class="ers-content article-items">
  <div class="row">
    {{-- 
    <div class="col-md-3 medium-grey-bg left-photo-map"></div>  --}}
    {{--  Beginning Main Content Area  --}}
    <div class="col-md-9 lighter-grey-bg article-text">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags)
            <p style="margin-top:10px;padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif 
        </div>
      </div>
      <div class="page-head">
        <h2 class="">{{$item->title}}</h2>
        <h4 class="">@if($item->subTitle){{$item->subTitle}}@endif</h4>
        @if(isset($author))
        <h4 calss="author">
          <a href="authors/{{$author->slug}}">
            @if($author->image)
              <img src="{{$author->image}}" alt="@if($author->imageDescription)){{$author->imageDescription}}@endif" class="img-circle">
            @endif
           {{$author->title}}
          </a>
        </h4>
        @endif
      </div>
      <div class="article text-left @if(!$item->articleOneColumn) two-columns @endif">
        @if($item->createdOn && $item->type)
          @if($item->type == "News" && !$item->doNotDisplayCreatedOn)
            @if($item->displayModifiedOnDate)<h4 class="date">{{ $item->modifiedOn }}</h4>
            @else <h4 class="date">{{ $item->createdOn }}</h4>
            @endif
          @endif
        @endif
        @if($item->lead){!! $item->lead !!}@endif
        
      <div class="main-content" style="padding-top: 0px;">
        <div class="row row_event " id="national" style="position: relative; "></div>
      </div>


        @if($item->body){!! $item->body !!}@endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <p><i>Respiratory Worldwide aims to stimulate communication and interaction between national and regional respiratory societies and ERS. These articles have not been (peer) reviewed and are not official ERS content.</i></p>
          @endif
        @endif
      </div>
      @if($item->comments == true)
      <hr>
      <div id="disqus_thread"></div>
      @endif

    </div>
    {{--  Beginning Main Content Area  --}}
    {{--  Beginning Right Side-bar  --}}
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">
        @if($item->image)
          <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
        @endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <p><img src="https://cdn.ersnet.org/images/news/respiratory-logo.jpg" class="img-rounded img-responsive" style="width:350px;"></p>
           @endif
        @endif       
        {{-- FBL20200309 : sponsors not available for national-and-regional-society-cooperation article (content type "article", no sponsors property available) --}} 
        @if($item->sponsors[0]->text)
          @if($item->image)
            <hr>
          @endif
          @if($item->sponsors[0]->image)
              <p><img src="{{ $item->sponsors[0]->image }}" class="img-rounded" style="width:200px;"></p>
          @endif
          @if($item->sponsors[0]->text)
            <h4>{{$item->sponsors[0]->text}}</h4>
          @endif
        @endif
        @if($item->loc->lat && $item->loc->long)
            <div id="map"></div>
        @endif
        @if($item->video)
          <div class="videoWrapper" style="min-height:300px">
            {!!$item->video!!} 
          </div>
        @endif
        @if(isset($relatedItems))
          @include('partials.related-items', array('relatedItems' => $relatedItems)) 
        @endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <div role="alert" class="alert alert-info alert-dismissible" style="text-align: left ;font-size:15px ; ">
              <i>This article is part of Respiratory Worldwide; a platform for leaders of respiratory societies to share their latest news about activities and events across the world.</i>
          </div>
          @endif
        @endif

      </div>

    </div>
    {{--  End Right Sidebar  --}}
  </div>
</div>

{{-- Modal contents div --}}
{{-- END Modal contents div --}}

@stop()  

@section('scripts')
  @include('elements.map.script', array('item' => $item)) 
  
  {{-- <script src="https://jpillora.com/jquery.rest/dist/1/jquery.rest.min.js"></script> --}}
<script src="/js/jquery.rest.min.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
        var apiUrl = '{{ env('API_URL') }}' ? '{{ env('API_URL') }}' : 'https://api.ersnet.org/' ;
        var client = new $.RestClient(apiUrl, {
            cache: 60, //This will cache requests for 60 seconds
            cachableMethods: ["GET"] //This defines what method types can be cached (this is already set by default)
        });
 
        client.add('calendar');
        client.calendar.read({type:'hermes'}).done(function (data){
            const events = data.data;
            for( let i = 0; i < events.length ; i++){
              const image = events[i].image ? '<div class="card-image"'
                        +'style="background-size:cover;background-repeat: no-repeat;height:150px;'
                        +'background-image: url(\'' + events[i].image + '\');'
                        +'background-position: center center;"></div>'
                        : '';
 
              const title = events[i].title;
              const uri = events[i].uri;
              const leadParagraph = events[i].shortLead;
              const createdPath = window.location.pathname + '/' + events[i].slug;
              const path = uri 
                            ? uri
                            : createdPath
                            // : `${window.location.pathname}/${events[i].slug}`
              const anchor = '<a href=\"' + path + '\">' + title + '</a>';
              // const anchor = `<a href="${path}">${title}</a>`
              const cardNational = '<div class="col-md-4 isotope"><div class="card card-event">'
                + image
                + '<div class="card-content text-left"><h3 class="title">'
                +  anchor
                + '</h3><p class="date" style="padding-bottom: 3px;"><span class="icon s7-map-marker"></span>'
                +  events[i].eventLocation
                + '</p><p class="date"><span class="icon s7-date"></span>'
                + events[i].eventDates
                + '</p>'
                +  leadParagraph
                + '</div><div class="card-action clearfix"><a href="'
                + path
                + '" class="btn btn-register">more</a></div></div></div>';


              $(cardNational).appendTo($('#national'));
            }
        });
    });
  </script>

@stop()