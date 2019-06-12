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
  table{
    margin-top: 15px;
  }
  table thead {
    font-size: 15px;
  }
  table td {
    font-size: 16px;
  }
.alert-mobile-position span.banner-text {
  display: block;
  width: auto;
  line-height: 22px;
  margin-bottom: 10px;
  text-align: center;
}

.alert-mobile-position span.banner-link {
  display: block;
  width: auto;
  text-align: center;
  text-transform: uppercase;
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
</style>

<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif
            <div style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);box-sizing: border-box;padding-bottom: 30px;">
                <div class="page-head" style="margin-bottom: 15px;"><h2>{{$item->title}}</h2></div>
                <p>View <a href="congress-and-events/ers-respiratory-failure-and-mechanical-ventilation-conference">all RF&MV</a></p>
            </div>
            <div class="main-content">
              @if($item->registerButton->link)
                <div role="alert" class="alert alert-info alert-dismissible alert-mobile-position center-block col-md-8 col-xs-12" style="margin-bottom: 10px;padding: 10px 18px;">
                  <div class="row ">
                    <div class="col-md-12 col-xs-12 text-left">
                      <span class="banner-text" style="font-size: 16px;">{{ $item->registerButton->bannerText }}</span>
                      <span class="banner-link" style="font-family:DinPro,sans-serif;font-size: 16px;background-color: #FFF; padding: 10px;border-radius: 3px;">
                        <a href="{{$item->registerButton->link}}" target="new_blank" style="color: #116FC3;">
                            {{ $item->registerButton->text or Register}}
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              @endif
              @if($item->earlybirdDeadline)
              <p>Register before the early-bird deadline on <strong>{{ $item->earlybirdDeadline}}</strong> to benefit from a €50 discount on registration fees.</p>
            @endif
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body !!}
                </div>
                @if($item->practicalInfo)  
                <div class="col-md-8 center-block lead text-left">
                <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-practicalInfo">
                  <span class="icon s7-info" style="font-size: 24px;"></span>
                  {{$item->practicalInfoButton ? $item->practicalInfoButton : 'Practical Info'}}
                </a>
              </div>
                @endif
                @if($item->programme)
                <div class="col-md-7 col-xs-12 row center-block" style="margin-bottom: 30px;">
                  <div class="col-lg-6 col-md-12 col-xs-12 text-center" style="margin-bottom: 20px;">
                    <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                      <span class="icon s7-map" style="font-size: 24px;"></span>
                      {{$item->programmeButtonText}} 
                    </a>
                  </div>
                @endif
                @if($item->externalLink->link)
                  <div class="col-lg-6 col-md-12 col-xs-12 text-center">
                    <a href="{{$item->externalLink->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                        {{ $item->externalLink->text}}
                    </a>
                  </div>
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
                                style="max-height:300px;
                                  @if($relatedItem->imageSize)
                                  @if($relatedItem->imageSize == 'large') height:300px; @else height:150px; @endif
                                    @else height:150px; 
                                  @endif
                                  @if($relatedItem->itemImageBackgroundSize)
                                    background-size: {{$relatedItem->itemImageBackgroundSize}};
                                    @else
                                    background-size:100%;
                                  @endif
                                  background-repeat: no-repeat; 
                                  background-image: url('{{ $relatedItem->highResImage}}'); 
                                  background-position: center {{$relatedItem->itemImageAlignment or center }};"
                                  @endif
                                  style="height:50px;"  >
                                  @if($relatedItem->registerButton->text)
                                  <span class="label label-danger">{{$relatedItem->registerButton->text}}</span>
                                  @endif
                            </div>
                            <div class="card-content">
                                    <h3 class="title">   
                                      @if($relatedItem->uri) 
                                        <a href="{{url($relatedItem->uri)}}">{{ $relatedItem->title }}</a>
                                      @elseif($item->url)
                                        <a href="{{url($relatedItem->url)}}">{{ $relatedItem->title }}</a>
                                      @else
                                        {{ $relatedItem->title }}
                                      @endif  
                                    </h3>
                                    <div class="lead-card">{!! $relatedItem->lead !!}</div>
                                </div>
                                <div class="card-action clearfix">
                                  @if($relatedItem->uri) 
                                    <a href="{{url($relatedItem->uri)}}" class="btn btn-register">more</a>
                                  @elseif($item->url)
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




