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


<div class="ers-content article-items">
    <div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif

            <div class="main-content" style="background-color: #fff;padding-bottom: 40px;">
              <div class="clearfix notification">
                @if($item->flags)
                  <p style="margin-top:10px;padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
                @endif 
              </div>
              <div class="page-head">
                <h2 class="">{{$item->title}}</h2>
              </div>
              <div class="col-md-7 center-block lead " style="margin-bottom:30px;">
                <div class="text-left">
                  @if(isset($item->lead)){!!$item->lead!!}@endif
                </div>
              </div>
            </div>
            <div class="article-text">
              <div class="main-content" style="padding-top: 10px; margin-bottom: 80px;">
                <div class="row">
                  <div class="col-md-12 center-block lead text-left">
                    {{-- Alphabetical nav start --}}
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#a">A</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#b">B</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#c">C</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#d">D</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#e">E</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#f">F</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#g">G</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#h">H</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#i">I</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#j">J</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#k">K</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#l">L</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#m">M</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#n">N</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#o">O</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#p">P</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#q">Q</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#r">R</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#s">S</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#t">T</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#u">U</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#v">V</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#w">W</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#x">X</a></li>
                        <li class="page-item"><a class="page-link" href="covid-19-guidelines-and-recommendations-directory#y">Y</a></li>
                      </ul>
                    </nav>
                    {{-- Alphabetical nav end --}}

                    @if(isset($item->body)){!!$item->body!!}@endif
                  </div>
                  <div class="text-left" style="font-size: 16px;font-family: DinPro,sans-serif;padding: 5px 15px; background: #fff; margin-bottom: 40px;" >
                    <h5 style="margin-bottom: 5px;"><strong>Please note: </strong></h5>
                    <p>
                      Due to the ongoing nature of the outbreak, the documents have not been prepared using the typical methods for practice guidelines according to classic ERS methodology.
                    </p>
                  </div>

                </div>
              </div>
            </div>

        </div>
    </div>
</div>
@stop()  

