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
                <div class="col-md-7 center-block lead text-left">
                  {!! $item->body !!}
                </div>
            </div>
            <div class="row row_event">
                @foreach ($relatedItems as $relatedItem)
                    <div class="col-md-4 isotope">
                        <div class="card card-event">
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
            <div class="main-content">
                <div class="page-head"><h4>Venue information:</h4></div>
                  <div class="col-md-7 center-block lead text-left">
                    <p>
                        @if($item->venue->info){!!$item->venue->info!!}@endif
                        @if($item->venue->url)
                          <a target="_blank" href="{{$item->venue->url}}">
                        @endif 
                          @if($item->venue->name){{$item->venue->name}}@endif
                        @if($item->venue->url)
                          </a>
                        @endif
                        <br/>
                        @if($item->venue->phoneNumber)
                          Phone: {{$item->venue->phoneNumber}}<br>
                        @endif
                        @if($item->venue->streetAddress)
                          {{$item->venue->streetAddress}}<br>
                        @endif
                        @if($item->venue->streetAddress2)
                          {{$item->venue->streetAddress2}}<br>
                        @endif
                        @if($item->venue->streetAddress3)
                          {{$item->venue->streetAddress3}}<br>
                        @endif
                        @if($item->venue->postalCode){{$item->venue->postalCode}}@endif
                        @if($item->venue->city){{$item->venue->city}}@endif<br>
                        @if($item->venue->country){{$item->venue->country}}@endif
                        @if($item->loc->lat && $item->loc->long)
                            <div id="map"></div>
                        @endif
                      </p>
                  </div>
              </div>
        </div>
    </div>
</div>
@stop()  
@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()



