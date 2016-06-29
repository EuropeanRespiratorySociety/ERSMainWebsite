@foreach ($items as $item)
    <div class="col-md-4 isotope">
        <div class="card card-event">          
            <div class="card-image" 
            @if(isset($item['image'])) 
                style="height:200px;max-height:200px" 
            @elseif(isset($item['image']) && isset($item['flags'])) 
                style="height:50px;" 
            @else 
                style="height:24px;" 
            @endif >
                @if(isset($item['type']))
                <span class="label {{ $item['typeColor'] }}">{{ $item['type'] }}</span>
                @endif
                @if(isset($item['flags']))
                <span class="label {{ 'label-'.$item['flags']['color'] }}">{{ $item['flags']['text'] }}</span>
                @endif
                @if(isset($item['image']))
                    <img class="" src="{{ $item['image']}}">
                @endif
            </div>
            <div class="card-content">
                <h3 class="title">
                    <a href="{{Request::path().'/'.$item['slug']}}">{{ $item['title'] }}</a>
                </h3>
                @if(isset($item['createdOn']))
                    <h4 class="date">{{ $item['createdOn'] }}</h4>
                @endif
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
            <a href="{{Request::path().'/'.$item['slug']}}"  class="btn btn-register">more</a>
            </div>
        </div>
    </div>
@endforeach