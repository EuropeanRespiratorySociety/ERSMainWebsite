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


  @media screen and (max-width: 480px) {
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


  </style>

<div class="ers-content">
  <div id="fullpage">
    <div class="section fp-auto-height">
        @if($item->highResImage)
        <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
        </div>
        @endif
        <div class="main-content">
          <div class="page-head" style="margin-bottom: 0px;">
            <h2>{{$item->title}}</h2>
            @if($item->subTitle)
            <h3 class="text-center clearfix date-venue" style="font-family:DinPro,sans-serif;font-size: 20px;color:#016fc4;margin-top:0;">
              {{$item->subTitle}}
            </h3>
            @endif
          </div>

          <h3 class="text-center clearfix date-venue" style="font-family:DinPro,sans-serif;font-size: 20px;margin-bottom: 20px;margin-top: 35px;">
            {{$item->eventDates}} @if(isset($item->eventLocation)){{$item->eventLocation}}@endif
          </h3>


          @if($item->registerButton->bannerText)
          <div class="row">
            <div class="alert alert-info alert-mobile-position col-md-8 col-xs-10  offset-xs-1 center-block" style="display: table; height: 100%;">
              <div class="banner-text">
                {{ $item->registerButton->bannerText }}
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



          <div class="col-md-8 center-block lead text-left" style="margin-top: 50px;">
            {!! $item->body !!}
          </div>

            @if($relatedItems)
            <div class="col-md-12 row row_event" style="padding-top: 30px;">
                @foreach ($relatedItems as $relatedItem)
                    <div class="col-md-4 isotope">
                      <div class="card card-event">
                        @if($relatedItem->highResImage)
                          <div class="card-image" style="max-height:300px;height:150px;background-repeat: no-repeat; background-image: url('{{$relatedItem->highResImage}}'); 
                              background-position: center; background-size:cover;">
                          </div>
                        @endif

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
        </div>

        <div class="main-content" style="background: #f1f1f1; padding-bottom: 40px;">
          <div class="page-head"><h3>Venue information:</h3></div>
            <div class="col-md-7 center-block lead text-left" style="background: #fff; padding: 30px; border: 1px solid #eee;">
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
    </div>
</div>
@stop()  
@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()



