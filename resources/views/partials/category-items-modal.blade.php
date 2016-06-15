@foreach ($items as $item)
    <div class="col-md-4">
        <div class="card card-event">
            @if(isset($item['type']))
            <span class="label {{ $item['typeColor'] }}">{{ $item['type'] }}</span>
            @endif
             @if(isset($item['image']))
            <div class="card-image">
                <img class="img-responsive" src="{{ $item['image']}}">
            </div>
            @endif
            <div class="card-content">
                <p class="title">{{ $item['title'] }}
                    <!--<span>Next upcomming item</span>-->
                </p>
                @if(isset($item['eventDates']))
                    <p class="date">{{ $item['eventDates'] }}</p>
                @endif
                <div class="lead-card">{!! $item['lead'] !!}</div>
                @if(isset($item['earlybirdDeadline']))
                <p class="btn-rounded early_bird">Early Bird deadline {{ $item['earlybirdDeadline'] }}</p>
                @endif
                @if(isset($item['eventLocation']))
                <p class="place"><span class="icon s7-map-marker"></span>{{ $item['eventLocation'] }}</p>
                @endif
            </div>
            <div class="card-action clearfix">
            @if(isset($item['registerButton']['link']))
            <a href="{{$item['registerButton']['link']}}" target="new_blank"  class="btn btn-register">register</a>
            @endif
            <a data-toggle="modal" data-target="#{{$item['slug']}}" class="btn btn-register">more</a>
            </div>
        </div>
    </div>
    <!-- End Lead -->
    <!-- Start Modal -->
    <div id="{{$item['slug']}}" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title">{{$item['title']}}</h3>
          </div>
          <div class="modal-body">
            <div class="text-left">
            @if(isset($item['sponsors']))
            <div class="">
                <h6 class="">Sponsor: {{$item['sponsors']['text']}}
                    <img style="height:25px;" src="{{ $item['sponsors']['image']}}" class="img-responsive">
                </h6>
            </div>
            @endif  
              {!! $item['lead'] !!}
              @if(isset($item['body'])){!! $item['body'] !!}@endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
@endforeach