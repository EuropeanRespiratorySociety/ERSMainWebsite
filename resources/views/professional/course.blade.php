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

@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 left-photo-map">
      <div class="medium-grey-bg">
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
      </div>
      <div class="row" style="background-color: #fff; padding:20px 0; ">
        @if($item->sponsors->text)
          <!-- @if($item->image)
            <hr>
          @endif -->
          @if($item->sponsors->image)
          <div class="col-md-4 col-xs-4 pull-left" style="padding-left: 30px;">
              <p><img src="{{ $item->sponsors->image }}" class="img-rounded" style="width:120px;"></p>
          </div>
          @endif

          @if($item->sponsors->text)
          <div class="col-md-8 col-xs-8 pull-right" style="padding: 0 10px;">
            <h4 class="text-left" style="display: flex; align-items: center;height: 100%;">{{$item->sponsors->text}}</h4>
          </div>
          @endif
        @endif
      </div>
    </div>
    <div class="col-md-6 lighter-grey-bg ers-course-info">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags->text)
          <p style="padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>{{$item->eventDates}} @if(isset($item->eventLocation))<a href="javascript:void(0)" class="cursor_default">{{$item->eventLocation}}</a>@endif</label>
        <!--<a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-6 col-xs-6 text-left event-items-category">
          <p><em>{{$item->type}}</em></p>
          View <a href="/professional-development/courses">all ERS courses</a>
        </div>
        <div class="col-md-6 col-xs-6 text-right">
          @if($item->programme)  
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme">
              <span class="icon s7-map" style="font-size: 24px;"></span>
                {{$item->programmeButtonText ? $item->programmeButtonText : 'Course Programme' }}
            </a>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if($item->organisers)
      <h5 class="ers-course-organisers"><b>Organisers :</b> {{$item->organisers}}</h5>
      @endif
      @if($item->faculty)
      <h5 class="ers-course-organisers"><b>Faculty :</b> {{$item->faculty}}</h5>
      @endif
      @if($item->disclosure)
      <h5><a href="{{$item->disclosure}}" >Faculty disclosure</a></b></h5>
      @endif

      <div class="article text-left">
        @if($item->body){!!$item->lead!!}@endif
        @if($item->body){!!$item->body!!}@endif
      </div>
    </div>
    {{-- Beginning Right Side-bar --}}
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        @if($item->venue->name ||
            $item->venue->url ||
            $item->venue->phoneNumber ||
            $item->venue->streetAddress ||
            $item->venue->streetAddress2 ||
            $item->venue->streetAddress3 ||
            $item->venue->postalCode ||
            $item->venue->city ||
            $item->venue->info )
          <li class="active"><a href="#venue" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
          </li>
        @endif
        @if($item->bursaryApplication->text
            || $item->bursaryApplication->deadline
            || $item->bursaryApplication->notificationOfResults
            || $item->bursaryApplication->applyButtonUrl)
          <li><a href="#bursary" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        @endif
        </ul>

        <div class="tab-content text-left">
          <div id="venue" class="tab-pane active cont">

            <div class="ers-scroller nano scrollable" style="height:350px;">
                <div class="nano-content">
                @if($item->practicalInfo)  
                  <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-practicalInfo">
                    <span class="icon s7-info" style="font-size: 24px;"></span>
                    {{$item->practicalInfoButton ? $item->practicalInfoButton : 'Practical Info'}}
                  </a>
                @endif
                <ul class="list-group">
                  @if($item->technicalInfo)
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-technical-info" type="button" class=""><span class="s7-tools"></span>Technical Info</a></li>
                  @endif        
                  @if($item->venue->name ||
                      $item->venue->url ||
                      $item->venue->phoneNumber ||
                      $item->venue->streetAddress ||
                      $item->venue->streetAddress2 ||
                      $item->venue->streetAddress3 ||
                      $item->venue->postalCode ||
                      $item->venue->city ||
                      $item->venue->info )
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-venue_accommodation" type="button" class="cursor_pointer">Venue</a></li>
                  @endif
                  @if($item->suggestedAccommodation[0]->name || $item->suggestedAccommodation[0]->streetAddress)
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-venues" type="button" class="cursor_pointer">Suggested Accommodation</a></li>
                  @endif
                </ul>
                <hr>
                <div class="list-group">
                @if($item->feeList->junior)
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge">
                      &euro; {{ $item->feeList->junior }}
                    </span> Junior ERS Members
                  </a>
                @endif
                @if($item->feeList->ersMember)
                  <a href="javascript:void(0)" class="list-group-item cursor_default">
                    <span class="badge">
                      &euro; {{ $item->feeList->ersMember}}
                    </span> ERS Members
                  </a>
                @endif 
                @if($item->feeList->nonErsMember)
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge">
                      &euro; {{ $item->feeList->nonErsMember }}
                    </span> Non-ERS Members
                  </a>
                @endif  
                @if($item->feeList->industry)
                  <a href="javascript:void(0)" class="list-group-item cursor_default">
                    <span class="badge">
                      &euro; {{ $item->feeList->industry }}
                    </span> Industry <br>(ERS Members & non-Members)
                  </a>
                @endif  
                </div>


              </div>
            </div>
            
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
            <p>Registering for someone else ? Contact {!! Html::mailto('felix.yip@ersnet.org', 'Felix Yip') !!}</p>
            <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                {{ $item->registerButton->text or Register}}
            </a>
            @endif
            @if($item->fullyBooked)
              <p>Contact {!! Html::mailto('education@ersnet.org', 'education@ersnet.org') !!} to be added to the waiting list.</p>
              <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            </div>

          </div>

          @if($item->bursaryApplication->text
            || $item->bursaryApplication->deadline
            || $item->bursaryApplication->notificationOfResults
            || $item->bursaryApplication->applyButtonUrl)
          <div id="bursary" class="tab-pane cont">
                     @if($item->bursaryApplication->text)
                      {!!$item->bursaryApplication->text!!}
                     @endif
                     <ul>
                     @if($item->bursaryApplication->deadline)
                     <li>Bursaries application deadline:<b>{{$item->bursaryApplication->deadline}}</b></li>
                     @endif
                     @if($item->bursaryApplication->notificationOfResults)
                     <li>Notification of selection results:<b>{{$item->bursaryApplication->notificationOfResults}}</b></li>
                     @endif
                     </ul>
                     @if($item->bursaryApplication->applyButtonUrl)
                      <a href="{{$item->bursaryApplication->applyButtonUrl}}" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
          </div>
          @endif
          <div id="messages" class="tab-pane"> </div>
        </div>
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
@stop()
{{--END Modal contents div--}} 

@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()
