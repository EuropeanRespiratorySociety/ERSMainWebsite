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

            @if($relatedItems)
            <div class="col-md-12 row row_event" style="padding: 30px 0;">
                @foreach ($relatedItems as $relatedItem)
                    <div class="col-md-4 isotope">
                      <div class="card card-event">
                        @if($relatedItem->highResImage)
                          <div class="md-card-head" style="height: 90px;background-repeat: no-repeat; background-image: url('{{$relatedItem->image}}'); 
                              background-position: center; background-size:100%;">
                          </div>
                        @endif

                        <div class="card-content">
                          <h3 class="title-icon" style="background-image: url('https://cdn.ersnet.org/preview/node/o:19b310aa5ac1db5d4baa?name=img130'); background-repeat: no-repeat; background-position: left; background-size: contain; height: 70px; position: relative;">
                              @if($relatedItem->uri) 
                                <a href="{{url($relatedItem->uri)}}">{{ $relatedItem->title }}</a>
                              @elseif($item->url)
                                <a href="{{url($relatedItem->url)}}">{{ $relatedItem->title }}</a>
                              @else
                                {{ $relatedItem->title }}
                              @endif  
                          </h3>
                        </div>
                        <div class="card-action clearfix">
                          @if($relatedItem->uri) 
                            <a href="{{url($relatedItem->uri)}}" class="btn btn-register">more</a>
                          @elseif($item->url)
                            <a href="{{url($relatedItem->url)}}" class="btn btn-register">more</a>                     
                          @endif
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
@stop()  



