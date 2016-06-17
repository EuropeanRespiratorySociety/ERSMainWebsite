@foreach ($items as $item)
@if(!isset($class))
    <div class="col-md-4">
@else
    <div class="{{$class}}">  
@endif      
        <div class="card card-event" style="min-height:0;">
            @if(isset($item['type']))
            <span class="label {{ $item['typeColor'] }}">{{ $item['type'] }}</span>
            @endif
            @if(isset($item['flags']))
            <span class="label {{ 'label-'.$item['flags']['color'] }}">{{ $item['flags']['text'] }}</span>
            @endif

            <div class="card-image">
                @if(isset($item['image']))
                    <img class="img-responsive" src="{{ $item['image']}}">
                @endif
            </div>

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
            @if(!isset($item['type']))
            <a href="professional-development/fellowships/{{$item['slug']}}" class="btn btn-register">more</a>
            @else
            <a data-toggle="modal" data-target="#{{$item['slug']}}" class="btn btn-register">more</a>
            @endif
            </div>
        </div>
    </div>
    <!-- End Lead -->
@endforeach