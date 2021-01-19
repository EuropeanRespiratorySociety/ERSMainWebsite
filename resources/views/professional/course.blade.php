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
    {{-- begin part1 --}}
    <div class="col-md-3 medium-grey-bg left-photo-map">
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
        @if ($item->sponsors[0]->text || $item->sponsors[0]->image)
        <h4 class="hidden-xs hidden-sm" style="margin: 20px 0 0 25px;text-align:left;">This educational activity has received support from the following companies:</h4>
        @foreach ($item->sponsors as $sponsor)
        <div class="hidden-xs hidden-sm course-sponsor text-left" style="background:transparent;padding: 0px 10px 10px 26px;">
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
          @if($item->feeList->liveStreaming || $item->feeList->liveStreamingNonErs)
            <p style="text-align:left;color:#d0043c;">
              <i style="font-size:26px;font-weight:bold;position:relative;top:5px;" class="s7-video"></i>
              <span>Live streaming will be available</span>
            </p>
          @endif
          @if($item->flags->text)
          <p style="padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <label>{{$item->eventDates}} @if(isset($item->eventLocation))<a href="javascript:void(0)" class="cursor_default">{{$item->eventLocation}}</a>@endif</label>
        </h2>
        <!-- Should be delete after coronavirus -->
        @if($item->slug != "clinical-exercise-testing-basic-principles-and-practice")
          <div class="text-left"><br/>Information: <a href="/the-society/news/ers-statement-covid-19-and-upcoming-ers-events">ERS Statement on COVID-19 and upcoming ERS events</a></div>
        @endif
        <!-- End Should be delete after coronavirus -->
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
      <h5><a href="{{$item->disclosure}}" target="_blank">Faculty disclosure</a></b></h5>
      @endif

      <div class="article text-left">
        @if($item->body){!!$item->lead!!}@endif
        @if($item->body){!!$item->body!!}@endif
      </div>
    </div>
    {{-- end part2 --}}

    {{-- begin part3 --}}
    <div class="col-md-3 col-xs-12 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#venue" data-toggle="tab">
            @if($item->venue->name ||
            $item->venue->url ||
            $item->venue->phoneNumber ||
            $item->venue->streetAddress ||
            $item->venue->streetAddress2 ||
            $item->venue->streetAddress3 ||
            $item->venue->postalCode ||
            $item->venue->city ||
            $item->venue->info )
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
            @else
            <span class="icon s7-info"></span>General<br>Information</a>
            @endif
            
          </li>
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
            <div class="ers-scroller nano scrollable" style="height:500px;">
              <div class="nano-content" style="padding-bottom:200px:">
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
                <div class="list-group" style="padding-bottom:400px">
                <!-- Begin Special case: Should be delete after the 4 of july 2020-->
                @if($item->slug == "virtual-school-in-adult-and-paediatric-respiratory-medicine")
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge"> Free </span> 
                    Virtual school
                  </a>
                  <a href="javascript:void(0)" class="list-group-item cursor_default">
                    <span class="badge"> &euro; 50</span> 
                    Virtual school <br>+ Paediatric Q&A extension
                  </a>
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge"> &euro; 50</span> 
                    Virtual school <br>+ Adult Q&A extension
                  </a>
                @else
                <!-- End Special case: Should be delete after the 4 of july 2020-->
                <!-- Added Special condition for ERS/ESTS joint course : Should be delete after 25/11/2021-->
                  @if($item->feeList->junior)
                    @if(strpos($item->slug, 'ers-ests')!== false)
                      <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                        <span class="badge">
                          &euro; {{ $item->feeList->junior }}
                        </span> Early Career <br>ERS/ESTS Members
                      </a>
                    @else
                      <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                        <span class="badge">
                          &euro; {{ $item->feeList->junior }}
                        </span> Early Career <br>ERS Members
                      </a>
                    @endif
                  @endif
                  @if($item->feeList->ersMember)
                    @if(strpos($item->slug, 'ers-ests')!== false)
                      <a href="javascript:void(0)" class="list-group-item cursor_default">
                        <span class="badge">
                          &euro; {{ $item->feeList->ersMember}}
                        </span> 
                        ERS/ESTS members
                      </a>
                    @else
                      <a href="javascript:void(0)" class="list-group-item cursor_default">
                        <span class="badge">
                          &euro; {{ $item->feeList->ersMember}}
                        </span> 
                        ERS members
                      </a>
                    @endif
                  @endif 
                  @if($item->feeList->nonErsMember)
                    @if(strpos($item->slug, 'ers-ests')!== false)
                      <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                        <span class="badge">
                          &euro; {{ $item->feeList->nonErsMember }}
                        </span> Non-ERS/ESTS Members
                      </a>
                    @else
                      <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                        <span class="badge">
                          &euro; {{ $item->feeList->nonErsMember }}
                        </span> Non-ERS Members
                      </a>
                    @endif
                  @endif  
                  @if($item->feeList->industry)
                    <a href="javascript:void(0)" class="list-group-item cursor_default">
                      <span class="badge">
                        &euro; {{ $item->feeList->industry }}
                      </span> Industry<br>(ERS Members & non-Members)
                    </a>
                  @endif
                <!-- Until here -- Added Special condition for ERS/ESTS joint course  : Should be delete after 25/11/2021-->
                  @if($item->feeList->liveStreaming)
                    <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                      <span class="badge">&euro; {{ $item->feeList->liveStreaming}}</span>
                      <span>
                        <i style="font-size: 15px; position: relative; top: 3px;" class="s7-video"></i>
                        Live stream ERS Members
                      </span>
                    </a>
                  @endif
                  @if($item->feeList->liveStreamingNonErs)
                    <a href="javascript:void(0)" class="list-group-item cursor_default">
                      <span class="badge">&euro; {{ $item->feeList->liveStreamingNonErs}}</span>
                      <span>
                        <i style="font-size: 15px; position: relative; top: 3px;" class="s7-video"></i>
                        Live stream Non-ERS Members
                      </span>
                    </a>
                  @endif
                @endif
                @if($item->earlybirdDeadline)
                  <p>Register before the early-bird deadline on <strong>{{ $item->earlybirdDeadline}}</strong> to benefit from a €50 discount on registration fees{{$item->feeList->liveStreaming || $item->feeList->liveStreamingNonErs ? ' (excluding live streaming)': '' }}.</p>
                @endif
                </div>
              </div>
            </div>
            
            <div class="event-items-right-bt">
            @if($item->extendedDeadline)
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            @endif
            @if($item->eventLocation === "Online")
            <p style="margin-bottom: 5px;"><a href="https://ers.box.com/s/f7moxpps5objzttkszwhpqrq6833vva0" target="_blank" type="button" class="cursor_pointer">General Terms & Conditions</a></p>
            @else
            <p style="margin-bottom: 5px;"><a href="https://ers.box.com/s/gop603kqyxoog3ztnd8hsn6sxpo794ex" target="_blank" type="button" class="cursor_pointer">General Terms & Conditions</a></p>
            @endif
            @if($item->cancellationPolicy)
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="cursor_pointer">Cancellation policy</a></p>
            @endif
            @if($item->travelInfo)
            <p><a data-toggle="modal" data-target="#md-travel_info" type="button" class="cursor_pointer">Travel Info</a></p>
            @endif
            @if($item->registerButton->link && !$item->fullyBooked)
              <!-- 
               Special case for this course
               CloudCMS URL : https://ers.cloudcms.net/#/projects/5a138baba2337b783074/documents/b303196cf03933bcbe10/properties
               The condition can be delete after this event : 09/04/2020
              -->
              @if($item->slug != "joint-ests-ers-course-on-thoracic-oncology--pleura--mediastinum-and-rare-tumours") 
                <p>Registering for someone else ? Contact {!! Html::mailto('registration@ersnet.org', 'registration@ersnet.org') !!}</p>
              @endif
              @if(strpos($item->registerButton->link, '@'))
                  <a href="{{'mailto:'.$item->registerButton->link}}" class="btn btn-primary tab-register-bt">
                    {{ $item->registerButton->text or Register}}
                  </a>
              @else
                  <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt ga-event-registration">
                  {{ $item->registerButton->text or Register}}
              </a>
              @endif
            @endif
            @if($item->fullyBooked)
              <p>Contact {!! Html::mailto('registration@ersnet.org', 'registration@ersnet.org') !!} to be added to the waiting list.</p>
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
    {{-- end part3--}}
    </div>
    {{-- End Right Sidebar --}}
    <div > 
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
  @include('elements.map.script', array('item' => $item))  
@stop()
