@extends('template')
@section('content')<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 midium-grey-bg">
    <p style="height:200px;"></p>
    <p style="height:200px;"></p>
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
            <span class="icon s7-right-arrow pull-left" style="font-size: 24px;"></span>
            Course Programme
            <span class="icon s7-right-arrow pull-right" style="font-size: 24px;"></span>
          </button>
        </div>
      </div>
      <h2 class="article-title">{{$course->title}}</h2>
      <h5>Organisers : {{$course->organisers}}</a></h5>

      <div class="article text-left">
        <p>{{$course->lead}}</p>
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
          <li><a href="#messages" data-toggle="tab"> </a></li>
        </ul>
        <div class="tab-content text-left">
          <div id="home" class="tab-pane active cont">
            <button  type="button" class="btn btn-light-primary pratical-info">
              <span class="icon s7-right-arrow pull-right" style="font-size: 24px;"></span>
              Pratical information
              <span class="icon s7-right-arrow pull-left" style="font-size: 24px;"></span>
            </button>
            <p>COURSE VENUE<br><br>

            <a href="{{$course->venue->url}}">{{$course->venue->name}}</a><br/>
            {{$course->venue->streetAddress}}<br>
            @if(isset($course->venue->streetAddress2))
            {{$course->venue->streetAddress2}}<br>
            @endif
            {{$course->venue->postalCode}} {{$course->venue->city}}<br>
            {{$course->venue->country}}</p>

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
            @if(isset($course->extendedDeadline))
            <p class="deadline">EXTENDED registration deadline : {{$course->extendedDeadline}}</p>
            @endif
            <p><a href="">Cancellation policy</a></p>
            <a href="{{$course->registerButton['link']}}"" class="btn btn-primary">Register</a>
          </div>
          <div id="profile" class="tab-pane cont">
                     {!!$course->bursaryApplication->text!!}
                     {{$course->bursaryApplication->deadline}}
                     {{$course->bursaryApplication->results}}
                     {{$course->bursaryApplication->url}}
          </div>
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

@stop()  

@section('scripts')
    
@stop()