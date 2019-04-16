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

@section('structured-data')
  @include('partials.event-structured-data', array('item' => 
      [
        'url' => $item->url ?? null ,
        'name' => $item->title,
        'startDate' => isset($item->startDate) ? $item->startDate : null,
        'endDate' => isset($item->endDate) ? $item->endDate : null,
        'performer' => $item->organisers ?? null,
        'offers' => isset($item->feeList->ersMember) ? 'ERS Members: €' . $item->feeList->ersMember  : null,
        'image' => isset($item->image) ? $item->image : null,
        'description' => isset($item->shortLead) ? $item->lead : null,
        'location' => $item->eventLocation ?? null,
        'venueName' => isset($item->venue->name) ? $item->venue->name : null,
        'venueAddress' => isset($item->venue->streetAddress) ? $item->venue->streetAddress : null,
        'venueAddress2' => isset($item->venue->streetAddress2) ? $item->venue->streetAddress2 : null,
        'venuePostalCode' => isset($item->venue->postalCode) ? $item->venue->postalCode : null,
        'venueCity' => isset($item->venue->city) ? $item->venue->city : null,
        'venueCountry' => isset($item->venue->country) ? $item->venue->country : null,
      ]
  ))
@stop()
<style>
    #ersMainWebsite .event-items-content .event-items-right .md-chips .md-chip{
      margin: 0 5px 3px 0;
      display: inline-block;
      padding: 6px 12px 0;
      border-radius: 28px;
      font-size: 13px;
      height:28px;
    }

    div.md-chip-disease{
      background: #F3E5F5;
      color: #4A148C;
    }

    div.md-chip-method{
      background: #D0F8CE;
      color: #0D5302;
    }



</style>
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 left-photo-map">

      <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>

      {{-- <div class="medium-grey-bg">
        @if($item->image)
        <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
        @endif
        @if($item->video)
          <div class="videoWrapper">
            {!!$item->video!!} 
          </div>
        @endif
        @if($item->loc->lat && $item->loc->long && $item->type != "ERS Online course")
            <div id="map"></div>
        @endif
        @if(isset($relatedItems))
            @include('partials.related-items', array('relatedItems' => $relatedItems)) 
        @endif
      </div> --}}

      @if ($item->sponsors[0]->text || $item->sponsors[0]->image)
          @if($item->slug === "potentially-operable-lung-cancer")
            <div class="course-sponsor text-left">
              <div class="course-sponsor-wrapper">
                <div class="course-sponsor-image col-md-7 col-xs-7 pull-right">
                  <p style="background-image: url('{{ $item->sponsors[0]->image }}'); background-repeat: no-repeat; background-size:100%; width: 100%; height: 100%; background-position: right center; background-size: contain;"></p>
                </div> 
                <div class="course-sponsor-right  col-md-5 col-xs-5 pull-left">
                  <h4 class="text-left">{{$item->sponsors[0]->text}}</h4>
                </div>
            </div>
          </div>
          @else
            <div class="course-sponsor text-left">
                <div class="course-sponsor-wrapper">
                    <div class="col-md-12 col-xs-12" style="position: relative; top: 30%;">
                      <h4 class="text-center" style="font-size: 20px;"><a data-toggle="modal" data-target="#sponsors-info" type="button" class="cursor_pointer">Event support</a></h4>
                    </div>
                </div>
            </div>
          @endif
      @endif
    </div>

    <div class="col-md-6 lighter-grey-bg ers-course-info">
      <div class="header">
        <div class="clearfix notification">
          @if($item->feeList->liveStreaming)
            <p style="text-align:left;color:#d0043c;">
              <i style="font-size:26px;font-weight:bold;position:relative;top:5px;" class="s7-video"></i>
              <span>Live streaming will be available</span>
            </p>
          @endif
          @if($item->flags->text)
          <p style="padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <label>{{$item->eventDates}} @if(isset($item->eventLocation))<a href="javascript:void(0)" class="cursor_default">{{$item->eventLocation}}</a>@endif</label>
        </h2>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-6 col-xs-6 text-left event-items-category">
            <p><em>Webinar</em></p>
            {{-- <p><em>{{$item->type}}</em></p> --}}
          View <a href="/professional-development/ers-webinars">all ERS Webinar</a>
        </div>
        <div class="col-md-6 col-xs-6 text-right">
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme">
                <span class="icon s7-next-2" style="font-size: 24px;"></span>
                  {{$item->programmeButtonText ? $item->programmeButtonText : 'Log in to the Webinar' }}
              </a>
          {{-- @if($item->programme)  
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme">
              <span class="icon s7-map" style="font-size: 24px;"></span>
                {{$item->programmeButtonText ? $item->programmeButtonText : 'Course Programme' }}
            </a>
          @endif --}}
        </div>
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if($item->faculty)
      <h5 class="ers-course-organisers">{{$item->faculty}}</h5>
      @endif
      @if($item->disclosure)
      <h5><a href="{{$item->disclosure}}" target="_blank">Faculty disclosure</a></b></h5>
      @endif

      <div class="article text-left">
        @if($item->body){!!$item->lead!!}@endif
        @if($item->body){!!$item->body!!}@endif
      </div>
    </div>
    {{-- Beginning Right Side-bar --}}
    <div class="col-md-3 event-items-right white-bg right-column-smaller">
          {{-- Target audience and Diseases --}}
          <div class=" text-left" style="padding: 0 15px;">
            <h4 style="font-size:15px;"><strong>Target Audience</strong></h4>
            <ul>
              <li>Lecture including case presentations</li>
              <li>Lecture including case presentations</li>
              <li>Lecture including case presentations</li>

            </ul>
            <h4 style="font-size:15px; margin-top:30px;"><strong>Diseases / Methods</strong></h4>

            <div class="md-chips ">
                <div class="md-chip md-chip-disease">Thoracic oncology</div>
                <div class="md-chip md-chip-disease">Thoracic oncology</div>
                <div class="md-chip md-chip-method">General respiratory patient care</div>
            </div>

          </div>

          {{-- Target audience and Diseases end--}}
          <div class="white-bg sticky-infobox">
            <p class="text-left">For more information, contact {!! Html::mailto('fellowships@ersnet.org', 'fellowships@ersnet.org') !!}</p>
            <a href=" https://my.ersnet.org/Fellowships/Main" target="_blank" class="btn btn-lg  btn-primary sticky-btn" >Registration</a>
        </div>
    </div>
    {{-- End Right Sidebar --}}
  </div>
</div>
@stop() 

{{--Modal contents div--}}
@section('modals')
  @include('elements.modal.venue', array('item' => $item)) 
  @include('elements.modal.venues', array('item' => $item)) 
  @include('elements.modal.cancellation', array('item' => $item)) 
  @include('elements.modal.travel-info', array('item' => $item))  
  @include('elements.modal.technical-info', array('item' => $item))
  @include('elements.modal.sponsors', array('item' => $item))
  {{-- @include('partials.survey-monkey') --}}
@stop()
{{--END Modal contents div--}} 

@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()
