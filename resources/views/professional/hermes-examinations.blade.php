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
      ]
  ))
@stop()

@section('content')
<div class="ers-content event-items-content  article-items">
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4 left-photo-map medium-grey-bg">
            @if($item->image)
            <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
            @endif
            @if($item->video)
              <div class="videoWrapper">
                {!!$item->video!!} 
              </div>
            @endif
            {{-- @if($item->loc->lat && $item->loc->long && $item->type != "ERS Online course")
                <div id="map"></div>
            @endif --}}
            @if(isset($relatedItems))
                @include('partials.related-items', array('relatedItems' => $relatedItems)) 
            @endif

          @foreach ($item->sponsors as $sponsor)
          <div class="course-sponsor text-left">
            @if($sponsor->text)
              <div class="course-sponsor-wrapper">
                @if($sponsor->image)
                  <div class="course-sponsor-image col-md-4 col-xs-4 pull-left">
                    <p style="background-image: url('{{ $sponsor->image }}'); background-repeat: no-repeat; background-size:100%; width: 100%; height: 100%; background-position: right center; background-size: contain;"></p>
                </div> 
                @endif
                @if($sponsor->text)
                  <div class="course-sponsor-right  col-md-8 col-xs-8 pull-right">
                    <h4 class="text-left">{{$sponsor->text}}</h4>
                  </div>
                @endif
              </div>
            @endif
          </div>
        @endforeach
        </div>

        <div class="col-md-8 lighter-grey-bg ers-course-info">
          <div class="header">
            <div class="clearfix notification">
              @if($item->flags->text)
              <p style="padding: 0 10px;margin-right:30px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
              @endif 
              @if($item->fullyBooked)
                  <p class="pull-right text-danger">Fully Booked</p>
              @endif
            </div>
            <h2 class="text-left clearfix date-venue">
              <a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>
            <label>{{$item->eventDates}} @if(isset($item->eventLocation))<a href="javascript:void(0)" class="cursor_default">{{$item->eventLocation}}</a>@endif</label>
              <a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a> 
            </h2> 
            <!-- Should be delete after coronavirus -->
            <div class="text-left"><br/>Information: <a href="/the-society/news/ers-statement-covid-19-and-upcoming-ers-events">ERS Statement on COVID-19 and upcoming ERS events</a></div>
            <!-- End Should be delete after coronavirus -->
          </div>

          <div class="row" style="margin-top:20px;">
              {{-- <div class="col-md-6 col-xs-6 text-left event-items-category">
              <p><em>{{$item->type}}</em></p>
              View <a href="/professional-development/courses">all ERS courses</a>
            </div> --}}
            <div class="col-md-6 col-xs-6 text-right">
              @if($item->programme)  
                <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme">
                  <span class="icon s7-map" style="font-size: 24px;"></span>
                    {{$item->programmeButtonText ? $item->programmeButtonText : 'Course Programme' }}
                </a>
              @endif
            </div>
          </div>
          <div class="page-head">
            <h2 class="article-title">{{$item->title}}</h2>
          </div>
          @if($item->organisers)
          <h5 class="ers-course-organisers"><b>Organisers :</b> {{$item->organisers}}</h5>
          @endif
          @if($item->faculty)
          <h5 class="ers-course-organisers"><b>Faculty :</b> {{$item->faculty}}</h5>
          @endif
          @if($item->disclosure)
          <h5><a href="{{$item->disclosure}}" target="_blank">Faculty disclosure</a></b></h5>
          @endif

          <div class="article text-left">
            @if($item->body){!!$item->lead!!}@endif
            @if($item->body){!!$item->body!!}@endif
          </div>
        </div>
      </div>
    </div>
   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">
    @if($item->title == "ERS HERMES examination in adult respiratory medicine" 
    || $item->title == "ERS HERMES examination in paediatric respiratory medicine"
    || strpos($item->title, "self-assessment"))
    <div class="alert alert-info">
    <div class="message">REGISTRATION DEADLINE<br> {{ $item->deadline}}.</div>
    </div>
    
    <div class="list-group text-left">
      {{-- <a href="javascript:void(0)" class="list-group-item clearfix cursor_default">
        <span class="icon s7-alarm"></span>
        <p>
          REGISTRATION DEADLINE : <br>
          <span>{{$item->deadline}}</span>
        </p>
      </a> --}}
        {{-- <a href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
       <span class="icon s7-bell"></span>
       <p>
        NOTIFICATION : <br>
        <span>Mid-May each year</span>
      </p>
    </a>--}}
    <a href="javascript:void(0)" class="list-group-item clearfix cursor_default">
      <span class="icon s7-date"></span>
      <p>
        EXAM DATE : <br>
        <span>{{ $item->eventDates }}</span>
      </p>
    </a>
    <span href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
        <span class="icon s7-culture"></span>
        <p>
          EXAM LOCATION : <br>
            @if($item->venue->url)
              <a target="_blank" href="{{$item->venue->url}}">
            @endif 
              @if($item->venue->name){{$item->venue->name}}@endif
            @if($item->venue->url)
              </a>
            @endif
            <br/>
            @if($item->venue->phoneNumber)
              Phone: {{$item->venue->phoneNumber}}<br>
            @endif
            @if($item->venue->streetAddress)
              {{$item->venue->streetAddress}}<br>
            @endif
            @if($item->venue->streetAddress2)
              {{$item->venue->streetAddress2}}<br>
            @endif
            @if($item->venue->streetAddress3)
              {{$item->venue->streetAddress3}}<br>
            @endif
            @if($item->venue->postalCode){{$item->venue->postalCode}}@endif
            @if($item->venue->city){{$item->venue->city}}@endif<br>
            @if($item->venue->country){{$item->venue->country}}@endif
            <hr>
            @if($item->venue->info){!!$item->venue->info!!}@endif
          </p>
        </span> 
      @if($item->title == "ERS HERMES examination in adult respiratory medicine" 
        || $item->title == "ERS HERMES examination in paediatric respiratory medicine" 
      )
      <span href="javascript:void(0)" class="list-group-item clearfix cursor_default">
      <span class="icon s7-copy-file"></span>
      <p>
        DOCUMENTS : <br>
        <ul style="display: table;
                  float: left;
                  margin-left: 10px;">
          <li>
              <a href="{{ 
                $item->title == 'ERS HERMES examination in adult respiratory medicine' 
                ? 'https://ers.box.com/s/j3sp41ovw4i5vw7g3upqbx107ijipzk4' 
                : 'https://ers.box.com/s/qr7ocr68keve6o8s1dwj27hci4e0x4qn' 
              }}" target="blank">
                Preparation Guidebook
              </a>
          </li>
          <li>
            @if($item->title == "ERS HERMES examination in adult respiratory medicine" )
              <a href="https://ers.box.com/s/ksty63r3k1jiu1rptifmax70vxlurpt6" target="blank">Terms and Conditions</a>
            @endif
            @if($item->title == "ERS HERMES examination in paediatric respiratory medicine" )
              <a href="https://ers.box.com/s/ec61l8wzp32zbq1efxz4dcrn393cy3uh" target="blank">Terms and Conditions</a>
            @endif
          </li>
        </ul>
      </p>
    </span> 
    @endif
  </div>
    <p class="rules text-left">
    <span style="font-size:16px;vertical-align: middle;" class="icon s7-mail"></span> For more information, contact {!! Html::mailto('hermes@ersnet.org', ' hermes@ersnet.org') !!}
  </p>
  <div class="event-items-right-bt">
  @if($item->extendedDeadline)
  <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
  @endif
  @if($item->cancellationPolicy)
  <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="cursor_pointer">Cancellation policy</a></p>
  @endif
  @if($item->travelInfo)
  <p><a data-toggle="modal" data-target="#md-travel_info" type="button" class="cursor_pointer">Travel Info</a></p>
  @endif
  @if($item->registerButton->link && !$item->fullyBooked)
  <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt ga-event-registration">
      {{ $item->registerButton->text or Register}}
  </a>
  @endif
  @if($item->fullyBooked)
    <p>Contact {!! Html::mailto('hermes@ersnet.org', 'hermes@ersnet.org') !!} to be added to the waiting list.</p>
    <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
  @endif
  </div>
  @endif
</div>

{{-- END Right Side-bar --}}
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
@stop()
{{--END Modal contents div--}} 

@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()
