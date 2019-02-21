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
</style>

<div class="ers-content article-items">
  <div class="row">
    <p>{{$item->digestType}}</p>
    <h2 class="article-title">{{$item->title}}</h2>
    <p>{{$item->createdOn}}</p>
    <p>Author(s): {{$item->author}}</p>
    <p><a href="{{$item->journalLink}}" target="_blank">{{$item->journal}}</a></p>
    @if($item->diseases)
      @foreach ($item->diseases as $disease)
        <p>{{$disease}}</p>
      @endforeach
    @endif
    @if($item->methods)
      @foreach ($item->methods as $method)
        <p>{{$method}}</p>
      @endforeach
    @endif
    <p>Digest Author(s): {{$item->digestAuthor}}</p>
    @if($item->lead)<p>{!! $item->lead !!}</p>@endif
    @if($item->comments == true)
    <hr>
    <div id="disqus_thread"></div>
    @endif
  </div>
</div>
@stop()  