@foreach ($items as $item)
    <div class="col-md-4 isotope">
        <div class="card card-event">          
            <div class="card-image" 
            @if(isset($item['image'])) 
                style="max-height:300px;
                    @if(isset($item['imageSize']))
                        @if($item['imageSize'] == 'large') height:300px; @else height:150px; @endif
                    @else height:150px; @endif
                    background-repeat: no-repeat; background-image: url('{{ $item['image']}}'); background-position: center @if(isset($item['itemImageAlignment'])) {{$item['itemImageAlignment'] }} @else center @endif;"

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
            </div>
            <div class="card-content">
                <h3 class="title">
                    <a href="{{Request::path().'/'.$item['slug']}}">{{ $item['title'] }}</a>
                </h3>
                @if(isset($item['createdOn']) && isset($item['type']))
                    @if($item['type']== "News")<h4 class="date">{{ $item['createdOn'] }}</h4>@endif
                @endif
                @if(isset($item['eventDates']))
                    <p class="date">{{ $item['eventDates'] }}</p>
                @endif
                @if(isset($item['lead']))
                <div class="lead-card">{!! $item['lead'] !!}</div>
                @endif
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