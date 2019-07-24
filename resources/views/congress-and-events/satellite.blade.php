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
  <div class="row" style="display: flex;flex-wrap: wrap;">
    <div class="col-md-3 col-xs-12 medium-grey-bg left-photo-map">
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
    @if($item->sponsors && $item->sponsors[0]->text)
    <h4 class="hidden-xs hidden-sm" style="margin: 20px 0 0 25px;text-align:left;">With the financial support of:</h4>
      @foreach ($item->sponsors as $sponsor)
      <div class="hidden-xs hidden-sm course-sponsor text-left" style="background:transparent;padding: 0 10px 0 26px;">
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
      {{-- <div class="row">
        <div class="col-md-9 center-block" style="margin-top: -40px; margin-bottom: 60px; padding: 0 20px;">
          <p class="text-danger" style="font-size:17px;line-height: 1.5em;">The recordings of the ERS Satellite sessions on <em>Advances in Precision Medicine in COPD and ILD</em> are now available.</p>
          <a href="https://www.ers-satellites.org/auth/"  target="_blank"class="btn btn-primary tab-register-bt">Watch now</a>
        </div>
      </div> --}}

      <div class="row">
        {{-- <div class="col-md-6 text-left event-items-category">
          <p><em>ERS Satellites</em></p>
           View <a href="/congress-and-events/events-calendar">all events</a>
        </div> --}}
        <div class="col-md-12 text-right">
          
            <a href="https://ers.box.com/s/9k7fof40vyurv8kkqg2j109vrn5sxpwj" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
               {{$item->programmeButtonText ? $item->programmeButtonText : 'Programme' }}
            </a>
          {{-- <p>This programme has been created by the European Respiratory Society and there has been no external influence on the content or choice of speakers.</p> --}}
        </div>
      </div>
      <div>
        
        <h2 class="article-title">
          {{-- <i class="icon-ers icon" style="font-size:42px; color:#d0043c; position:relative; top:6px; right:12px;"></i>{{$item->title}}--}}
          <img class="img-responsive" src="https://ers.box.com/shared/static/5ya4sr85d4ucuu25o8d6ewmvxujef3vf.png"> 
        </h2>
      </div>
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
        <div class="videoWrapper" style="margin-top: 15px;">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/LcNkN-pAMWI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
          {!!$item->body!!}
      </div>
    </div>
    <!-- Beginning Right Side-bar -->
  <div class="col-xs-12 col-md-3 white-bg event-items-tab">
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
          
                
        <div class="list-group text-left">
            @if($item->ebusVenues[0] && ($item->ebusVenues[0]->name || $item->ebusVenues[0]->streetAddress))
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
                  </a>
                <span></span>
                </p>
              </span>
            @endif



        </div>

      </div>   
            <div class="event-items-right-bt">
              @if($item->registerButton->link && !$item->fullyBooked)
                <p>Registering for someone else ? Contact {!! Html::mailto('registration@ersnet.org', 'registration@ersnet.org') !!}</p>
                <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                    {{ $item->registerButton->text or Register}}
                </a>
              @endif
            {{-- @if($item->extendedDeadline) --}}
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            {{-- @endif --}}

            </div>

          </div>
          <div id="messages" class="tab-pane"> </div>

          <hr class="visible-xs visible-sm">
          @if($item->sponsors && $item->sponsors[0]->text)
          <h4 class="visible-xs visible-sm" style="margin: 50px 0 0 25px;text-align:left;">With the financial support of:</h4>
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

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>
@stop()

{{--Modal contents div--}}
@section('modals')
  @include('elements.modal.venues', array('item' => $item)) 
  <div id="md-register" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          <h2 class="modal-title">How do you want to attend?</h2>
        </div>
        <div class="modal-body">
        <div class="row">

          <div class="col-md-6">
            <a href="https://www.ers-satellites.org/" class="btn btn-primary tab-register-bt" target="_blank">Online</a>
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