@foreach ($items as $item)
    <div class="col-md-4">
        <div class="card card-event">
            <span class="label label-school">{{ $item['type'] }}</span>
             @if(isset($item['image']))
            <div class="card-image">
                <img class="img-responsive" src="{{ $item['image']}}">
            </div>
            @endif
            <div class="card-content">
                <p class="title">{{ $item['title'] }}
                    <span>Next upcomming item</span>
                </p>
                <p class="date">{{ $item['eventDates'] }}</p>
                <div class="lead-card">{!! $item['shortLead'] !!}</div>
                <p class="btn-rounded early_bird">Early Bird deadline {{ $item['earlybirdDeadline'] }}</p>
                <p class="place"><span class="icon s7-map-marker"></span>{{ $item['eventLocation'] }}</p>
            </div>
            <div class="card-action clearfix">
            @if(isset($item['registerButton']['link']))
            <a href="{{$item['registerButton']['link']}}" target="new_blank"  class="btn btn-register">register</a>
            @endif
            <a href="professional-development/courses/{{$item['slug']}}" target="new_blank"  class="btn btn-register">more</a>
            </div>
        </div>
    </div>
@endforeach