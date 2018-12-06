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
  @media (min-width: 1200px){
    #ersMainWebsite .main-content .card-congress {
      min-height: 332px;
      max-height: 332px;
    }
  }
</style>

<div class="ers-content home-content">
  <div id="fullpage">
    <div class="section fp-auto-height">
      <div class="top-box" style="background-image: url('{{$item->highResImage}}');background-position: center imageAlignment">
      </div>
    </div>

    <div class="section home-news-content fp-auto-height">
      <div class="main-content">
        <div class="page-head" style="border-bottom: none; margin: 20px 0 0">
          <h2 >{{$item->title}}</h2>
        </div>
        <div class="col-md-6 center-block lead">
            {!!$item->lead!!}
            {!!$item->body!!}
        </div>
    
        <div class="row center-block" style="margin-top:40px;">
          {{-- card 1 --}}
          <div class="col-md-4 isotope">
            <div class="card card-event home-news">
              {{-- image --}}
              <div class="card-image"
                style="max-height:300px;
                      height: 150px;
                      background-size:100%;
                      background-repeat: no-repeat; 
                      background-image: url('https://cdn.ersnet.org/preview/node/o:178f61c31c9d3f179037?name=image500&amp;size=500&amp;v=65590:f97bf01b744a122575a4'); 
                      background-position: center;">
              </div>
              {{-- content --}}
              <div class="card-content">
                <h3 class="title">
                    <a href="">ERS Congress 2019</a>
                </h3>
                <div class="lead-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
              </div>
              {{-- action --}}
              <div class="card-action clearfix">
                <a href="/professional-development/spirometry-training-programme"  class="btn btn-register">more</a>
              </div>  
            </div>
          </div>
          {{-- card 2 --}}
          <div class="col-md-4 isotope">
            <div class="card card-event home-news">
              <div class="card-image"
                style="max-height:300px;
                      height: 150px;
                      background-size:100%;
                      background-repeat: no-repeat; 
                      background-image: url('https://cdn.ersnet.org/preview/node/o:178f61c31c9d3f179037?name=image500&amp;size=500&amp;v=65590:f97bf01b744a122575a4'); 
                      background-position: center;">
              </div>
              <div class="card-content">
                <h3 class="title">
                    <a href="">2018 Sessions: Watch Now</a>
                </h3>
                <div class="lead-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
              </div>
              <div class="card-action clearfix">
                <a href="/professional-development/spirometry-training-programme"  class="btn btn-register">more</a>
              </div>  
            </div>
          </div>
          {{-- card 3 --}}
          <div class="col-md-4">
              <div class="card card-padded card-congress">
                <div class="card-image">
                    <img class="img-responsive" src="../images/london2016.jpg">
                </div>
                <div class="card-title">
                    <h3>Passed Congresses</h3>
                </div>                 
                <div class="card-content" style="padding-left: 50px;">
                    <ul style="font-size: 16px; margin-top: 15px;">
                      <li class="text-left"><a href="" target="_blank">Paris 2018</a></li>
                      <li class="text-left"><a href="" target="_blank">Paris 2018</a></li>
                      <li class="text-left"><a href="" target="_blank">Paris 2018</a></li>
                      <li class="text-left"><a href="" target="_blank">Paris 2018</a></li>
                    </ul>
                </div>
              </div>
          </div>
          {{-- <div class="col-md-4 isotope">
              <div class="card card-event home-news">
                <div class="card-image"
                  style="max-height:300px;
                        height: 150px;
                        background-size:100%;
                        background-repeat: no-repeat; 
                        background-image: url('https://cdn.ersnet.org/preview/node/o:178f61c31c9d3f179037?name=image500&amp;size=500&amp;v=65590:f97bf01b744a122575a4'); 
                        background-position: center;">
                </div>
                <div class="card-content">
                  <h3 class="title">
                      <a href="">ERS Congress 2019</a>
                  </h3>
                  <div class="lead-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
                <div class="card-action clearfix">
                  <a href="/professional-development/spirometry-training-programme"  class="btn btn-register">more</a>
                </div>  
              </div>
          </div> --}}


        </div>{{-- close the row for the cards --}}


    
      </div>
    </div>  



  </div>
</div>
@stop()


@section('scripts')
    
@stop()