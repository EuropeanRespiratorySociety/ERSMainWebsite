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

    <div class="col-md-6 lighter-grey-bg">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags)
          <p class="pull-right {{$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue cursor_default">
        <!--<a href="javascript:void(0)"><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>{!!$item->ebusDate!!} @if(isset($item->eventLocation))<a>{{$item->eventLocation}}</a>@endif</label>
        <!--<a href="javascript:void(0)"><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>@if($item->type){{$item->type}}@endif</em></p>
          {{-- View <a href="/professional-development/courses">all ERS courses</a> --}}
        </div>
        <div class="col-md-6 text-right">
          @if($item->programme)  
            <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
               {{$item->programmeButtonText ? $item->programmeButtonText : 'Programme' }}
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
    <!-- Beginning Right Side-bar -->
  <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        {{-- <ul class="nav nav-tabs">
        @if($item->ebusVenues)
          <li class="active"><a href="#venue" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venues and Dates</a>
          </li>
        @endif
        @if($item->bursaryApplication && !empty($item->bursaryApplication))
          <li><a href="#bursary" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        @endif
        </ul> --}}

        <div class="tab-content text-left">
          <div class="ers-scroller nano scrollable" style="height: 650px;">
            <div class="nano-content">
              <div style="padding-left: 50px; max-width: 180px;">
                  <div>
                    <img src="../images/events/DGP.png" class="img-responsive" style="padding-top: 20px;"/>
                  </div>
                  <div>
                    <img src="../images/events/SANI.png" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
                  <div>
                    <img src="../images/events/SIP-IRS.png" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
                  <div>
                    <img src="../images/events/SPLF.png" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
                  <div>
                    <img src="../images/events/SEPAR.png" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
                  <div>
                    <img src="../images/events/BTS.jpg" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
                  <div>
                    <img src="../images/events/BVP-SBP.jpg" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
                  <div>
                    <img src="../images/events/AIPO-RGB.jpg" class="img-responsive" style="padding-top: 30px;"/>
                  </div>
              </div>
            </div>
          </div>
          <div class="nano-pane" style="display: block;"><div class="nano-slider" style="height: 50px; transform: translate(0px, 0px);"></div></div></div>        {{--
          <div id="venue" class="tab-pane active cont">

        <div class="list-group text-left">
            <a href="javascript:void(0)" class="list-group-item clearfix cursor_default">
                <span class="icon s7-alarm" style="display: block;
                                                    font-size: 30px;
                                                    float: left;
                                                    margin-right: 10px;">
                </span>
                <p style="font-size: 12.5px;
                            float: left;
                            width: 75%;
                            margin: 0;">
                EARLYBIRD DEADLINE : <br>
                <span>18 October, 2017</span>
                </p>
            </a>
            @if($item->ebusVenues[0])
            <span href="javascript:void(0)" class="list-group-item clearfix cursor_default">
                <span class="icon icon-hotel" style="display: block;
                                                    font-size: 30px;
                                                    float: left;
                                                    margin-right: 10px;">
                </span>
                <p style="font-size: 12.5px;
                            float: left;
                            width: 75%;
                            margin: 0;">
                <a data-toggle="modal" data-target="#md-venues" type="button" class="btn btn-default" 
                style="float: left;
                    margin-top: 5px;
                    padding: 0;"> 
                {{ count($item->ebusVenues) === 1 ? 'VENUE' : 'VENUES' }}<br>
                <span></span></span>
                </p>
            </a>
            @endif
        </div>

            <div class="ers-scroller nano scrollable" style="height:450px;">
                <div class="nano-content">   
                @if($item->practicalInfo)  
                  <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    {{$item->practicalInfoButton or 'Practical Info'}}
                  </a>
                @endif
                <ul class="list-group">
                  @if($item->technicalInfo)
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-technical-info" type="button" class=""><span class="s7-tools"></span>Technical Info</a></li>
                  @endif

                  @if($item->suggestedAccommodation[0]->name || $item->suggestedAccommodation[0]->streetAddress)
                  <li class="list-group-item"><a data-toggle="modal" data-target="#md-suggested_accommodation" type="button" class="">Suggested Accommodation</a></li>
                  @endif
                </ul>
                <hr>
                <div class="list-group">
                
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge">
                      &euro; 139
                    </span> Early career Members <br />
                    <p class="text-small text-right text-mute" style="margin-right: 9px;">Earlybird &euro; 99</p>
                  </a>
                
                
                  <a href="javascript:void(0)" class="list-group-item cursor_default">
                    <span class="badge">
                      &euro; 159
                    </span> ERS Members <br />
                    <p class="text-small text-right text-mute" style="margin-right: 9px;">Earlybird &euro; 139</p>
                  </a>
               
                
                  <a href="javascript:void(0)" class="list-group-item medium-grey-bg cursor_default">
                    <span class="badge">
                      &euro; 199
                    </span> Non-ERS Members <br />
                    <p class="text-small text-right text-mute" style="margin-right: 9px;">Earlybird &euro; 159</p>
                  </a>
                
                  <a href="javascript:void(0)" class="list-group-item cursor_default">
                    <span class="badge">
                      &euro; 99
                    </span> Online access <br />
                    <p class="text-small text-right text-mute" style="margin-right: 9px;">Earlybird &euro; 59</p>
                  </a>
                 
                </div>


              </div>
            </div> --}}
            
            <div class="event-items-right-bt">
            {{--
            @if($item->extendedDeadline)
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            @endif
            
            @if($item->cancellationPolicy)
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
            @endif
            @if($item->travelInfo)
            <p><a data-toggle="modal" data-target="#md-travel_info" type="button" class="">Travel Info</a></p>
            @endif
            --}}
            @if(!$item->fullyBooked)
              {{--<p>Registering for someone else ? Contact {!! Html::mailto('felix.yip@ersnet.org', 'Felix Yip') !!}</p>--}}
              <a data-toggle="modal" data-target="#md-register" class="btn btn-primary tab-register-bt">Register</a>
            @endif
            @if($item->fullyBooked)
              <p>Please contact {!! Html::mailto('educaion@ersnet.org', 'education@ersnet.org') !!} to be added to the waiting list.</p>
              <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            </div>

          </div>
           {{-- @if($item->bursaryApplication->text
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
          @endif --}}
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>
@stop()

{{--Modal contents div--}}
@section('modals')
  {{-- @include('elements.modal.venue', array('item' => $item)) 
  @include('elements.modal.venues', array('item' => $item)) 
  @include('elements.modal.cancellation', array('item' => $item)) 
  @include('elements.modal.travel-info', array('item' => $item))  
  @include('elements.modal.technical-info', array('item' => $item)) --}}
  <div id="md-register" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h2 class="modal-title">For which event do you want to register?</h2>
      </div>
      <div class="modal-body">
        <div class="text-left">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-amsterdam" rel="nofollow noreferrer" target="_blank"><strong>Amsterdam</strong></a></h4></li>
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-berlin" rel="nofollow noreferrer" target="_blank"><strong>Berlin</strong></a></h4></li>
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-brussels" rel="nofollow noreferrer" target="_blank"><strong>Brussels</strong></a></h4></li>
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-london" rel="nofollow noreferrer" target="_blank"><strong>London</strong></a></h4></li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-madrid" rel="nofollow noreferrer" target="_blank"><strong>Madrid</strong></a></h4></li>
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-paris" rel="nofollow noreferrer" target="_blank"><strong>Paris</strong></a></h4></li>
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-rome" rel="nofollow noreferrer" target="_blank"><strong>Rome</strong></a></h4></li>
                <li class="list-group-item"><h4><a href="https://forms.ersnet.org/ers-satellite-stockholm-karolinska" rel="nofollow noreferrer" target="_blank"><strong>Stockholm</strong></a></h4></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop()  
{{--END Modal contents div--}}  

@section('scripts')
    
@stop()