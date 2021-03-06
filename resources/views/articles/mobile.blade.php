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
    #footer-contact {
      display: none!important;
    }
    #ersMainWebsite .article-items .article-text .article img[alt="img700"] {
      width: 700px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding: 15px 0;
    }
</style>

<div class="ers-content article-items">
  <div class="row">
    {{-- 
    <div class="col-md-3 medium-grey-bg left-photo-map"></div>  --}}
    {{--  Beginning Main Content Area  --}}
    <div class="col-md-9 lighter-grey-bg article-text">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags)
            <p style="margin-top:10px;padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif 
        </div>
      </div>
      <div class="page-head">
        <h2 class="">{{$item->title}}</h2>
        <h4 class="">@if($item->subTitle){{$item->subTitle}}@endif</h4>
        @if(isset($author))
        <h4 calss="author">
          <a href="authors/{{$author->slug}}">
            @if($author->image)
              <img src="{{$author->image}}" alt="@if($author->imageDescription)){{$author->imageDescription}}@endif" class="img-circle">
            @endif
           {{$author->title}}
          </a>
        </h4>
        @endif
      </div>
      <div class="article text-left @if(!$item->articleOneColumn) two-columns @endif">
        @if($item->createdOn && $item->type)
          @if($item->type == "News" && !$item->doNotDisplayCreatedOn)
            @if($item->displayModifiedOnDate)<h4 class="date mod">{{ $item->modifiedOn }}</h4>
            @else <h4 class="date">{{ $item->createdOn }}</h4>
            @endif
          @endif
        @endif
        @if($item->slug == 'privacy-test' || $item->slug == 'privacy' || $item->slug == 'cookies-policy')
          <hr>
          <h4 style="font-size: 14px; font-weight: bold;" class="date mod">modified on: {{ $item->modifiedOn }}</h4>
          <h4 style="font-size: 14px; font-weight: bold;" class="date mod">latest version: {{ $item->_system->changeset }}</h4>
          <hr>
        @endif
        @if($item->lead){!! $item->lead !!}@endif
        @if($item->body){!! $item->body !!}@endif
      </div>
      @if($item->comments == true)
      <hr>
      <div id="disqus_thread"></div>
      @endif
      {{-- Footer --}}
      @include('footer')
    </div>
    {{--  Beginning Main Content Area  --}}
    {{--  Beginning Right Side-bar  --}}
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">
        <div style="padding: 15px 5px 10px;">
          <h3>Download the free app now and stay connected</h3>
          <div style="padding-top: 5px;">
            <a href="https://install.events/ersconnect" target="_blank" class="btn btn-primary tab-register-bt">Download the app</a>
          </div>
        </div>
        @if($item->image)
          <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
        @endif
        @if($item->sponsors[0]->text)
          @if($item->image)
            <hr>
          @endif
          @if($item->sponsors[0]->image)
              <p><img src="{{ $item->sponsors[0]->image }}" class="img-rounded" style="width:200px;"></p>
          @endif
          @if($item->sponsors[0]->text)
            <h4>{{$item->sponsors[0]->text}}</h4>
          @endif
        @endif
        @if($item->loc->lat && $item->loc->long)
            <div id="map"></div>
        @endif
        @if($item->video)
          <div class="videoWrapper" style="min-height:300px">
            {!!$item->video!!} 
          </div>
        @endif
        @if(isset($relatedItems))
          @include('partials.related-items', array('relatedItems' => $relatedItems)) 
        @endif
      </div>

    </div>
    {{--  End Right Sidebar  --}}
  </div>
</div>

{{-- Modal contents div --}}
{{-- END Modal contents div --}}

@stop()  

@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()