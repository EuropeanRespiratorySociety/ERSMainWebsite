
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
          
          @foreach ($item->sponsors as $sponsor)
          <div class="course-sponsor text-left">
            @if($sponsor->text)
              <div class="course-sponsor-wrapper">
                @if($sponsor->image)
                  <div class="course-sponsor-image col-md-7 col-xs-7 pull-right">
                    <p style="background-image: url('{{ $sponsor->image }}'); background-repeat: no-repeat; background-size:100%; width: 100%; height: 100%; background-position: right center; background-size: contain;"></p>
                 </div> 
                @endif
                @if($sponsor->text)
                  <div class="course-sponsor-right  col-md-5 col-xs-5 pull-left">
                    <h4 class="text-left">{{$sponsor->text}}</h4>
                  </div>
                @endif
              </div>
            @endif
          </div>
        @endforeach
    
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
          <a href="javascript:void(0)" class="list-group-item clearfix">
            <span class="icon s7-alarm"></span>
            <p>
              APPLICATION DEADLINE : <br>
            </p>
            <div style="clear:left;">
              <p style="margin-top: 8px;">ERS Guidelines, Statement and Technical Standard: <br /><strong>01 February 2019 and 01 June 2019</strong></p>
              <p style="margin-top: 8px;">ERS Short Guideline and Short Statement: <br /><strong>Year-round</strong></p>
              <p style="margin-top: 8px;">ERS/ATS joint Task Forces: <br /><strong>July 2019</strong></p>
            </div>
          </a>
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
            {{-- @if($item->rulesAndRegulations)
            <span href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
              <span class="icon s7-copy-file"></span>
              <p>
                DOCUMENTS : <br>
                <ul style="display: table;
                          float: left;
                          margin-left: 10px;">
                    @endif
                    @if($item->rulesAndRegulations)
                    <li>
                      <a href="{{$item->rulesAndRegulations}}">
                         "Rules & Regulations"
                      </a>
                    </li>
                    @endif
                  </ul>
              </p>
            </span>
            @endif --}}
            <span href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
              <span class="icon s7-copy-file"></span>
              <p>
                DOCUMENTS : <br>
                <ul style="display: table;
                          float: left;
                          margin-left: 10px;">
                    <li>
                      <a target="_blank" href="https://ers.box.com/shared/static/qj9d0ykhj87dxxn8vplnmsiv8rl083m8.doc">ERS Task Force Guideline and Application Form</a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ers.box.com/s/zgy9kimhu6knj459ax0zupjl5v36x92t">ERS Short Guideline and Short Statement Guideline and Application Form</a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ers.box.com/shared/static/k3eueaqf4rylbowrj55eqt2nn3nav28p.doc">ERS Conflict of Interest and Confidentiality Form</a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ers.box.com/shared/static/0fqrkdbl3in50lwfl9kzy2sz1bonkk29.pdf">FAQ of ERS document development</a>
                    </li>
                </ul>
              </p>
            </span>

            <span href="javascript:void(0)" class="list-group-item clearfix cursor_default">
              <span class="icon s7-copy-file"></span>
              <p>
                Access the Publish Guidelines : <a target="_blank" href="https://www.ers-education.org/guidelines.aspx">ERS E-learning website</a><br>
              </p>
            </span>


            <span href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
              <span class="icon s7-mail"></span>
              <p>
                CONTACT : <br>
                {!! Html::mailto('guidelines_statements@ersnet.org', 'Guidelines Statements') !!}
              </p>
            </span>

  </div>


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
            {{-- 
              <p>For more information, contact {!! Html::mailto('scientific@ersnet.org', 'scientific@ersnet.org') !!}</p>
            --}}
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