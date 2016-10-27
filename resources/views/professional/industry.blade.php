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
<div class="ers-content event-items-content">
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
   
          <div class="col-md-8 lighter-grey-bg event-items-fs-title">
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
    <!-- Beginning Right Side-bar -->

    <div class="col-md-3 white-bg event-items-right">
        @if($item->flags)
          <div class="alert {{'alert-'.$item->flags->color }}">
          <div class="message"> {{ $item->flags->text }}</div>
          </div>
    @endif
       {{-- @if($item->deadlines->applicationDeadline || $item->deadlines->applicationDeadline2)
          <p class="deadline">APPLICATION now open. Deadline: {{$item->deadlines->applicationDeadline2}}</p>
        @endif
        <div class="list-group text-left">
          @if($item->deadlines->applicationDeadline || $item->deadlines->applicationDeadline2)
          <a href="javascript:void(0)" class="list-group-item clearfix">
            <span class="icon s7-alarm"></span>
            <p>
              APPLICATION DEADLINE : <br>
              <span>{{$item->deadlines->applicationDeadline}} / {{$item->deadlines->applicationDeadline2}}</span>
            </p>
          </a>
          @endif  
          @if($item->deadlines->notification || $item->deadlines->notification2)
          <a href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix">
            <span class="icon s7-bell"></span>
            <p>
              NOTIFICATION : <br>
              <span>{{$item->deadlines->notification}} / {{$item->deadlines->notification2}}</span>
            </p>
          </a>
          @endif
          @if($item->deadlines->startDate || $item->deadlines->startDate2)    
          <a href="javascript:void(0)" class="list-group-item clearfix">
            <span class="icon s7-date"></span>
            <p>
              START DATE : <br>
              <span>{{$item->deadlines->startDate}} / {{$item->deadlines->startDate2}}</span>
            </p>
          </a>
          @endif
        </div> --}}
        <p class="rules text-left">
        @if($item->rulesAndRegulations)
          <a href="{{$item->rulesAndRegulations}}">Rules & Regulations</a> <br>
        @endif  
        For more information, contact {!! Html::mailto('fellowships@ersnet.org', 'fellowships@ersnet.org') !!}
      </p>
        @if($item->sponsors)
         @if($item->image)
          <hr>
         @endif
        @if($item->sponsors->text)
          <h4>{{$item->sponsors->text}}</h4>
        @endif
        @if($item->sponsors->image)
          <p><img src="{{ $item->sponsors->image }}" class="img-rounded" style="width:200px;"></p>
        @endif  
      @endif
    </div>

  @if($item->registerButton->link)
    <a href="{{$item->registerButton->link}}" target="_blank" class="btn btn-primary item-register-bt">{{$item->registerButton->text}}</a>
  @endif  
</div>
<!-- END Right Side-bar -->

</div>





</div>



@stop()  

@section('scripts')

@stop()