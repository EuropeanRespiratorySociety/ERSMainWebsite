@foreach ($items as $item)
@if(!isset($class))
    <div class="col-md-4 isotope">
@else
    <div class="{{$class}} isotope">  
@endif      
        <div class="card card-event">            
            @include('elements.card.image', array('item' => $item))
            @include('elements.card.content', array('item' => $item))

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