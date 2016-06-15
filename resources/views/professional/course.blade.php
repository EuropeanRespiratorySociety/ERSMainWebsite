@extends('template')
@section('content')<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 midium-grey-bg left-photo-map">
    @if(isset($course->image))
    <p><img src="{{ $course->image }}" class="img-rounded img-responsive"></p>
    @endif
    </div>
    <div class="col-md-6 lighter-grey-bg">
      <div class="header">
        <div class="clearfix notification">
          @if(isset($course->flags))
          <p class="pull-right {{$course->flags['color'] }}">{{ $course->flags['text'] }}</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>{{$course->eventDates}} <a href="">{{$course->eventLocation}}</a></label>
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
            <a href="{{$course->programmeFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
              Course Programme
            </a>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$course->title}}</h2>
      @if(isset($course->organisers))
      <h5>Organisers : {{$course->organisers}}</a></h5>
      @endif

      <div class="article text-left">
        {!!$course->lead!!}
        {!!$course->body!!}
      </div>
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        @if(isset($course->venue))
          <li class="active"><a href="#home" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
          </li>
        @endif
        @if(isset($course->bursaryApplication))
          <li><a href="#profile" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        @endif
        </ul>

        <div class="tab-content text-left">
          <div id="home" class="tab-pane active cont">
            
            <div class="ers-scroller nano scrollable has-scrollbar" style="height:200px;">
              <div class="nano-content">
                
                @if(isset($course->practicalInfoFile))  
                  <a href="{{$course->practicalInfoFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    Practical Info
                  </a>
                @endif
                @if(isset($course->venue))
                <p><a data-toggle="modal" data-target="#md-venue_accommodation" type="button" class="">Venue</a></p>
                @endif
                @if(isset($course->suggestedAccommodation))
                <p><a data-toggle="modal" data-target="#md-suggested_accommodation" type="button" class="">Suggested Accommodation</a></p>
                @endif

                <div class="list-group">
                  <a href="#" class="list-group-item midium-grey-bg">
                    <span class="badge">
                      {{isset($course->feeList->junior) ? '&euro;' : ''}}
                      {{$course->feeList->junior or '-'}}
                    </span> Junior ERS Members
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">
                      {{isset($course->feeList->ersMember) ? '&euro;' : ''}}
                      {{$course->feeList->ersMember or "-"}}
                    </span> ERS Members
                  </a>
                  <a href="#" class="list-group-item midium-grey-bg">
                    <span class="badge">
                      {{isset($course->feeList->nonErsMember) ? '&euro;' : ''}}
                      {{$course->feeList->nonErsMember or "-"}}
                    </span> Non-ERS Members
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">
                      {{isset($course->feeList->industry) ? '&euro;' : ''}}
                      {{$course->feeList->industry or "-"}}
                    </span> Industry
                  </a>
                </div>


              </div>
            </div>
            
            @if(isset($course->extendedDeadline))
            <p class="deadline">EXTENDED registration deadline : {{$course->extendedDeadline}}</p>
            @endif
            @if(isset($course->cancellationPolicy))
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @endif
            @if(isset($course->registerButton['link']))
              <a href="{{$course->registerButton['link']}}"" class="btn btn-primary tab-register-bt">Register</a>
            @endif
            
          </div>
          <div id="profile" class="tab-pane cont">
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
              {{$course->venue->name}} 
            @if(isset($course->venue->url))
              </a>
            @endif
            <br/>
            {{$course->venue->streetAddress}}<br>
            @if(isset($course->venue->streetAddress2))
            {{$course->venue->streetAddress2}}<br>
            @endif
            {{$course->venue->postalCode}} {{$course->venue->city}}<br>
            {{$course->venue->country}}
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
          <div class="col-md-6">
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
              {{$accommodation['zip']}} {{$accommodation['city']}}<br>
              {{$accommodation['country']}}
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

@stop()  

@section('scripts')
    
@stop()