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
              <div class="col-md-10 center-block row row_event " id="respiratory-digest" style="display: flex; flex-wrap: wrap;">
                @foreach ($items as $index => $digest)
                  <div class="col-md-4 isotope">
                    <div class="card card-event">
                      <div class="card-image" style="height:24px;">
                        @if($digest->isCovid19)<span class="label label-danger">COVID-19</span>@endif
                      </div>
                      <div class="card-content text-left" style="padding-top: 0px">
                        <p class="btn-rounded early_bird" >{{$digest->digestTypeTruncate}}</p>
                        <p style="color:#015291;"><strong>Digest Author(s): {{$digest->digestAuthorsTruncate}}</strong></p>
                        <h3 class="title" style="text-transform: none;">
                          @if($digest->uri)
                            <a href='{{$digest->uri}}'> {{$digest->titleTruncate}} </a>
                          @else
                            <a href="{{$_SERVER['REQUEST_URI']}}/{{$digest->slug}}"> {{$digest->titleTruncate}} </a>
                          @endif
                        </h3>
                        <p>Author(s): {{$digest->authorTruncate}} </p>
                        <p><a href="{{$digest->journalLink}}"target="_blank">{{$digest->journalTruncate}}</a></p>
                        {!! $digest->shortLead !!}
                      </div>'
                      <div class="card-action clearfix">
                        @if($digest->uri)
                          <a href="{{$digest->uri}}" class="btn btn-register">more</a>
                        @else
                          <a href="{{$_SERVER['REQUEST_URI']}}/{{$digest->slug}}" class="btn btn-register">more</a>
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

