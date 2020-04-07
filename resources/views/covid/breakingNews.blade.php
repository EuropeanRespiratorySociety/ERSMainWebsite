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
              <div class="col-md-7 center-block lead" style="margin-bottom:30px;">
                <div class="text-left">
                  @if(isset($item->lead)){!!$item->lead!!}@endif
                </div>
              </div>
            </div>
            <div class="article-text" style="margin-bottom: 80px;">
              <div class="main-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card card-primary card-padded"  style="min-height:70px;">
                        <div class="card-image">
                            <img class="img-responsive" src="../images/london2016.jpg">
                        </div>
                        
                        <div class="card-title" style="min-height:70px;">
                            <h3 class="text-left">Breaking news</h3>
                        </div> 

                        <div class="card-action">
                            <a href="https://ers.box.com/v/COVID19-Breaking-News-Round-Up" target="new_blank" class="btn btn-default pull-right">Download</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card card-primary card-padded">
                        <div class="card-image">
                            <img class="img-responsive" src="../images/london2016.jpg">
                        </div>
                        
                        <div class="card-title" style="min-height:70px;">
                            <h3 class="text-left">Research and data round-up</h3>
                        </div> 

                        <div class="card-action">
                            <a href="https://ers.box.com/v/COVID19-Research-Round-Up" target="new_blank" class="btn btn-default pull-right">Download</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card card-primary card-padded">
                        <div class="card-image">
                            <img class="img-responsive" src="../images/london2016.jpg">
                        </div>
                        
                        <div class="card-title" style="min-height:70px;">
                            <h3 class="text-left">Clinical trials</h3>
                        </div> 

                        <div class="card-action">
                            <a href="https://ers.box.com/v/COVID19-Clinical-Trial-Update" target="new_blank" class="btn btn-default pull-right">Download</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="text-left" style="font-size: 16px;margin: 30px 15px 80px; font-family: DinPro,sans-serif; padding: 5px 15px; background: #fff;">
                  <h5 style="margin-bottom: 5px;"><strong>Disclaimer:</strong></h5>
                  <p>
                    The content shared in the Daily round-up section is gathered from a range of external sources. The European Respiratory Society (ERS) is not responsible for the accuracy of the content published by external sources.
                  </p>
                </div>
              </div>

        </div>
    </div>
</div>
@stop()  

