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
            <div style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);box-sizing: border-box;padding-bottom: 30px;">
                <div class="page-head" style="margin-bottom: 15px;"><h2>{{$item->title}}</h2></div>
                <p>View <a href="congress-and-events/ers-respiratory-failure-and-mechanical-ventilation-conference">all RF&MV</a></p>
            </div>
            <div class="main-content">
              {{-- <p>View <a href="congress-and-events/ers-respiratory-failure-and-mechanical-ventilation-conference">all RF&MV</a></p>  
              <div class="page-head"><h2>{{$item->title}}</h2></div> --}}
              @if($item->registerButton->link)
                <div role="alert" class="alert alert-info alert-dismissible center-block col-md-5 col-xs-12">
                  <div class="row text-center" style="height: 80px; position: relative;">
                    <div class="col-md-8 col-xs-12 ">
                      <div style="position: absolute; top: 50%; -webkit-transform : translateY(-50%); transform : translateY(-50%);">
                        <span class="icon s7-info"></span><span style="font-size: 18px;">{{ $item->registerButton->bannerText }}</span>
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                      <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                          {{ $item->registerButton->text or Register}}</a>
                    </div>
                  </div>
                </div>
              @endif
              {{-- @if($item->registerButton->link)
              <p>
                  {{ $item->registerButton->bannerText }}
              <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                    {{ $item->registerButton->text or Register}}
              </a>
            </p>
            @endif --}}
              @if($item->earlybirdDeadline)
              <p>Register before the early-bird deadline on <strong>{{ $item->earlybirdDeadline}}</strong> to benefit from a €50 discount on registration fees.</p>
            @endif
                <div class="col-md-7 center-block lead text-left">
                  {!! $item->body !!}
                </div>
                @if($item->practicalInfo)  
                <div class="col-md-7 center-block lead text-left">
                <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-practicalInfo">
                  <span class="icon s7-info" style="font-size: 24px;"></span>
                  {{$item->practicalInfoButton ? $item->practicalInfoButton : 'Practical Info'}}
                </a>
              </div>
                @endif
                @if($item->programme)  
                <div class="col-md-7 center-block lead text-left">
                  <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    {{$item->programmeButtonText}} 
                  </a>
                </div>
                @endif
                @if($item->externalLink->link)
                <div class="col-md-7 center-block lead text-left">
                  <a href="{{$item->externalLink->link}}" target="new_blank"  class="btn btn-primary tab-register-bt">
                      {{ $item->externalLink->text}}
                  </a>
                </div>
                @endif
                @if($item->body2)
                <div class="col-md-7 center-block lead text-left">
                  {!! $item->body2 !!}
                </div>
                @endif
                @if($item->body3)
                <div class="col-md-7 center-block lead text-left">
                  {!! $item->body3 !!}
                </div>
                @endif
                @if($item->body4)
                <div class="col-md-7 center-block lead text-left">
                  {!! $item->body4 !!}
                </div>
                @endif
                @if($relatedItems)
                <div class="row row_event">
                    @foreach ($relatedItems as $relatedItem)
                        <div class="col-md-4 isotope">
                            <div class="card card-event">

                                <div class="card-image"
                                @if($relatedItem->image)
                                    style="max-height:300px;
                                        @if($relatedItem->imageSize)
                                            @if($relatedItem->imageSize == 'large') height:300px; @else height:150px; @endif
                                        @else height:150px; @endif
                                        @if($relatedItem->itemImageBackgroundSize)
                                            background-size: {{$relatedItem->itemImageBackgroundSize}};
                                        @else
                                            background-size:100%;
                                        @endif
                                        background-repeat: no-repeat; 
                                        background-image: url('{{ $relatedItem->image}}'); 
                                        background-position: center {{$relatedItem->itemImageAlignment or center }};"
                                @endif style="height:50px;"  >
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
                <div class="main-content">
                    <div class="page-head"><h4>Venue information:</h4></div>
                      <div class="col-md-7 center-block lead text-left">
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
                            @if($item->loc->lat && $item->loc->long)
                                <div id="map"></div>
                            @endif
                          </p>
                      </div>
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




