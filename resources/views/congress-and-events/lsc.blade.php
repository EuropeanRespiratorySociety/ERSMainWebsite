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
    @if(isset($item->image))
    <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
    @endif
    @if(isset($item->location->lat)&&isset($item->location->long))
          <div id="map"></div>
      @endif
    @if(isset($relatedItems))
      @include('partials.related-items', array('relatedItems' => $relatedItems)) 
    @endif
    </div>
    <div class="col-md-6 lighter-grey-bg">
      <div class="header">
        <div class="clearfix notification">
          @if(isset($item->flags) && $item->flags['color'] !== 'info')
          <p class="pull-right {{$item->flags['color'] }}">{{ $item->flags['text'] }}</p>
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
          <p><em>@if(isset($item->type)){{$item->type}}@endif</em></p>
        </div>
        <div class="col-md-6 text-right">
          @if(isset($item->programmeFile))  
            <a href="{{$item->programmeFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
              @if(isset($item->programmeButtonText)) 
                {{$item->programmeButtonText}} 
              @else
                Conference Programme 
              @endif
            </a>
          @endif
          @if(isset($item->programmeNotice))
          <p class="text-danger">{{$item->programmeNotice}}</p>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if(isset($item->subtitle))<h4 class="article-title">{{$item->subtitle}}</h4>@endif
      @if(isset($item->organisers))
      <h5><b>Organisers :</b> {{$item->organisers}}</h5>
      @endif
      @if(isset($item->faculty))
      <h5><b>Organising Committee :</b> {{$item->faculty}}</h5>
      @endif

      <div class="article text-left">
        @if(isset($item->lead)){!!$item->lead!!}@endif
        @if(isset($item->body)){!!$item->body!!}@endif
      </div>
      @if(isset($item->sponsors))
      <div class="sponsor">
      <hr>
      @if(isset($item->sponsors['image']))
        <img src="{{$item->sponsors['image']}}">
      @endif
      @if(isset($item->sponsors['text']))
        <p>{{$item->sponsors['text']}}</p>
      @endif  
      </div>
      @endif
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        @if(isset($item->venue))
          <li class="active"><a href="#venue" data-toggle="tab">
            <span class="icon icon-hotel"></span>Registration and<br>accomodation</a>
          </li>
        @endif
        @if(isset($item->bursaryApplication) && !empty($item->bursaryApplication))
          <li><a href="#bursary" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        @endif
        </ul>

        <div class="tab-content text-left">
          <div id="venue" class="tab-pane active cont">
            
            <div class="">
              <div class="">
                
                @if(isset($item->practicalInfoFile))  
                  <a href="{{$item->practicalInfoFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map"></span>
                    Practical Info
                  </a>
                @endif
                <ul class="list-group">
                  @if(isset($item->mentorship->text))
                    <li class="list-group-item">
                      <a href="#md-mentor" type="button" data-toggle="modal" data-target="#md-mentor">
                        <span class="icon s7-users"></span>Mentorship programme
                      </a>
                    </li>
                  @endif
                  @if(isset($item->abstracts))
                    <li class="list-group-item">
                      <a href="#md-abstracts" data-toggle="modal" data-target="#md-abstracts">
                        <span class="icon s7-file"></span>Abstracts and bursaries
                      </a>
                    </li>
                  @endif
                </ul>

                @if(isset($item->venue))
                        <h4 class="modal-title">Conference Venue</h4>
                        <div class="text-left">
                          <p>
                            @if(isset($item->venue->url))
                              <a target="_blank" href="{{$item->venue->url}}">
                            @endif 
                            @if(isset($item->venue->name))
                              {{$item->venue->name}} 
                            @endif  
                            @if(isset($item->venue->url))
                              </a>
                            @endif
                            <br/>
                            @if(isset($item->venue->streetAddress))
                            {{$item->venue->streetAddress}}<br>
                            @endif
                            @if(isset($item->venue->streetAddress2))
                            {{$item->venue->streetAddress2}}<br>
                            @endif
                            @if(isset($item->venue->postalCode))
                            {{$item->venue->postalCode}}@endif @if(isset($item->venue->city)){{$item->venue->city}}@endif<br>
                            @if(isset($item->venue->country)){{$item->venue->country}}@endif
                            @if(isset($item->venue->info))
                              {!!$item->venue->info!!}
                            @endif
                          </p>
                        </div>
                @endif
                <!--
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
                -->

              </div>
            </div>
            
            <div class="event-items-right-bt">
            <p>Any questions? Please contact<a href="mailto:scientific@ersnet.org"> scientific@ersnet.org</a></p>
            @if(isset($item->extendedDeadline))
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            @endif
            @if(isset($item->cancellationPolicy))
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @endif
            @if(isset($item->registerButton['link']) && !$item->fullyBooked)
              <a href="{{$item->registerButton['link']}}"" class="btn btn-primary tab-register-bt">Register</a>
            @endif
            @if($item->fullyBooked)
              <p>Please contact <a href="mailto:educaion@ersnet.org">education@ersnet.org</a> to be added to the waiting list.</p>
              <a href="#" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            @if($item->openingDate)
              <p class="text-danger">The registration will open on {{$item->openingDate}}</p>
              <a href="#" class="btn btn-primary disabled tab-register-bt">Register</a>
            @endif
            </div>

          </div>
          @if(isset($item->bursaryApplication))
          <div id="bursary" class="tab-pane cont">
                     @if(isset($item->bursaryApplication->text))
                     {!!$item->bursaryApplication->text!!}
                     @endif
                     <ul>
                     @if(isset($item->bursaryApplication->deadline))
                     <li>Bursaries application deadline: <b>{{$item->bursaryApplication->deadline}}</b></li>
                     @endif
                     @if(isset($item->bursaryApplication->results))
                     <li>Notification of selection results: <b>{{$item->bursaryApplication->results}}</b></li>
                     @endif
                     </ul>
                     @if(isset($item->bursaryApplication->url))
                      <a href="{{$item->bursaryApplication->url}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
          </div>
          @endif
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

<!-- Modal windows -->
@if(isset($item->cancellationPolicy))
<!--Cancellation policy-->
<div id="md-cancellation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Cancellation policy</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            {!! $item->cancellationPolicy !!}
           
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@if(isset($item->mentorship))
<!-- Mentors -->
<div id="md-mentor" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Mentorship programme</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
                    @if(isset($item->mentorship->text))
                     {!!$item->mentorship->text!!}
                     @endif
                     <ul>
                     @if(isset($item->mentorship->deadline))
                     <li>Bursaries application deadline: <b>{{$item->mentorship->deadline}}</b></li>
                     @endif
                     @if(isset($item->mentorship->results))
                     <li>Notification of selection results: <b>{{$item->mentorship->results}}</b></li>
                     @endif
                     </ul>
                     @if(isset($item->mentorship->url))
                      <a href="{{$item->mentorship->url}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Mentors -->
@endif
@if(isset($item->abstracts))
<!-- Abstracts -->
<div id="md-abstracts" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Abstract and Bursary</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
                    @if(isset($item->abstracts->text))
                     {!!$item->abstracts->text!!}
                     @endif
                     <ul>
                     @if(isset($item->abstracts->deadline))
                     <li>Bursaries application deadline: <b>{{$item->abstracts->deadline}}</b></li>
                     @endif
                     @if(isset($item->abstracts->results))
                     <li>Notification of selection results: <b>{{$item->abstracts->results}}</b></li>
                     @endif
                     </ul>
                     @if(isset($item->abstracts->url))
                      <a href="{{$item->abstracts->url}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Abstracts -->
@endif
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