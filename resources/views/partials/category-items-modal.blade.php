@foreach ($items as $item)
@if(!isset($class))
    <div class="col-md-4 isotope">
@else
    <div class="{{$class}} isotope">  
@endif      
        <div class="card card-event">            
            @include('elements.card.image', array('item' => $item))

            <div class="card-content">
                @if($item->earlybirdDeadline)
                    <p class="btn-rounded early_bird">Early Bird deadline {{ $item->earlybirdDeadline }}</p>
                @endif
                <h3 class="title">
                        <a data-toggle="modal" data-target="#{{$item->slug}}">{{ $item->title }}</a>  
                </h3>
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
                @if($item->lead)
                <div class="lead-card">{!! $item->lead !!}</div>
                @endif
            </div>

            <div class="card-action clearfix">
            @if($item->registerButton->link)
            <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-register">{{$item->registerButton->text or Register }}</a>
            @endif
            @if($item->lead || $item->body)
                @if($item->contentType == "event_fellowship_special" && $item->slug)
                <a href="{{Request::path().'/'.$item->slug}}" class="btn btn-register">More</a>
                @else
                <a data-toggle="modal" data-target="#{{$item->slug}}" class="btn btn-register">more</a>
                @endif
            @endif
            </div>
        </div>
    </div>
    <!-- End Lead -->
@endforeach