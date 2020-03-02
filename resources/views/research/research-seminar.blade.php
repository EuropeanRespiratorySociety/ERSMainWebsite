@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => $item->url ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('structured-data')
  @include('partials.event-structured-data', array('item' => 
      [
        'url' => $item->url ? $item->url : null ,
        'name' => $item->title,
        'startDate' => $item->startDate ? $item->startDate : null,
        'endDate' => $item->endDate ? $item->endDate : null,
        'performer' => $item->organisers ? $item->organisers : null,
        'image' => $item->image ? $item->image : null,
        'description' => $item->shortLead ? $item->lead : null,
        'location' => $item->eventLocation ?? null,
        'venueName' => $item->venue->name ? $item->venue->name : null,
        'venueAddress' => $item->venue->streetAddress ? $item->venue->streetAddress : null,
        'venueAddress2' => $item->venue->streetAddress2 ? $item->venue->streetAddress2 : null,
        'venuePostalCode' => $item->venue->postalCode ? $item->venue->postalCode : null,
        'venueCity' => $item->venue->city ? $item->venue->city : null,
        'venueCountry' => $item->venue->country ? $item->venue->country : null
      ]
  ))
@stop()
@section('content')

<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 medium-grey-bg left-photo-map">
    @if($item->image)
    <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
    @endif
      @if(isset($relatedItems))
        @include('partials.related-items', array('relatedItems' => $relatedItems)) 
      @endif
    </div>
    <div class="col-md-6 lighter-grey-bg ers-research-seminar-info">
      <div class="header">
        <div class="clearfix notification">
          @if($item->feeList->liveStreaming === 0 || $item->feeList->liveStreamingNonErs === 0)
            <p style="text-align:left;color:#d0043c;">
              <i style="font-size:26px;font-weight:bold;position:relative;top:5px;" class="s7-video"></i>
              <span>Live streaming will be available</span>
            </p>
          @endif
          @if($item->flags->text && $item->flags->color !== 'info')
          <p class="pull-right {{$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>@if($item->eventDates){{$item->eventDates}}@endif @if($item->eventLocation){{$item->eventLocation}} @endif</label>
        <!--<a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
        <div class="text-left"><br/>Information: <a href="/the-society/news/ers-statement-covid-19-and-upcoming-ers-events">ERS Statement on COVID-19 and upcoming ERS events</a></div>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>@if($item->type){{$item->type}}@endif</em></p>
          View <a href="/research/research-seminars">all Research Seminars</a>
        </div>
        <div class="col-md-6 text-right">
          @if($item->programme)
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
              Seminar Programme
            </a>
          @endif
          @if($item->programmeNotice)
          <p class="text-danger">{{$item->programmeNotice}}</p>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if($item->subTitle)<h4 class="article-title">{{$item->subTitle}}</h4>@endif
      @if($item->organisers)
      <h5 class="ers-course-organisers"><b>Organisers :</b> {{$item->organisers}}</h5>
      @endif
      @if($item->faculty)
      <h5 class="ers-course-organisers"><b>Faculty :</b> {{$item->faculty}}</h5>
      @endif
      <div class="article text-left">
                    @if($item->lead){!!$item->lead!!}@endif
            @if($item->body){!!$item->body!!}@endif
      </div>

    </div>


    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        </ul>

        <div class="tab-content text-left">
          <div id="venue" class="tab-pane active cont">
            
            <div class="">
              <div class="">
                @if($item->flags->text && $item->flags->color == 'info')
                  <div role="alert" class="alert alert-{{$item->flags->color }}">
                    {{ $item->flags->text }}
                  </div>
                @endif    
                @if($item->practicalInfo)  
                  <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    Practical Info
                  </a>
                @endif
                <p>Any questions? Please contact{!! Html::mailto('scientific@ersnet.org', 'scientific@ersnet.org') !!}</p>

                @if($item->registerButton->link)
                <a href="{{$item->registerButton->link}}" target="_blank" class="btn btn-primary item-register-bt">{{$item->registerButton->text}}</a>
                @endif
              </div>
            </div>
            @if($item->sponsors[0]->text || $item->sponsors[0]->image)
              <div class="sponsor">
              <hr>
                @if($item->sponsors[0]->image)
                 <p><img src="{{ $item->sponsors[0]->image }}" class="img-rounded img-responsive" style="width:200px;"></p>
                @endif
                @if($item->sponsors[0]->text)
                  <p>{{$item->sponsors[0]->text}}</p>
                @endif  
              </div>
          @endif

          </div>
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
    {{-- End Right Sidebar --}}
  </div>
</div>

@stop()  

@section('modals')
  {{--Modal contents div--}}

  {{--END Modal contents div--}}
@stop()

@section('scripts')
    
@stop()