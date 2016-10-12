@foreach ($items as $item)
    <div class="col-md-4 isotope">
        <div class="card card-event">          
            <div class="card-image" 
            @if($item->image)
                style="max-height:300px;
                    @if($item->imageSize)
                        @if($item->imageSize == 'large') height:300px; @else height:150px; @endif
                    @else height:150px; @endif
                    @if($item->itemImageBackgroundSize)
                        background-size: {{$item->itemImageBackgroundSize}};
                    @else
                        background-size:100%;
                    @endif
                    background-repeat: no-repeat; 
                    background-image: url('{{ $item->image}}'); 
                    background-position: center {{$item->itemImageAlignment or center }};"

            @elseif($item->image && $item->flags->text) 
                style="height:50px;" 
            @else 
                style="height:24px;" 
            @endif >
                @if($item->type)
                <span class="label {{ $item->typeColor }}">{{ $item->type }}</span>
                @endif
                @if($item->flags->text)
                <span class="label {{ 'label-'.$item->flags->color }}">{{ $item->flags->text }}</span>
                @endif
            </div>
            <div class="card-content">
                <h3 class="title">
                    @if($item->uri)   
                        <a href="{{url($item->uri)}}">{{ $item->title }}</a>
                    @elseif($item->url)
                        <a href="{{url($item->url)}}">{{ $item->title }}</a>
                    @endif    
                </h3>
                @if($item->createdOn && $item->type)
                    @if($item->type== "News")<h4 class="date">{{ $item->createdOn }}</h4>@endif
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
            <div class="card-action clearfix">
            @if($item->registerButton->link)
            <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-register">register</a>
            @endif
           @if($item->uri)  
                <a href="{{url($item->uri)}}"  class="btn btn-register">more</a>
            @elseif($item->url)
            <a href="{{url($item->url)}}"  class="btn btn-register">more</a>
            @elseif($item->slug)
            <a href="{{Request::path().'/'.$item->slug}}"  class="btn btn-register">more</a>
            @endif
            </div>
        </div>
    </div>
@endforeach