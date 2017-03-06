@foreach ($items as $item)
    @if(!isset($class))
        <div class="col-md-4 isotope">
    @else
        <div class="{{$class}} isotope">  
    @endif 
            <div class="card card-event"> 
                @if($item->video)
                @include('elements.card.video', array('item' => $item))       
                @else
                @include('elements.card.image', array('item' => $item))
                @endif       
                @include('elements.card.content', array('item' => $item))
                @include('elements.card.action', array('item' => $item))
            </div>
        </div>
@endforeach