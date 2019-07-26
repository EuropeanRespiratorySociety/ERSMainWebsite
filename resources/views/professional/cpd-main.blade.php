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
          <div class="page-head" style="margin-bottom: 0px;">
            <h2>{{$item->title}}</h2>
          </div>
          <div class="col-md-7 center-block lead text-left" style="margin-top: 50px;">
            {!! $item->body !!}
          </div>

            @if($relatedItems)
            <div class="col-md-12 row row_event" style="padding-top: 30px;">
                @foreach ($relatedItems as $relatedItem)
                    <div class="col-md-4 isotope">
                      <div class="card card-event">
                        @if($relatedItem->highResImage)
                          <div class="card-image" style="height: 150px;background-repeat: no-repeat; background-image: url('{{$relatedItem->highResImage}}'); 
                              background-position: center; background-size:100%;">
                          </div>
                        @endif

                        <div class="card-content">
                          <h3 class="title">
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



