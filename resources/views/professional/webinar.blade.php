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

<style>
    #ersMainWebsite .event-items-content .event-items-right .md-chips .md-chip{
      margin: 0 5px 8px 0;
      display: inline-block;
      padding: 6px 12px 6px;
      border-radius: 28px;
      font-size: 13px;
    }

    div.md-chips{
      margin-bottom: 200px;
    }

    div.md-chip-disease{
      background: #F3E5F5;
      color: #4A148C;
    }

    div.md-chip-method{
      background: #D0F8CE;
      color: #0D5302;
    }

    @media screen and (max-width: 480px){
      div.md-chips{
        margin-bottom: 50px;
      }
    }


</style>
@section('content')
<div class="ers-content event-items-content">
  <div class="row" style="display: flex;flex-wrap: wrap;">
    <div class="col-md-3 col-xs-12 medium-grey-bg left-photo-map">
      <p><img src="https://cdn.ersnet.org/images/course/webinar-image500x333.jpg" class="img-rounded img-responsive"></p>
      @if($item->sponsors && $item->sponsors[0]->text)
    <h4 class="hidden-xs hidden-sm" style="margin: 20px 0 0 25px;text-align:left;">The following companies are supporting this ERS initiative through grants. Grantors have no influence on the content or development of this platform.</h4>
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

    <div class="col-md-6 lighter-grey-bg ers-course-info">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags->text)
          <p style="padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        @if($item->eventDates)
        <h2 class="text-left clearfix date-venue">
          <label>{{$item->eventDates}}</label>
        </h2>
        @endif
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-6 col-xs-6 text-left event-items-category">
            <p><em>{{$item->type}}</em></p>
          View <a href="/professional-development/ers-webinars">all ERS Webinar</a>
        </div>
        @if($item->contentLink->link)
        <div class="col-md-6 col-xs-6 text-right">
            <a href="{{$item->contentLink->link}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme">
                <span class="icon s7-next-2" style="font-size: 24px;"></span>
                  {{$item->contentLink->text ? $item->contentLink->text : 'Log in to the Webinar' }}
              </a>
        </div>
        @endif
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if($item->faculty)
      <h5 class="ers-course-organisers">{{$item->faculty}}</h5>
      @endif

      <div class="article text-left">
        @if($item->body){!!$item->lead!!}@endif
        @if($item->body){!!$item->body!!}@endif
      </div>
     
    </div>
    {{-- Beginning Right Side-bar --}}
    <div class="col-md-3 event-items-right white-bg right-column-smaller" style="overflow: auto;" >
          {{-- Target audience and Diseases --}}
          <div class=" text-left" style="padding: 0 15px;">
            @if($item->targetAudiance)
            <h4 style="font-size:15px;"><strong>Target Audience</strong></h4>
              <ul>
                @foreach ($item->targetAudiance as $targetAudiance)
                  <li>{{$targetAudiance}}</li>
                @endforeach
              </ul>
            @endif
            @if($item->diseases || $item->methods)
              <h4 style="font-size:15px; margin-top:30px;"><strong>Diseases / Methods</strong></h4>
              <div class="md-chips">
                  @if($item->diseases)
                    @foreach ($item->diseases as $disease)
                      <div class="md-chip md-chip-disease">{{$disease}}</div>
                    @endforeach
                  @endif
                  @if($item->methods) 
                    @foreach ($item->methods as $method)
                      <div class="md-chip md-chip-method">{{$method}}</div>
                    @endforeach
                  @endif
              </div>
            @endif
          </div>

          {{-- Target audience and Diseases end--}}
          <div class="event-items-right-bt">
            {{-- <p class="text-left">For more information, contact {!! Html::mailto('fellowships@ersnet.org', 'fellowships@ersnet.org') !!}</p> --}}
            @if($item->registerButton->link && !$item->fullyBooked)
                <a href="{{$item->registerButton->link}}" target="_blank" class="btn btn-lg  btn-primary sticky-btn" >
                    {{$item->registerButton->text ? $item->registerButton->text : 'Registration' }}
                  </a>
            @endif
            @if($item->fullyBooked)
              <p>Contact {!! Html::mailto('e-learning@ersnet.org', 'e-learning@ersnet.org') !!} to be added to the waiting list.</p>
              <a href="javascript:void(0)" class="btn btn-primary disabled tab-register-bt">Fully Booked</a>
            @endif
            
        </div>
    </div>
    {{-- End Right Sidebar --}}
    <div > 
      <hr class="visible-xs visible-sm">
      @if($item->sponsors && $item->sponsors[0]->text)
      <h4 class="visible-xs visible-sm" style="margin: 50px 0 0 25px;text-align:left;">The following companies are supporting this ERS initiative through grants. Grantors have no influence on the content or development of this platform.</h4>
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
@stop() 

