@extends('template')
@section('meta')@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($course->url) ? $course->url : null , 
              'title' => $course->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@stop()
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 medium-grey-bg left-photo-map">
      @if(isset($course->image))
      <p><img src="{{ $course->image }}" class="img-rounded img-responsive"></p>
      @endif
      @if(isset($course->video))
        <div class="videoWrapper">
          {!!$course->video!!} 
        </div>
      @endif
      @if(isset($course->location->lat)&&isset($course->location->long))
          <div id="map"></div>
      @endif
      @if(isset($relatedItems))
          @include('partials.related-items', array('relatedItems' => $relatedItems)) 
      @endif
    </div>
    <div class="col-md-6 lighter-grey-bg ers-course-info">
      <div class="header">
        <div class="clearfix notification">
          @if(isset($course->flags))
          <p style="padding: 0 10px;" class="pull-right alert {{'alert-'.$course->flags['color'] }}">{{ $course->flags['text'] }}</p>
          @endif
          @if($course->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>{{$course->eventDates}} @if(isset($course->eventLocation))<a href="javascript:void(0)">{{$course->eventLocation}}</a>@endif</label>
        <!--<a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>{{$course->type}}</em></p>
          View <a href="/professional-development/courses">all ERS courses</a>
        </div>
        <div class="col-md-6 text-right">
          @if(isset($course->programmeFile))  
            <a href="{{$course->programmeFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme">
              <span class="icon s7-map" style="font-size: 24px;"></span>
              Course Programme
            </a>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$course->title}}</h2>
      @if(isset($course->organisers))
      <h5 class="ers-course-organisers"><b>Organisers :</b> {{$course->organisers}}</h5>
      @endif
      @if(isset($course->faculty))
      <h5 class="ers-course-organisers"><b>Faculty :</b> {{$course->faculty}}</h5>
      @endif
      @if(isset($course->disclosureFile))
      <h5><a href="{{$course->disclosureFile->fileUrl}}" >Faculty disclosure</a></b></h5>
      @endif

      <div class="article text-left">
        @if(isset($course->body)){!!$course->lead!!}@endif
        @if(isset($course->body)){!!$course->body!!}@endif
      </div>
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        @if(isset($course->venue))
          <li class="active"><a href="#venue" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
          </li>
        @endif
        @if(isset($course->bursaryApplication) && !empty($course->bursaryApplication))
          <li><a href="#bursary" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        @endif
        </ul>

        <div class="tab-content text-left">
          <div id="venue" class="tab-pane active cont">

            <div class="ers-scroller nano scrollable" style="height:350px;">
                <div class="nano-content">   
                @if(isset($course->practicalInfoFile))  
                  <a href="{{$course->practicalInfoFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-practicalInfo">
                    <span class="icon s7-info" style="font-size: 24px;"></span>
                    @if(isset($course->practicalInfoButton)){{$course->practicalInfoButton}}@else Practical Info @endif
                  </a>
                @endif
                <ul class="list-group">
                  @if(isset($course->technicalInfo))
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-technical-info" type="button" class=""><span class="s7-tools"></span>Technical Info</a></li>
                  @endif
                  @if(isset($course->venue))
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-venue_accommodation" type="button" class="">Venue</a></li>
                  @endif
                  @if(isset($course->suggestedAccommodation))
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-suggested_accommodation" type="button" class="">Suggested Accommodation</a></li>
                  @endif
                </ul>
                <hr>
                <div class="list-group">
                @if(isset($course->feeList->junior))
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg">
                    <span class="badge">
                      {{isset($course->feeList->junior) ? '&euro;' : ''}}
                      {{$course->feeList->junior or '-'}}
                    </span> Junior ERS Members
                  </a>
                @endif
                @if(isset($course->feeList->ersMember))
                  <a href="javascript:void(0)" class="list-group-item">
                    <span class="badge">
                      {{isset($course->feeList->ersMember) ? '&euro;' : ''}}
                      {{$course->feeList->ersMember or "-"}}
                    </span> ERS Members
                  </a>
                @endif 
                @if(isset($course->feeList->nonErsMember)) 
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg">
                    <span class="badge">
                      {{isset($course->feeList->nonErsMember) ? '&euro;' : ''}}
                      {{$course->feeList->nonErsMember or "-"}}
                    </span> Non-ERS Members
                  </a>
                @endif  
                @if(isset($course->feeList->industry))
                  <a href="javascript:void(0)" class="list-group-item">
                    <span class="badge">
                      {{isset($course->feeList->industry) ? '&euro;' : ''}}
                      {{$course->feeList->industry or "-"}}
                    </span> Industry
                  </a>
                @endif  
                </div>


              </div>
            </div>
            
            <div class="event-items-right-bt">
            @if(isset($course->extendedDeadline))
            <p class="deadline">EXTENDED registration deadline : {{$course->extendedDeadline}}</p>
            @endif
            @if(isset($course->cancellationPolicy))
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @endif
            @if(isset($course->travelInfo))
            <p><a data-toggle="modal" data-target="#md-travel_info" type="button" class="">Travel Info</a></p>
            @endif
            @if(isset($course->registerButton['link']) && !$course->fullyBooked)
              <a href="{{$course->registerButton['link']}}"" class="btn btn-primary tab-register-bt">Register</a>
            @endif
            @if($course->fullyBooked)
              <p>Please contact <a href="mailto:educaion@ersnet.org">education@ersnet.org</a> to be added to the waiting list.</p>
              <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            </div>

          </div>
          @if(isset($course->bursaryApplication))
          <div id="bursary" class="tab-pane cont">
                     @if(isset($course->bursaryApplication->text))
                     {!!$course->bursaryApplication->text!!}
                     @endif
                     <ul>
                     @if(isset($course->bursaryApplication->deadline))
                     <li>Bursaries application deadline:<b>{{$course->bursaryApplication->deadline}}</b></li>
                     @endif
                     @if(isset($course->bursaryApplication->results))
                     <li>Notification of selection results:<b>{{$course->bursaryApplication->results}}</b></li>
                     @endif
                     </ul>
                     @if(isset($course->bursaryApplication->url))
                      <a href="{{$course->bursaryApplication->url}}"" class="btn btn-primary tab-register-bt">Apply</a>
                     @endif
          </div>
          @endif
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

<!--Modal contents div-->
<!--Venue and accommodation-->
@if(isset($course->venue))
<div id="md-venue_accommodation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Course Venue</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            @if(isset($course->venue->url))
              <a target="_blank" href="{{$course->venue->url}}">
            @endif 
              @if(isset($course->venue->name)){{$course->venue->name}}@endif
            @if(isset($course->venue->url))
              </a>
            @endif
            <br/>
            @if(isset($course->venue->streetAddress))
            {{$course->venue->streetAddress}}<br>
            @endif
            @if(isset($course->venue->streetAddress2))
            {{$course->venue->streetAddress2}}<br>
            @endif
            @if(isset($course->venue->streetAddress)){{$course->venue->postalCode}}@endif
            @if(isset($course->venue->streetAddress)){{$course->venue->city}}@endif<br>
            @if(isset($course->venue->streetAddress)){{$course->venue->country}}@endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@if(isset($course->suggestedAccommodation))
<div id="md-suggested_accommodation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Suggested Accomodation</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
        @foreach ($course->suggestedAccommodation as $accommodation)
        <div class="row">
          <div class="col-md-12">
            <p>
              @if(isset($accommodation['url']))
                <a target="_blank" href="{{$accommodation['url']}}">
              @endif 
                {{$accommodation['name']}} 
              @if(isset($accommodation['url']))
                </a>
              @endif
              <br/>
              {{$accommodation['streetAddress']}}<br>
              @if(isset($accommodation['streetAddress2']))
              {{$accommodation['streetAddress2']}}<br>
              @endif
              @if(isset($accommodation['zip'])){{$accommodation['zip']}} {{$accommodation['city']}}<br>@endif
              @if(isset($accommodation['country'])){{$accommodation['country']}}@endif
              <hr>
              @if(isset($accommodation['info'])){!!$accommodation['info']!!}@endif
            </p>
          </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@if(isset($course->cancellationPolicy))
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
            {!! $course->cancellationPolicy !!}
           
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END Modal contents div-->
@endif
@if(isset($course->travelInfo))
<!--Cancellation policy-->
<div id="md-travel_info" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Travel Info</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            {!! $course->travelInfo !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END Modal contents div-->
@endif
@if(isset($course->technicalInfo))
<!--Cancellation policy-->
<div id="md-technical-info" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Travel Info</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            {!! $course->technicalInfo !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END Modal contents div-->
@endif

@stop()  

@section('scripts')
  @if(isset($course->location->lat)&&isset($course->location->long))
    <script>
    function initMap() {
      function initialize(){
        var myLatLng ={ lat: {{$course->location->lat}}, lng: {{$course->location->long}} };

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