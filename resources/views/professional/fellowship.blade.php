@extends('template')
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-9">
        <div class="row">
          <div class="col-md-4 midium-grey-bg left-photo-map">
          @if(isset($item->image))
              <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
          @endif 
          @if(isset($relatedItems))
            @include('partials.related-items', array('relatedItems' => $relatedItems)) 
          @endif       
          </div>     
   
          <div class="col-md-8 lighter-grey-bg event-items-fs-title">
            <div class="page-head"><h2 class="article-title">{{$item->title}}</h2></div>
            <div class="article text-left">
            @if(isset($item->lead))
              {!!$item->lead!!}
            @endif 
            @if(isset($item->body))           
              {!!$item->body!!}
            @endif             
           </div>
         </div>
       </div>
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-right">
        @if(isset($item->deadlines->applicationDeadline) || isset($item->deadlines->applicationDeadline2))
        <p class="deadline">APPLICATION now open. Deadline: {{$item->deadlines->applicationDeadline}}</p>
        @endif
        <div class="list-group text-left">
          @if(isset($item->deadlines->applicationDeadline) || isset($item->deadlines->applicationDeadline2))
          <a href="#" class="list-group-item clearfix">
            <span class="icon s7-alarm"></span>
          <p>
            APPLICATION DEADLINE : <br>
              <span>{{$item->deadlines->applicationDeadline}} / {{$item->deadlines->applicationDeadline2}}</span>
            </p>
          </a>
          @endif  
          @if(isset($item->deadlines->notification) || isset($item->deadlines->notification2))
          <a href="#" class="list-group-item lighter-grey-bg clearfix">
           <span class="icon s7-bell"></span>
           <p>
            NOTIFICATION : <br>
            <span>{{$item->deadlines->notification}} / {{$item->deadlines->notification2}}</span>
          </p>
        </a>
        @endif
        @if(isset($item->deadlines->startDate) || isset($item->deadlines->startDate2))    
        <a href="#" class="list-group-item clearfix">
          <span class="icon s7-date"></span>
          <p>
            START DATE : <br>
            <span>{{$item->deadlines->startDate}} / {{$item->deadlines->startDate2}}</span>
          </p>
        </a>
        @endif
    </div>
  <p class="rules text-left">
  @if(isset($item->rulesAndRegulations))
    <a href="{{$item->rulesAndRegulations}}">Rules & Regulations</a> <br>
  @endif  
    For more information, contact <a href="mailto:fellowships@ersnet.org">fellowships@ersnet.org</a>
  </p>
@if(isset($item->registerButton['link']))
  <a href="{{$item->registerButton['link']}}" target="_blank" class="btn btn-primary item-register-bt">{{$item->registerButton['text']}}</a>
@endif  
</div>
<!-- END Right Side-bar -->

</div>





</div>



@stop()  

@section('scripts')

@stop()