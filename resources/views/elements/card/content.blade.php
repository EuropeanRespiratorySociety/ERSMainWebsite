<div class="card-content">
    @if($item->earlybirdDeadline)
        <p class="btn-rounded early_bird">Early Bird deadline {{ $item->earlybirdDeadline }}</p>
    @endif
    <h3 class="title">
        @if($item->uri) 
            <a href="{{url($item->uri)}}">{{ $item->title }}</a>
        @elseif($item->slug)
            <a href="{{Request::path().'/'.$item->slug}}">{{ $item->title }}</a>
        @endif    
    </h3>
    @if($item->sponsors && $item->contentType == "event_grant")
        <div class="">
            <p class=""><b>{{$item->sponsors->text}}</b>
            </p>
        </div>
    @endif 
    @if($item->sponsors && $item->contentType == "event_award")
        <div class="">
            <p class=""><b>{{$item->sponsors->text}}</b>
            </p>
        </div>
    @endif 
    @if($item->createdOn && $item->type)
        @if($item->type == "News")
            <h4 class="date">{{ $item->createdOn }}</h4>
        @endif
    @endif
    @if($item->eventLocation)
    <p class="place"><span class="icon s7-map-marker"></span> {{ $item->eventLocation }}</p>
    @endif
    @if($item->eventDates)
        <p class="date"><span class="icon s7-date"></span> {{ $item->eventDates }}</p>
    @endif
    @if($item->shortLead)
    <div class="lead-card">{!! $item->shortLead !!}</div>
    @endif
</div>