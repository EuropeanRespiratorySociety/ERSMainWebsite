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
<style>
  .ers-content .card-event .card-content .title-icon{
    font-size: 18px;
    font-family: DinPro,sans-serif;
    color: #4680E4;
    line-height: 110%;
    text-transform: uppercase;
  }

  .title-icon a {
    display: inline-block;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding-left: 85px;
    line-height: 130%;
  }

 </style>
<div class="ers-content">
  <div id="fullpage">
    <div class="section fp-auto-height">
        @if($item->highResImage)
        <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
        </div>
        @endif
        <div class="main-content">
          <div class="page-head" style="margin-bottom: 0px;">
            <h2>{{$item->title}}</h2>
          </div>
          <div class="col-md-7 center-block lead text-left" style="margin-top: 50px;">
            {!! $item->body !!}
          </div>

            <div class="col-md-12 row row_event" style="padding: 30px 0;">
                    <div class="col-md-4 isotope">
                      <div class="card card-event">
                        <div class="card-content">
                          <h3 class="title-icon" style="background-repeat: no-repeat; background-position: left; background-size: contain; height: 70px; position: relative;">
                              <a href="{{url($modulesUrl)}}">View Modules</a>
                          </h3>
                        </div>
                        <div class="card-action clearfix">
                            <a href="{{url($modulesUrl)}}" class="btn btn-register">more</a>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop()  



