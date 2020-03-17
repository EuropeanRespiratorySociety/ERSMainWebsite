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
    #ersMainWebsite .event-items-content .main-content .md-chips{
      margin: 6px 0;
    }
    #ersMainWebsite .event-items-content .main-content .md-chips .md-chip{
      margin: 0 5px 3px 0;
      display: inline-block;
      padding: 6px 12px 0;
      border-radius: 28px;
      font-size: 13px;
      height:28px;
    }

    div.md-chip-disease{
      background: #F3E5F5;
      color: #4A148C;
    }

    div.md-chip-method{
      background: #D0F8CE;
      color: #0D5302;
    }




</style>

<div class="ers-content event-items-content">
    <div class="main-content">
      <div class="col-md-7 center-block lead text-left">

        <div class="row" style="margin-top:40px;">
            <div class="col-md-6 col-xs-6 text-left event-items-category">
              <p><em>{{$item->digestType}}</em></p>
                View <a href="/coronavirus/discussion-forum">all Discussion</a>
            </div>
        </div>
          <h2 class="article-title" style="margin-top:50px;">{{$item->title}}</h2>
          <div style="margin: 30px 0 8px;">
            <h4 style="font-family: Amiri, serif;"><strong>Author(s):</strong> {{$item->author}}</h4>
            <p><a href="{{$item->journalLink}}" target="_blank">{{$item->journal}}</a></p>
          </div>
          @if($item->diseases || $item->methods)
            <div class="md-chips">
              @if($item->diseases)
                @foreach ($item->diseases as $disease)
                  <div class="md-chip md-chip-disease">{{$disease}}</div>
                @endforeach
              @endif
              @if($item->methods)
                @foreach ($item->methods as $method)
                  <div class="md-chip md-chip-method">{{$method}}</div>
                @endforeach
              @endif
            </div>
          @endif
          <div style="margin-top:60px;">
            <p ><span style="color:#015291;font-family: Amiri, serif;"><strong>Digest Author(s):</strong> {{$item->digestAuthor}}</span>&nbsp;/&nbsp;{{$item->createdOn}}</p>
            @if($item->lead)
              <div class="lead center-block" style="font-family: Amiri, serif;">{!! $item->lead !!}</div>
            @endif
          </div>
          @if($item->comments == true)
          <hr>
          <div id="disqus_thread"></div>
          @endif
      </div>{{-- col-md-7 --}}
    </div>{{-- main-content --}}
</div> {{-- ers-content --}}
@stop()  