@foreach ($items as $item)
@if(!isset($class))
    <div class="col-md-4 isotope">
@else
    <div class="{{$class}} isotope">  
@endif    
    <div class="card card-event">
        <div class="card-image" 
        @if(isset($item['image'])) 
                style="max-height:300px;
                    @if(isset($item['imageSize']))
                        @if($item['imageSize'] == 'large') height:300px; @else height:150px; @endif
                    @else height:150px; @endif
                    @if(isset($item['itemImageBackgroundSize']))
                        background-size: {{$item['itemImageBackgroundSize']}};
                    @else
                        background-size:100%;
                    @endif
                    background-repeat: no-repeat; 
                    background-image: url('{{ $item['image']}}'); 
                    background-position: center @if(isset($item['itemImageAlignment'])) {{$item['itemImageAlignment'] }} @else center @endif;"

        @elseif(isset($item['image']) && isset($item['flags'])) 
            style="height:50px;" 
        @else 
            style="height:24px;" 
        @endif >
            @if(isset($item['type']))
            <span class="label {{ $item['typeColor'] }}">{{ $item['type'] }}</span>
            @endif
            @if(isset($item['flags']) && $item['flags']['color'] !== 'info')
            <span class="label {{ 'label-'.$item['flags']['color'] }}">{{ $item['flags']['text'] }}</span>
            @endif
            @if($item['fullyBooked'])
            <span class="label label-danger">Fully Booked</span>
            @endif
        </div>

        <div class="card-content">
            <p class="title">{{ $item['title'] }}
            </p>
            @if(isset($item['subtitle']))
            <h4 class="">{{ $item['subtitle'] }}</h4>
            @endif
            @if(isset($item['eventDates']))
            <p class="date">{{ $item['eventDates'] }}</p>
            @endif
            <div class="lead-card">@if(isset($item['shortLead'])){{ $item['shortLead'] }}@endif</div>
            @if(isset($item['earlybirdDeadline']))
            <p class="btn-rounded early_bird">Early Bird deadline {{ $item['earlybirdDeadline'] }}</p>
            @endif
            @if(isset($item['eventLocation']))
            <p class="place"><span class="icon s7-map-marker"></span>{{ $item['eventLocation'] }}</p>
            @endif
        </div>
        <div class="card-action clearfix">
            @if(isset($item['registerButton']['link']) && !$item['fullyBooked'])
            <a href="{{$item['registerButton']['link']}}" target="new_blank"  class="pull-left btn btn-register">register</a>
            @endif
            @if(isset($item['uri']))
                @if($item['uri'] != 'false')
                    <a href="{{url($item['uri'])}}" class="pull-right btn btn-register">more</a>
                @endif    
            @endif
        </div>
    </div>
</div>
@endforeach