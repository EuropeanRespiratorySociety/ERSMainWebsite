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
        <h2 class="">{{$category->subTitle}}</h2>
      </div>
      <div class="article text-left">
        @if($category->body){!! $category->body !!}@endif
      </div>
      @if($news)
      <div class="row row_event">
        <h2 class="text-left" style="padding-left: 15px;">News</h2>
        @include('partials.items',array('items' => $news, 'deleteTypeFlag' => true))
      </div>
      @endif
      @if($webinars)
      <div class="row row_event">
        <h2 class="text-left" style="padding-left: 15px;">Webinars</h2>
        @include('partials.items', array('items' => $webinars, 'deleteTypeFlag' => true))
      </div>
      @endif
      @if($respiratoryDigests)
      <div class="row row_event">
        <h2 class="text-left" style="padding-left: 15px;">Research summaries</h2>
        <p class="text-left" style="padding-left: 15px;">ERS Respiratory Digests provide summaries of new and significant research. The latest articles focus on important early COVID-19 publications. </p>
        @include('partials.items', array('items' => $respiratoryDigests, 'deleteTypeFlag' => true))
      </div>
      @endif
      @if($events)
      <div class="row row_event">
        <h2 class="text-left" style="padding-left: 15px;">Events</h2>
        @include('partials.items', array('items' => $events))
      </div>
      @endif

      {{-- Footer --}}
      @include('footer')
    </div>
    {{--  Beginning Right Side-bar  --}}
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">
        @if($category->image)
          <p><img src="{{ $category->image }}" class="img-rounded img-responsive"></p>
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