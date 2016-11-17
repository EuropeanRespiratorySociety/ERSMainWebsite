@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => $item->url ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content event-items-content article-items">
  <div class="row">
    <div class="col-md-9">
        <div class="row">
          <div class="col-md-4 medium-grey-bg left-photo-map">
          @if($item->image)
              <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
          @endif 
          @if($item->video)
          <div class="videoWrapper">
            {!!$item->video!!} 
          </div>
          @endif
          @if(isset($relatedItems))
            @include('partials.related-items', array('relatedItems' => $relatedItems)) 
          @endif       
          </div>     
          <div class="col-md-8 lighter-grey-bg event-items-fs-title article-text">
            <div class="page-head"><h2 class="article-title">{{$item->title}}</h2></div>
            <div class="article text-left">
            @if($item->lead)
              {!!$item->lead!!}
            @endif 
            @if($item->body)           
              {!!$item->body!!}
            @endif             
           </div>
         </div>
       </div>
    </div>
    {{--  Beginning Right Side-bar --}}
    <div class="col-md-3 white-bg event-items-right">

      @if($item->flags->text)
        <div class="alert {{'alert-'.$item->flags->color }}">
          <div class="message"> {{ $item->flags->text }}</div>
        </div>
      @endif
        {{-- @if($item->deadlines->applicationDeadline || $item->deadlines->applicationDeadline2)
          <p class="deadline">APPLICATION now open. Deadline: {{$item->deadlines->applicationDeadline2}}</p>
        @endif --}}
        <div class="list-group text-left">
          @if($item->deadlines->applicationDeadline || $item->deadlines->applicationDeadline2)
          <a href="javascript:void(0)" class="list-group-item clearfix">
            <span class="icon s7-alarm"></span>
            <p>
              APPLICATION DEADLINE : <br>
              <span>{{$item->deadlines->applicationDeadline}} @if($item->deadlines->applicationDeadline2)/ {{$item->deadlines->applicationDeadline2}}@endif</span>
            </p>
          </a>
          @endif  
          @if($item->deadlines->notification || $item->deadlines->notification2)
          <a href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix">
            <span class="icon s7-bell"></span>
            <p>
              NOTIFICATION : <br>
              <span>{{$item->deadlines->notification}} @if($item->deadlines->notification2)/ {{$item->deadlines->notification2}}@endif</span>
            </p>
          </a>
          @endif
          @if($item->deadlines->startDate || $item->deadlines->startDate2)    
          <a href="javascript:void(0)" class="list-group-item clearfix">
            <span class="icon s7-date"></span>
            <p>
              START DATE : <br>
              <span>{{$item->deadlines->startDate}} @if($item->deadlines->startDate2)/ {{$item->deadlines->startDate2}}@endif</span>
            </p>
          </a>
          @endif
          @if($item->title == "Marie Curie Post-doctoral Research Fellowships (RESPIRE 3)")
              <span href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
      <span class="icon s7-copy-file"></span>
      <p>
        DOCUMENTS : <br>
        <ul style="display: table;
                  float: left;
                  margin-left: 10px;">
            <li>
            <a href="https://ers.box.com/shared/static/6o4rkpa86n63rv0aavp7hfiuol2bjr39.pdf">Application Guidelines</a>
            </li>
            <li>
            <a href="https://ers.box.com/shared/static/h4johsv2crcz1xnghmi1hwzs786i8ith.pdf">Frequently Asked Questions (FAQs)</a>
            </li>
            @if($item->popUpText)
            <li>
              <a data-toggle="modal" data-target="#md-popUp" class="cursor_pointer">{{$item->popUpText}}</a>
            </li>
            @endif
          </ul>
      </p>
    </span>
    @endif
        </div>
        <p class="rules text-left">
        @if($item->rulesAndRegulations)
          <a href="{{$item->rulesAndRegulations}}">Rules & Regulations</a> <br>
        @endif 
        </p> 

          <div class="event-items-right-bt">
            @if($item->extendedDeadline)
            <p class="deadline">EXTENDED registration deadline : {{$item->extendedDeadline}}</p>
            @endif
            @if($item->cancellationPolicy)
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="cursor_pointer">Cancellation policy</a></p>
            @endif
            @if($item->travelInfo)
            <p><a data-toggle="modal" data-target="#md-travel_info" type="button" class="cursor_pointer">Travel Info</a></p>
            @endif
            @if($item->registerButton->link && !$item->fullyBooked)
             <p>For more information, contact {!! Html::mailto('fellowships@ersnet.org', 'fellowships@ersnet.org') !!}</p>
            <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                {{ $item->registerButton->text or Register}}
            </a>
            @endif
            @if($item->fullyBooked)
              <p>Please contact {!! Html::mailto('education@ersnet.org', 'education@ersnet.org') !!} to be added to the waiting list.</p>
              <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
          </div>
</div>
{{-- END Right Side-bar --}}

</div>





</div>



@stop()  

@section('scripts')

@stop()