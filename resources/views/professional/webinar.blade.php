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
      margin: 0 5px 3px 0;
      display: inline-block;
      padding: 6px 12px 0;
      border-radius: 28px;
      font-size: 13px;
      height:28px;
    }

    div.md-chip-disease{
      background: #F3E5F5;
      color: #4A148C;
    }

    div.md-chip-method{
      background: #D0F8CE;
      color: #0D5302;
    }



</style>
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 left-photo-map">
      <p><img src="https://cdn.ersnet.org/images/course/webnar-article.png" class="img-rounded img-responsive"></p>
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
        <h2 class="text-left clearfix date-venue">
        <label>{{$item->eventDates}}</label>
        </h2>
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
    <div class="col-md-3 event-items-right white-bg right-column-smaller">
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
              <div class="md-chips ">
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
  </div>
</div>
@stop() 

