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
          {{-- <h4 style="font-size: 14px; font-weight: bold;" class="date mod">latest version: {{ $item->_system->changeset }}</h4> --}}
          <hr>
        @endif
        @if($item->lead){!! $item->lead !!}@endif
        @if($item->body){!! $item->body !!}@endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <p><i>Respiratory Worldwide aims to stimulate communication and interaction between national and regional respiratory societies and ERS. These articles have not been (peer) reviewed and are not official ERS content.</i></p>
          @endif
        @endif
        @if($item->slug == "burden-of-asthma")
          <ul>
            <li>
              <strong>ERS Vision videos:</strong>
            </li>
          </ul>
          <h4>Professor Klaus Rabe discusses the major unmet needs in asthma</h4>
          <div class="row">
            <div class="col-md-10 center-block">
              <div class="videoWrapper"style="margin-top: 15px;margin-bottom: 15px;">
                <iframe src="https://www.youtube.com/embed/RwEiu90M0Gs"frameborder="0"allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <br/>
          <h4>Professor Erika von Mutius presents the major unmet needs in paediatric asthma</h4>
          <div class="row">
            <div class="col-md-10 center-block">
              <div class="videoWrapper"style="margin-top: 15px;margin-bottom: 15px;">
                <iframe src="https://www.youtube.com/embed/H-Q8tjtB_hM"frameborder="0"allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <br/>
          <h4>Severe asthma</h4>
          <p>
            Professors Guy Brusselle, Andrew Bush and Sally Wenzel explore the issues, recent advances and knowledge gaps as we move towards more effective diagnosis and treatment of severe asthma.
          </p>
          <div class="row">
            <div class="col-md-10 center-block">
              <div class="videoWrapper"style="margin-top: 15px;margin-bottom: 15px;">
                <iframe src="https://www.youtube.com/embed/HGuq0JQPgdk"frameborder="0"allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <br/>
          <h4><a href="http://www.ersvision.org/" target="_blank">Access more ERS Vision videos</a></h4>
        @endif
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
      <div class="right-photo-inner" @if(!$item->image && $item->video)style="width: inherit" @endif>
        @if($item->image)
          <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
        @endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <p><img src="https://cdn.ersnet.org/images/news/respiratory-logo.jpg" class="img-rounded img-responsive" style="width:350px;"></p>
           @endif
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
          <div class="videoWrapper" style="min-height:300px; @if(!$item->image && $item->video)margin-right: 10px; @endif">
            {!!$item->video!!} 
          </div>
        @endif
        @if(isset($relatedItems))
          @include('partials.related-items', array('relatedItems' => $relatedItems)) 
        @endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <div role="alert" class="alert alert-info alert-dismissible" style="text-align: left ;font-size:15px ; ">
              <i>This article is part of Respiratory Worldwide; a platform for leaders of respiratory societies to share their latest news about activities and events across the world.</i>
          </div>
          @endif
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
  {{-- @if($item->title == "ERS welcomes the positive results of NELSON trial")
    @include('partials.survey-monkey')  
  @endif --}}

@stop()