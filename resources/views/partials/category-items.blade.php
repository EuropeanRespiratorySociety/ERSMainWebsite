@foreach ($items as $item)
    <div class="col-md-4">
        <div class="card card-event">
            <span class="label label-school">{{ $item['type'] }}</span>
             @if(isset($item['image']))
            <div class="card-image">
                <img class="" src="{{ $item['image']}}">
            </div>
            @endif
            <div class="card-content">
                <p class="title">{{ $item['title'] }}
                    <!--<span>Next upcomming item</span>-->
                </p>
                @if(isset($item['eventDates']))
                    <p class="date">{{ $item['eventDates'] }}</p>
                @endif
                <div class="lead-card">{!! $item['shortLead'] !!}</div>
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
            <a href="{{Request::path().'/'.$item['slug']}}" target="new_blank"  class="btn btn-register">more</a>
            </div>
        </div>
    </div>
@endforeach