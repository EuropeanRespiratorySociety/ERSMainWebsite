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


<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif

            <div class="main-content">
              <div class="page-head"><h2>{{$item->title}}</h2></div>
              <div class="col-md-7 center-block lead">
                  {!! $item->lead !!}
                </div>
                <div class="col-md-7 center-block lead">
                  {!! $item->body !!}
                </div>
            </div>
        </div>

        <div class="section fp-autoa-height faqs-content ">
            <div class="main-content light-grey-bg">
              <div class="col-md-10 center-block row row_event " style="display: flex; flex-wrap: wrap;">
                @foreach ($items as $index => $item)
                <div class="col-md-4 isotope">
                  <div class="card card-event">
                    <div class="card-content text-left">
                        @if(isset($item->flag->text))
                            <p class="btn-rounded early_bird" >{{$item->flag->text}}</p>
                        @endif
                        <p style="color:#015291;"><strong>Article Author(s): {{$item->organisers}}</strong></p>
                        <h3 class="title" style="text-transform: none;">
                          @if($item->uri)
                            <a href='{{$item->uri}}'> {{$item->title}} </a>
                          @else
                            <a href="{{$_SERVER['REQUEST_URI']}}/{{$item->slug}}"> {{$item->title}} </a>
                          @endif
                        </h3>
                        {!! $item->shortLead !!}
                      </div>'
                      <div class="card-action clearfix">
                        @if($item->uri)
                          <a href="{{$item->uri}}" class="btn btn-register">more</a>
                        @else
                          <a href="{{$_SERVER['REQUEST_URI']}}/{{$item->slug}}" class="btn btn-register">more</a>
                        @endif
                      </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
        </div>

    </div>
</div>
@stop()  

