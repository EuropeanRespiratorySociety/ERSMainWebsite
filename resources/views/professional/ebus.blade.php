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

@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    {{-- begin part1 --}}
    <div class="col-md-3 medium-grey-bg left-photo-map">
    @if($item->image)
    <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
    @endif
    @if(isset($relatedItems))
      @include('partials.related-items', array('relatedItems' => $relatedItems)) 
    @endif
    @if ($item->sponsors[0]->text || $item->sponsors[0]->image)
      <h4 class="hidden-xs hidden-sm" style="margin: 20px 0 0 25px;text-align:left;">This educational activity has received support from the following companies:</h4>
      @foreach ($item->sponsors as $sponsor)
      <div class="hidden-xs hidden-sm course-sponsor text-left" style="background:transparent;padding: 0 10px 10px 26px;">
          @if($sponsor->text)
          <div class="course-sponsor-wrapper">
              @if($sponsor->image)
              <div class="course-sponsor-image col-md-12 col-xs-12 center-block" style="background:#fff;">
                  <p style="background-image: url('{{ $sponsor->image }}'); background-repeat: no-repeat; background-size:100%; width: 100%; height: 100%; background-position: center center; background-size: contain;"></p>
              </div> 
              @endif
          </div>
          @endif
      </div>
      @endforeach
    @endif
    </div>
    {{-- end part1 --}}
    {{-- begin part2 --}}
    <div class="col-md-6 lighter-grey-bg ers-course-info">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags)
          <p class="pull-right {{$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <label>{{$item->eventDates}} @if(isset($item->eventLocation))<a>{{$item->eventLocation}}</a>@endif</label>
        </h2>
        <div class="text-left"><br/>Information: <a href="/the-society/news/ers-statement-covid-19-and-upcoming-ers-events">ERS Statement on COVID-19 and upcoming ERS events</a></div>
      </div>

      <div class="row">
        <div class="col-md-6 col-xs-6 text-left event-items-category">
          <p><em>@if($item->type){{$item->type}}@endif</em></p>
          View <a href="/professional-development/courses">all ERS courses</a>
        </div>
        <div class="col-md-6 col-xs-6 text-right">
          @if(isset($item->programme))  
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
               {{$item->programmeButtonText ? $item->programmeButtonText : 'Course Programme' }}
            </a>
          @endif
          @if($item->programmeNotice)
          <p class="text-danger">{{$item->programmeNotice}}</p>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if($item->organisers)
      <h5><b>Organisers :</b> {{$item->organisers}}</h5>
      @endif
      @if($item->faculty)
      <h5><b>Faculty :</b> {{$item->faculty}}</h5>
      @endif
      @if($item->disclosure)
      <h5><a href="{{$item->disclosure}}" target="_blank">Faculty disclosures</a></h5>
      @endif

      <div class="article text-left">
        {!!$item->lead!!}
        {!!$item->body!!}
      </div>
    </div>
    {{-- end part2--}}
    {{-- begin part3--}}
    <div class="col-md-3 col-xs-12 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        @if($item->ebusVenues)
          <li class="active"><a href="#venue" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venues and Dates</a>
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
                @if(isset($item->practicalInfo))  
                  <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    {{$item->practicalInfoButton or 'Practical Info'}}
                  </a>
                @endif
                <ul class="list-group">
                  @if($item->technicalInfo)
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-technical-info" type="button" class=""><span class="s7-tools"></span>Technical Info</a></li>
                  @endif
                  @if($item->ebusVenues[0])
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-venues" type="button" class="">Venue and Dates</a></li>
                  @endif
                  @if($item->suggestedAccommodation[0]->name || $item->suggestedAccommodation[0]->streetAddress)
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-suggested_accommodation" type="button" class="">Suggested Accommodation</a></li>
                  @endif
                </ul>
                <hr>
                <div class="list-group">
                @if($item->feeList->junior)
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge">
                      &euro; {{ $item->feeList->junior }}
                    </span> Early Career <br>ERS Members
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
                @if($item->earlybirdDeadline)
                <p>Register before the early-bird deadline on <strong>{{ $item->earlybirdDeadline}}</strong> to benefit from a €50 discount on registration fees.</p>
                @endif
                </div>
              </div>
            </div>

            {{-- --}}
            <div class="event-items-right-bt">
            @if($item->extendedDeadline)
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            @endif
            @if($item->cancellationPolicy)
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @endif
            @if($item->travelInfo)
            <p><a data-toggle="modal" data-target="#md-travel_info" type="button" class="">Travel Info</a></p>
            @endif
            @if(isset($item->registerButton->link) && !$item->fullyBooked)
              <p>Registering for someone else ? Contact {!! Html::mailto('registration@ersnet.org', 'registration@ersnet.org') !!}</p>
              @if(strpos($item->registerButton->link, '@'))
              <a href="{{'mailto:'.$item->registerButton->link}}" class="btn btn-primary tab-register-bt">
                {{ $item->registerButton->text or Register}}
              </a>
              @else
              <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                {{ $item->registerButton->text or Register}}
              </a>
              @endif
            @endif         

            @if($item->fullyBooked)
              <p>Please contact {!! Html::mailto('registration@ersnet.org', 'registration@ersnet.org') !!} to be added to the waiting list.</p>
              <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            </div>
            {{-- --}}

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
          <div id="messages" class="tab-pane">
          </div>
          </div>
        </div>
      </div>
    <!-- end part3 -->
    </div>
    

    <div> 
      <hr class="visible-xs visible-sm">
      @if($item->sponsors && $item->sponsors[0]->text)
      <h4 class="visible-xs visible-sm" style="margin: 50px 0 0 25px;text-align:left;">This educational activity has received support from the following companies: </h4>
      @foreach ($item->sponsors as $sponsor)
      <div class="visible-xs visible-sm course-sponsor text-left" style="background:transparent;padding: 0 10px 0 10px;">
          @if($sponsor->text)
          <div class="course-sponsor-wrapper">
              @if($sponsor->image)
              <div class="course-sponsor-image col-md-12 col-xs-12 center-block" style="background:#fff;">
                  <p style="background-image: url('{{ $sponsor->image }}'); background-repeat: no-repeat; background-size:100%; width: 100%; height: 100%; background-position: center center; background-size: contain;"></p>
              </div> 
              @endif
          </div>
          @endif
      </div>
      @endforeach
      @endif
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
    
@stop()