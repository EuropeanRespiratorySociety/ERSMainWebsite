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
          
          <button type="button" class="btn btn-light-primary text-left">
            <span class="icon s7-map" style="font-size: 24px;"></span>
            Course Programme
           
          </button>
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
          <li class="active"><a href="#home" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
          </li>
          <li><a href="#profile" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        </ul>
        <div class="tab-content text-left">
          <div id="home" class="tab-pane active cont">
            
            <div class="ers-scroller nano scrollable has-scrollbar" style="height:200px;">
              <div class="nano-content">
                
                <button  type="button" class="btn btn-light-primary pratical-info">
                  <span class="icon s7-info" style="font-size: 24px;"></span>
                  Pratical information
                </button>

                <p><a data-toggle="modal" data-target="#md-venue_accmmodation" type="button" class="">VENUE AND ACCOMMODATION</a></p>

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
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @if(isset($course->registerButton['link']))
              <a href="{{$course->registerButton['link']}}"" class="btn btn-primary tab-register-bt">Register</a>
            @endif
            
          </div>
          <div id="profile" class="tab-pane cont">
                     @if(isset($course->bursaryApplication->text)))
                     {!!$course->bursaryApplication->text!!}
                     @endif
                     @if(isset($course->bursaryApplication->deadline))
                     {{$course->bursaryApplication->deadline}}
                     @endif
                     @if(isset($course->bursaryApplication->results))
                     {{$course->bursaryApplication->results}}
                     @endif
                     @if(isset($course->bursaryApplication->url))
                     {{$course->bursaryApplication->url}}
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
<!--Venue and accmmodation-->
<div id="md-venue_accmmodation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>COURSE VENUE</h4>
          <p>
            @if(isset($course->venue->url))
              <a href="{{$course->venue->url}}">
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
<!--Cancellation policy-->
<div id="md-cancellation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Cancellation policy</h4>
          <p>
          Upon receipt of a written cancellation, a refund of fees, minus €50 administrative fee, will be applied up to 6 weeks before the course. After this date no refund will be made for cancellations.

If you require visa documents for your travel please ensure that these are organised in advance, the ERS is not responsible for obtaining or financing your visa.
           
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END Modal contents div-->

@stop()  

@section('scripts')
    
@stop()