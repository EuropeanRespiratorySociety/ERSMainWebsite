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
        <div id="self-assessment-adult-title"></div>
        <div class="main-content" style="padding-top: 0px;">
          <div class="row row_event " id="self-assessment-adult" style="position: relative; "></div>
        </div>

        <div id="self-assessment-paediatric-title"></div>
        <div class="main-content" style="padding-top: 0px;">
          <div class="row row_event " id="self-assessment-paediatric" style="position: relative; "></div>
        </div>


      @if($item->body){!! $item->body !!}@endif

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
       // var client = new $.RestClient('https://api.ersnet.org/');
        console.log("rest");
        client.add('calendar');
        client.calendar.read({type:'selfAssessment'}).done(function (data){
            const events = data.data;
            let showAdultTitle = true;
            let showPaediatricTitle = true;

            for( let i = 0; i < events.length ; i++){ 
              const cardInfo = '<div class="col-md-4 isotope"><div class="card card-event" ><div class="card-content text-left" style="padding: 20px;">'
                          // +'<h3 class="title">' + events[i].title + '</h3>'
                      +'<p class="date"><span class="icon s7-map-marker"></span>'
                      + events[i].eventLocation
                      + '</p><p class="date"><span class="icon s7-date"></span>'
                      + events[i].eventDates
                      + '</p>'
                      + events[i].leadParagraph
                      +'</div></div></div>';

                const courseTitleAdult = '<h3>Upcoming ERS HERMES self-assessment courses in adult respiratory medicine</h3>';
                const courseTitlePaediatric = '<h3>Upcoming ERS HERMES self-assessment courses in pediatric respiratory medicine</h3>';



              if(events[i].selfAssessmentType == "Adult"){
                $(cardInfo).appendTo($('#self-assessment-adult'));
                if(showAdultTitle){
                    $(courseTitleAdult).appendTo($('#self-assessment-adult-title'));
                  showAdultTitle= false;
               }
              }
              else if(events[i].selfAssessmentType == "Paediatric"){
                $(cardInfo).appendTo($('#self-assessment-paediatric'));
                if(showPaediatricTitle){
                    $(courseTitlePaediatric).appendTo($('#self-assessment-paediatric-title'));
                  showPaediatricTitle = false;
               }
              }
            }
        });
    });
  </script>

@stop()