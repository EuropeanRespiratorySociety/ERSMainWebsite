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
              <div class="page-head">
                <h2 class="">{{$item->title}}</h2>
              </div>
              <div class="col-md-7 center-block lead" style="margin-bottom:80px;">
                <div class="text-left">
                  @if(isset($item->body)){!!$item->body!!}@endif
                </div>
                @if($item->registerButton->link)
                <div class="text-right" style="margin-top:40px;">
                  <a href="{{$item->registerButton->link}}" type="button" class="btn btn-space btn-primary btn-rounded btn-sm" target="_blank">
                    {{$item->registerButton->text}}
                  </a>
                </div>
                @endif
            </div>
            </div>
        </div>

        <div class="section fp-autoa-height faqs-content ">
          <div class="main-content light-grey-bg">
            <div class="col-md-10 center-block row row_event " id="respiratory-digest" style="display: flex; flex-wrap: wrap;">
              @foreach ($items as $index => $blog)
              <div class="col-md-4 isotope">
                <div class="card card-event">
                  <div class="card-content text-left">
                    <p style="color:#015291;"><strong>Blog Author(s): {{$blog->authorTruncate}}</strong></p>
                    <h3 class="title" style="text-transform: none;">
                      @if($blog->uri)
                        <a href='{{$blog->uri}}'> {{$blog->titleTruncate}} </a>
                      @else
                        <a href="{{$_SERVER['REQUEST_URI']}}/{{$blog->slug}}"> {{$blog->titleTruncate}} </a>
                      @endif
                    </h3>
                    {!! $blog->shortLead !!}
                    </div>
                    <div class="card-action clearfix">
                      @if($blog->uri)
                        <a href="{{$blog->uri}}" class="btn btn-register">more</a>
                      @else
                        <a href="{{$_SERVER['REQUEST_URI']}}/{{$blog->slug}}" class="btn btn-register">more</a>
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

