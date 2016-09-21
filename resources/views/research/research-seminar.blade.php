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
@section('structured-data')
  @include('partials.event-structured-data', array('item' => 
      [
        'url' => isset($item->url) ? $item->url : null ,
        'name' => $item->title,
        'startDate' => isset($item->startDate) ? $item->startDate : null,
        'endDate' => isset($item->endDate) ? $item->endDate : null,
        'performer' => isset($item->organisers) ? $item->organisers : null,
        'image' => isset($item->image) ? $item->image : null,
        'description' => isset($item->lead) ? $item->lead : null,
        'venueName' => isset($item->venue->name) ? $item->venue->name : null,
        'venueAddress' => isset($item->venue->streetAddress) ? $item->venue->streetAddress : null,
        'venueAddress2' => isset($item->venue->streetAddress2) ? $item->venue->streetAddress2 : null,
        'venuePostalCode' => isset($item->venue->postalCode) ? $item->venue->postalCode : null,
        'venueCity' => isset($item->venue->city) ? $item->venue->city : null,
        'venueCountry' => isset($item->venue->country) ? $item->venue->country : null
      ]
  ))
@stop()
@section('content')

<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 medium-grey-bg left-photo-map">
    @if(isset($item->image))
    <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
    @endif
      @if(isset($relatedItems))
        @include('partials.related-items', array('relatedItems' => $relatedItems)) 
      @endif
    </div>
    <div class="col-md-6 lighter-grey-bg ers-research-seminar-info">
      <div class="header">
        <div class="clearfix notification">
          @if(isset($item->flags) && $item->flags['color'] !== 'info')
          <p class="pull-right {{$item->flags['color'] }}">{{ $item->flags['text'] }}</p>
          @endif
          @if($item->fullyBooked)
              <p class="pull-right text-danger">Fully Booked</p>
          @endif
        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>@if(isset($item->eventDates)){{$item->eventDates}}@endif @if(isset($item->eventLocation)){{$item->eventLocation}} @endif</label>
        <!--<a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>@if(isset($item->type)){{$item->type}}@endif</em></p>
          View <a href="/research/research-seminars">all Research Seminars</a>
        </div>
        <div class="col-md-6 text-right">
          @if(isset($item->programmeFile))  
            <a href="{{$item->programmeFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left">
              <span class="icon s7-map" style="font-size: 24px;"></span>
              Seminar Programme
            </a>
          @endif
          @if(isset($item->programmeNotice))
          <p class="text-danger">{{$item->programmeNotice}}</p>
          @endif
        </div>
      </div>
      <h2 class="article-title">{{$item->title}}</h2>
      @if(isset($item->subtitle))<h4 class="article-title">{{$item->subtitle}}</h4>@endif
      @if(isset($item->organisers))
      <h5 class="ers-course-organisers"><b>Organisers :</b> {{$item->organisers}}</h5>
      @endif
      @if(isset($item->faculty))
      <h5 class="ers-course-organisers"><b>Faculty :</b> {{$item->faculty}}</h5>
      @endif

      <div class="article text-left">
        @if(isset($item->lead)){!!$item->lead!!}@endif
        @if(isset($item->body)){!!$item->body!!}@endif
      </div>
      @if(isset($item->sponsors))
      <div class="sponsor">
      <hr>
      @if(isset($item->sponsors['image']))
        <img src="{{$item->sponsors['image']}}">
      @endif
      @if(isset($item->sponsors['text']))
        <p>{{$item->sponsors['text']}}</p>
      @endif  
      </div>
      @endif
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
        </ul>

        <div class="tab-content text-left">
          <div id="venue" class="tab-pane active cont">
            
            <div class="">
              <div class="">
                @if(isset($item->flags) && $item->flags['color'] == 'info')
                  <div role="alert" class="alert alert-{{$item->flags['color'] }}">
                    {{ $item->flags['text'] }}
                  </div>
                @endif    
                @if(isset($item->practicalInfoFile))  
                  <a href="{{$item->practicalInfoFile->fileUrl}}" target="_blank" type="button" class="btn btn-light-primary text-left">
                    <span class="icon s7-map" style="font-size: 24px;"></span>
                    Practical Info
                  </a>
                @endif
                <p>Any questions? Please contact{!! Html::mailto('scientific@ersnet.org', 'scientific@ersnet.org') !!}</p>

              </div>
            </div>

          </div>
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

<!--Modal contents div-->
<!--Venue and accommodation-->
@if(isset($item->venue))
<div id="md-venue_accommodation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Seminar Venue</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            @if(isset($item->venue->url))
              <a target="_blank" href="{{$item->venue->url}}">
            @endif 
            @if(isset($item->venue->name))
              {{$item->venue->name}} 
            @endif  
            @if(isset($item->venue->url))
              </a>
            @endif
            <br/>
            @if(isset($item->venue->streetAddress))
            {{$item->venue->streetAddress}}<br>
            @endif
            @if(isset($item->venue->streetAddress2))
            {{$item->venue->streetAddress2}}<br>
            @endif
            @if(isset($item->venue->postalCode))
            {{$item->venue->postalCode}}@endif @if(isset($item->venue->city)){{$item->venue->city}}@endif<br>
            @if(isset($item->venue->country)){{$item->venue->country}}@endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@stop()  

@section('scripts')
    
@stop()