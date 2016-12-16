@foreach ($items as $item)
    @if(!isset($class))
        <div class="col-md-4 isotope">
    @else
        <div class="{{$class}} isotope">  
    @endif 
            <div class="card card-event"> 
                @include('elements.card.image', array('item' => $item))       
                @include('elements.card.content', array('item' => $item))
                @include('elements.card.action', array('item' => $item))
            </div>
        </div>
@endforeach