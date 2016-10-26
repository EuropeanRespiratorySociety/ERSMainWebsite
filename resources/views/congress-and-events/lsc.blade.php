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
        'url' => isset($item->url) ? $item->url : null ,
        'name' => $item->title,
        'startDate' => isset($item->startDate) ? $item->startDate : null,
        'endDate' => isset($item->endDate) ? $item->endDate : null,
        'performer' => isset($item->organisers) ? $item->organisers : null,
        'offers' => isset($item->feeList->ersMember) ? 'ERS Members: €' . $item->feeList->ersMember  : null,
        'image' => isset($item->image) ? $item->image : null,
        'description' => isset($item->lead) ? $item->lead : null,
        'venueName' => isset($item->venue->name) ? $item->venue->name : null,
        'venueAddress' => isset($item->venue->streetAddress) ? $item->venue->streetAddress : null,
        'venueAddress2' => isset($item->venue->streetAddress2) ? $item->venue->streetAddress2 : null,
        'venuePostalCode' => isset($item->venue->postalCode) ? $item->venue->postalCode : null,
        'venueCity' => isset($item->venue->city) ? $item->venue->city : null,
        'venueCountry' => isset($item->venue->country) ? $item->venue->country : null
      ]
  ))
@stop()
@section('content')
<div class="ers-content event-items-content lsc-content">
  <div class="row">
    <div class="col-md-3 medium-grey-bg left-photo-map">
    @if($item->image)
    <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
    @endif
    @if($item->loc->lat && $item->loc->long)
          <div id="map"></div>
      @endif
    @if(isset($relatedItems))
      @include('partials.related-items', array('relatedItems' => $relatedItems)) 
    @endif
    </div>
    <div class="col-md-6 lighter-grey-bg">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags && $item->flags->color !== 'info')
          <p class="pull-right {{$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>{{$item->eventDates}} <a href="javascript:void(0)">{{$item->eventLocation}}</a></label>
        <!--<a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>@if($item->type){{$item->type}}@endif</em></p>
        </div>
        <div class="col-md-6 text-right">
          @if($item->programme)  
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
              @if($item->programmeButtonText)
                {{$item->programmeButtonText}} 
              @else
                Conference Programme 
              @endif
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
      <h5><b>Organisers :</b> {{$item->organisers}}</h5>
      @endif
      @if($item->faculty)
      <h5><b>Organising Committee :</b> {{$item->faculty}}</h5>
      @endif

      <div class="article text-left">
        @if($item->lead){!!$item->lead!!}@endif
        @if($item->body){!!$item->body!!}@endif
      </div>
      @if($item->sponsors)
      <div class="sponsor">
      <hr>
      @if($item->sponsors->image)
        <img src="{{$item->sponsors->image}}">
      @endif
      @if($item->sponsors->text)
        <p>{{$item->sponsors->text}}</p>
      @endif  
      </div>
      @endif
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        @if($item->venue)
          <li class="active"><a href="#venue" data-toggle="tab">
            <span class="icon icon-hotel"></span>Registration and<br>accommodation</a>
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
            
            <div class="">
              <div class="">
                
                @if($item->practicalInfo)
                  <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map"></span>
                    Practical Info
                  </a>
                @endif
                <ul class="list-group">
                  @if($item->mentorship->text)
                    <li class="list-group-item">
                      <a href="#md-mentor" type="button" data-toggle="modal" data-target="#md-mentor">
                        <span class="icon s7-users"></span>Mentorship programme
                      </a>
                    </li>
                  @endif
                  @if($item->abstracts)
                    <li class="list-group-item">
                      <a href="#md-abstracts" data-toggle="modal" data-target="#md-abstracts">
                        <span class="icon s7-file"></span>Abstracts and bursaries
                      </a>
                    </li>
                  @endif
                </ul>

                @if($item->venue->name ||
                    $item->venue->url ||
                    $item->venue->phoneNumber ||
                    $item->venue->streetAddress ||
                    $item->venue->streetAddress2 ||
                    $item->venue->streetAddress3 ||
                    $item->venue->postalCode ||
                    $item->venue->city ||
                    $item->venue->info )
                        <h4 class="modal-title">Conference Venue</h4>
                        <div class="text-left">
                          <p>
                            @if($item->venue->url)
                              <a target="_blank" href="{{$item->venue->url}}">
                            @endif 
                            @if($item->venue->name)
                              {{$item->venue->name}} 
                            @endif  
                            @if($item->venue->url)
                              </a>
                            @endif
                            <br/>
                            @if($item->venue->streetAddress)
                            {{$item->venue->streetAddress}}<br>
                            @endif
                            @if($item->venue->streetAddress2)
                            {{$item->venue->streetAddress2}}<br>
                            @endif
                            @if($item->venue->streetAddress3)
                            {{$item->venue->streetAddress3}}<br>
                            @endif
                            @if($item->venue->postalCode)
                            {{$item->venue->postalCode}}@endif @if($item->venue->city){{$item->venue->city}}@endif<br>
                            @if($item->venue->country){{$item->venue->country}}@endif
                            @if($item->venue->info)
                              {!!$item->venue->info!!}
                            @endif
                          </p>
                        </div>
                @endif
                {{-- 
                <div class="list-group">
                  <a href="#" class="list-group-item medium-grey-bg">
                    <span class="badge">
                      {{isset($item->feeList->junior) ? '&euro;' : ''}}
                      {{$item->feeList->junior or '-'}}
                    </span> Junior ERS Members
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">
                      {{isset($item->feeList->ersMember) ? '&euro;' : ''}}
                      {{$item->feeList->ersMember or "-"}}
                    </span> ERS Members
                  </a>
                  <a href="#" class="list-group-item medium-grey-bg">
                    <span class="badge">
                      {{isset($item->feeList->nonErsMember) ? '&euro;' : ''}}
                      {{$item->feeList->nonErsMember or "-"}}
                    </span> Non-ERS Members
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">
                      {{isset($item->feeList->industry) ? '&euro;' : ''}}
                      {{$item->feeList->industry or "-"}}
                    </span> Industry
                  </a>
                </div>
                --}}

              </div>
            </div>
            
            <div class="event-items-right-bt">
            <p>Any questions? Please contact {!! Html::mailto('scientific@ersnet.org', 'scientific@ersnet.org') !!}</p>
            @if($item->extendedDeadline)
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            @endif
            @if($item->cancellationPolicy)
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @endif
            @if($item->registerButton->link && !$item->fullyBooked)
              <a href="{{$item->registerButton->link}}" class="btn btn-primary tab-register-bt">Register</a>
            @endif
            @if($item->fullyBooked)
              <p>Please contact {!! Html::mailto('educaion@ersnet.org', 'education@ersnet.org') !!} to be added to the waiting list.</p>
              <a href="#" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            @if($item->openingDate && !$item->registerButton->link)
              <p class="text-danger">The registration will open on {{$item->openingDate}}</p>
              <a href="#" class="btn btn-primary disabled tab-register-bt">Register</a>
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
                        <li>Bursaries application deadline: <b>{{$item->bursaryApplication->deadline}}</b></li>
                       @endif
                       @if($item->bursaryApplication->notificationOfResults)
                        <li>Notification of selection results: <b>{{$item->bursaryApplication->notificationOfResults}}</b></li>
                       @endif
                    </ul>
                     @if($item->bursaryApplication->applyButtonUrl)
                        <a href="{{$item->bursaryApplication->applyButtonUrl}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
          </div>
          @endif
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

{{--Modal contents div--}}
@include('elements.modal.cancellation', array('item' => $item)) 

@if($item->mentorship)
{{-- Mentors --}}
<div id="md-mentor" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Mentorship programme</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
                    @if($item->mentorship->text)
                     {!!$item->mentorship->text!!}
                     @endif
                       <ul>
                       @if($item->mentorship->deadline)
                        <li>Bursaries application deadline: <b>{{$item->mentorship->deadline}}</b></li>
                       @endif
                       @if($item->mentorship->notificationOfResults)
                        <li>Notification of selection results: <b>{{$item->mentorship->notificationOfResults}}</b></li>
                       @endif
                     </ul>
                     @if($item->mentorship->applyButtonUrl)
                      <a href="{{$item->mentorship->applyButtonUrl}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
        </div>
      </div>
    </div>
  </div>
</div>
{{-- END Mentors --}}
@endif
@if($item->abstracts)
{{-- Abstracts --}}
<div id="md-abstracts" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Abstract and Bursary</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
                    @if($item->abstracts->text)
                     {!!$item->abstracts->text!!}
                     @endif
                     <ul>
                       @if($item->abstracts->deadline)
                        <li>Bursaries application deadline: <b>{{$item->abstracts->deadline}}</b></li>
                       @endif
                       @if($item->abstracts->notificationOfResults)
                        <li>Notification of selection results: <b>{{$item->abstracts->notificationOfResults}}</b></li>
                       @endif
                     </ul>
                     @if($item->abstracts->applyButtonUrl)
                      <a href="{{$item->abstracts->applyButtonUrl}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
        </div>
      </div>
    </div>
  </div>
</div>
{{-- END Abstracts --}}
@endif
{{--END Modal contents div--}}

@stop()  

@section('scripts')
@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()