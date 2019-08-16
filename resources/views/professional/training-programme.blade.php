@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($category->url) ? $category->url : null , 
              'title' => $category->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<style>
    #ersMainWebsite .article-items .article-text .article img[alt="img700"] {
      width: 700px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding: 15px 0;
    }
    #ersMainWebsite .article-items .article-text .article img[alt="float130"] {
      float: left;
      width: 130px;
      margin-right: 20px;
    }
</style>

<div class="ers-content article-items">
  <div class="row">
    {{--  Beginning Main Content Area  --}}
    <div class="col-md-9 lighter-grey-bg article-text">
      <div class="header">
        <div class="clearfix notification">
          @if($category->flags)
            <p style="margin-top:10px;padding: 0 10px;" class="pull-right alert {{'alert-'.$category->flags->color }}">{{ $category->flags->text }}</p>
          @endif 
        </div>
      </div>
      <div class="page-head">
        <h2 class="">{{$category->title}}</h2>
        <h4 class="">@if($category->subTitle){{$category->subTitle}}@endif</h4>
      </div>
      <div class="article text-left">
        @if($category->body){!! $category->body !!}@endif
       
      </div>
      <div class="row row_event">
        @include('partials.items', array('items' => $items))
    </div>
      {{-- Footer --}}
      @include('footer')
    </div>
    {{--  Beginning Right Side-bar  --}}
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">
        @if($category->image)
          <p><img src="{{ $category->image }}" class="img-rounded img-responsive"></p>
        @endif    
        @if($category->sponsors[0]->text)
          @if($category->image)
            <hr>
          @endif
          @if($category->sponsors[0]->image)
              <p><img src="{{ $category->sponsors[0]->image }}" class="img-rounded" style="width:200px;"></p>
          @endif
          @if($category->sponsors[0]->text)
            <h4>{{$category->sponsors[0]->text}}</h4>
          @endif
        @endif
        @if($category->video)
          <div class="videoWrapper" style="min-height:300px">
            {!!$category->video!!} 
          </div>
        @endif
      </div>
    </div>
    {{--  End Right Sidebar  --}}
  </div>
</div>


@stop()  