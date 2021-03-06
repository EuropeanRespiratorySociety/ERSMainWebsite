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
  .rfmv-eb-notification{
    font-size: 16px;
    margin-bottom: 30px;
  }

  table{
    margin-top: 15px;
  }
  table thead {
    font-size: 15px;
  }
  table td {
    font-size: 16px;
  }
  .alert-mobile-position div.banner-text {
    font-family:DinPro,sans-serif;
    font-size: 16px;
    display: table-cell;
    vertical-align:middle;
    text-align: left;
    float: none;
    padding-right: 10px;
    width: 90%;
  }
  
  .alert-mobile-position div.banner-link {
    display: table-cell;
    vertical-align:middle;
    float: none;
  }
  
  .alert-mobile-position div.banner-link span {
    font-family:DinPro,sans-serif;
    font-size: 16px;
    background-color: #FFF;
    padding: 10px;
    border-radius: 3px;
    text-transform: uppercase;
    display: table-cell;
    vertical-align:middle;
    float: none;
    min-width: 160px;
  }

img[alt=float]{
  float: left;
  width: 130px;
  margin-right: 20px;
}

img[alt=float-rfmv-sponsor]{
  float: left;
  width: 170px;
  margin-right: 20px;
}

img[alt=float-event-sponsor-logo]{
  float: left;
  display: block;
  height: 90px;
  margin-right: 10px;
  margin-bottom: 5px;

}

@media screen and (min-width: 1024px){
  .alert-mobile-position span.banner-text {
    display: inline-block;
    line-height: 43px;
    margin-bottom: 0px;
  }

  .alert-mobile-position span.banner-link {
  display: block;
  width: auto;
  float: right;
  text-transform: uppercase;
  }
}

@media screen and (max-width: 480px){
  .btn .icon{
   display: none;
  }

  .alert-mobile-position div.banner-text {
      text-align: center;
      display: block;
      width: auto;
      margin-bottom: 5px;
    }

    .alert-mobile-position div.banner-link {
      display: block;
      width: 100%;
    }

    .alert-mobile-position div.banner-link span {
      display: block;
      width: 100%;
      
    }


}


}
</style>

<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: @if($item->slug == "lsc-accommodation-and-practical-information")left @else center @endif {{$item->imageAlignment}}">
            </div>
            @endif
            <div style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);box-sizing: border-box;padding-bottom: 30px;">
                <div class="page-head" style="margin-bottom: 15px;"><h2>{{$item->title}}</h2></div>
                <h4><a href="{{ $landingPage->link }}">{{ $landingPage->title }}</a></h4>
            </div>
            <div class="main-content">
              @if($item->registerButton->bannerText)
              <div class="row">
                <div class="alert alert-info alert-mobile-position col-md-8 col-xs-10  offset-xs-1 center-block" style="display: table; height: 100%;">
                  <div class="banner-text">
                    {!! $item->registerButton->bannerText !!}
                  </div>
                  @if($item->registerButton->link)
                    <div class="banner-link">
                      <span class="banner-link">
                        <a href="{{$item->registerButton->link}}" target="new_blank" style="color: #116FC3;">
                            {{ $item->registerButton->text or Register}}
                        </a>
                      </span>
                    </div>
                  @endif
                </div>
              </div>
              @endif

              @if($item->earlybirdDeadline)
                <p class="rfmv-eb-notification">Register before the early-bird deadline on <strong>{{ $item->earlybirdDeadline}}</strong> to benefit from reduced registration fees.</p>
              @endif

                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body !!}
                </div>

                @if($faculties)
                <div class="row" style="margin-top:50px;margin-bottom: 30px;">
                  @foreach ($faculties as $faculty)
                  <div class="col-md-4 xs-mb-15">
                      <img src="{{$faculty->imgSrc}}" class="img-circle">
                      <p class="photo_caption"><strong>{{$faculty->fullName}}</strong>
                        {!!$faculty->title!!} <br>
                        <a data-toggle="modal" data-target="#md-{{$faculty->id}}" type="button" class="">More</a>
                      </p>
                      <div id="md-{{$faculty->id}}" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
                                  <h3 class="modal-title">{{$faculty->fullName}}</h3>
                              </div>
                            <div class="modal-body">
                              <div class="text-left">
                                <p>{!!$faculty->description!!}
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  @endforeach
                </div>
                @endif





                @if($item->programme)  
                <div class="col-md-8 center-block text-center">
                  <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left" style="margin-bottom: 10px;">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    {{$item->programmeButtonText}} 
                  </a>
                </div>
                @endif 
                @if($item->externalLink->link)  
                <div class="col-md-8 center-block text-center">
                  <a href="{{$item->externalLink->link}}" target="new_blank"  class="btn btn-primary tab-register-bt"  style="margin-bottom: 10px;">
                    {{ $item->externalLink->text}}
                </a>
                </div>
                @endif 
                @if($item->practicalInfo)  
                <div class="col-md-8 center-block text-center">
                <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-practicalInfo"  style="margin-bottom: 10px;">
                  <span class="icon s7-info" style="font-size: 24px;"></span>
                  {{$item->practicalInfoButton ? $item->practicalInfoButton : 'Practical Info'}}
                </a>
                </div>
                @endif                 
                @if($item->body2)
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body2 !!}
                </div>
                @endif
                @if($item->body3)
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body3 !!}
                </div>
                @endif
                @if($item->body4)
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body4 !!}
                </div>
                @endif
                @if($relatedItems)
                <div class="row row_event col-md-offset-2" style="margin-bottom: 50px;">
                    @foreach ($relatedItems as $relatedItem)
                        <div class="col-md-5 isotope ">
                          <div class="card card-event">

                              
                            <div class="card-image"
                              @if($relatedItem->highResImage)
                                style="max-height:300px;height:150px;background-repeat: no-repeat; background-image: url('{{$relatedItem->highResImage}}'); 
                                background-position: center; background-size:cover;"
                                @endif
                                  style="height:50px;"  >

                                  @if(isset($relatedItem->registerButton) && isset($relatedItem->registerButton->text))
                                  <span class="label label-danger">{{$relatedItem->registerButton->text}}</span>
                                  @endif  

                            </div>
                            <div class="card-content">
                                    <h3 class="title">   
                                      @if(isset($relatedItem->uri)) 
                                        <a href="{{url($relatedItem->uri)}}">{{ $relatedItem->title }}</a>
                                      @elseif(isset($relatedItem->url))
                                        <a href="{{url($relatedItem->url)}}">{{ $relatedItem->title }}</a>
                                      @else
                                        {{ $relatedItem->title }}
                                      @endif  
                                    </h3>
                                    @if(isset($relatedItem->leadParagraph))
                                    <div class="lead-card">{!! $relatedItem->leadParagraph !!}</div>
                                    @endif 
                                </div>
                                <div class="card-action clearfix">
                                  @if(isset($relatedItem->uri)) 
                                    <a href="{{url($relatedItem->uri)}}" class="btn btn-register">more</a>
                                  @elseif(isset($relatedItem->url))
                                    <a href="{{url($relatedItem->url)}}" class="btn btn-register">more</a>                     
                                  @endif
                                </div>
                           </div>
                        </div>
                    @endforeach
                </div>
                @endif  

                @if($item->venue->postalCode || $item->venue->city || $item->venue->country)
                <div class="main-content" >
                  <div class="page-head"><h3>Venue information:</h3></div>
                  <div class="col-md-8 center-block lead text-left">
                      <p>
                          @if($item->venue->info){!!$item->venue->info!!}@endif
                          @if($item->venue->url)
                            <a target="_blank" href="{{$item->venue->url}}">
                          @endif 
                            @if($item->venue->name){{$item->venue->name}}@endif
                          @if($item->venue->url)
                            </a>
                          @endif
                          <br/>
                          @if($item->venue->phoneNumber)
                            Phone: {{$item->venue->phoneNumber}}<br>
                          @endif
                          @if($item->venue->streetAddress)
                            {{$item->venue->streetAddress}}<br>
                          @endif
                          @if($item->venue->streetAddress2)
                            {{$item->venue->streetAddress2}}<br>
                          @endif
                          @if($item->venue->streetAddress3)
                            {{$item->venue->streetAddress3}}<br>
                          @endif
                          @if($item->venue->postalCode){{$item->venue->postalCode}}@endif
                          @if($item->venue->city){{$item->venue->city}}@endif<br>
                          @if($item->venue->country){{$item->venue->country}}@endif
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  @if($item->loc->lat && $item->loc->long)
                    <div id="map" style="height: 400px;"></div>
                  @endif
                </div>
                @endif 
            </div>
        </div>
    </div>
</div>
@stop()  
@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop() 




