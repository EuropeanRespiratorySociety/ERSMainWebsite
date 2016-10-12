<div class="card-content">
    <h3 class="title">
        @if($item->uri) 
            <a href="{{url($item->uri)}}">{{ $item->title }}</a>
        @elseif($item->slug)
            <a href="{{Request::path().'/'.$item->slug}}">{{ $item->title }}</a>
        @endif    
    </h3>
    @if($item->createdOn && $item->type)
        @if($item->type == "News")
            <h4 class="date">{{ $item->createdOn }}</h4>
        @endif
    @endif
    @if($item->eventDates)
        <p class="date">{{ $item->eventDates }}</p>
    @endif
    @if($item->lead)
    <div class="lead-card">{!! $item->lead !!}</div>
    @endif
    @if($item->earlybirdDeadline)
    <p class="btn-rounded early_bird">Early Bird deadline {{ $item->earlybirdDeadline }}</p>
    @endif
    @if($item->eventLocation)
    <p class="place"><span class="icon s7-map-marker"></span>{{ $item->eventLocation }}</p>
    @endif
</div>