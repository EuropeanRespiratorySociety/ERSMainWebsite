{{dd($items)}}
@foreach ($items as $item)
@if(!isset($class))
    <div class="col-md-4 isotope">
@else
    <div class="{{$class}} isotope">  
@endif    
    <div class="card card-event">
        @include('elements.card.image', array('item' => $item)) 

        <div class="card-content">
            <p class="title">{{ $item->title }}
                <!--<span>Next upcomming item</span>-->
            </p>
            @if($item->eventDates)
            <p class="date">{{ $item->eventDates }}</p>
            @endif
            <div class="lead-card">@if($item->shortLead){{ $item->shortLead }}@endif</div>
            @if($item->earlybirdDeadline)
            <p class="btn-rounded early_bird">Early Bird deadline {{ $item->earlybirdDeadline }}</p>
            @endif
            @if($item->eventLocation)
            <p class="place"><span class="icon s7-map-marker"></span>{{ $item->eventLocation }}</p>
            @endif
        </div>
        <div class="card-action clearfix">
            @if($item->registerButton->link && !$item->fullyBooked)
            <a href="{{$item->registerButton->link}}" target="new_blank"  class="pull-left btn btn-register">
                @if($item->registerButton->text) {{ $item->registerButton->text }} @else register @endif
            </a>
            @endif
            @if($item->uri)
                @if($item->uri != 'false')
                    <a href="{{url($item->uri)}}" class="pull-right btn btn-register">more</a>
                @endif    
            @endif
        </div>
    </div>
</div>
@endforeach