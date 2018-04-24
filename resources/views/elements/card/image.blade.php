<div class="card-image"
    @if($item->image && !$item->nonErsCalendarItem)
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

    @elseif(($item->image && $item->flags->text) || ($item->flags->text && $item->fullyBooked) || ($item->type && $item->flags->text)) 
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
    @if($item->fullyBooked)
       <span class="label label-danger">Fully Booked</span>
    @endif
    @if($item->nonErsCalendarItem)
        <span class="label label-danger" style="width:100%">Non-ERS Event</span>
    @endif
    @if($item->nationalSocietyEvent)
        <span class="label label-danger" style="width:100%">National Society Event</span>
    @endif
    @if($item->regionalSocietyEvent)
        <span class="label label-danger" style="width:100%">Regional Society Event</span>
    @endif
    @if($item->ersEndorsedEvent)    
        <span class="label label-success" style="width:100%">ERS Endorsed Event</span>
    @endif
    @if($item->ersDeadline)    
        <span class="label label-primary" style="width:100%">ERS Deadline</span>
    @endif
    @if($item->category)
        @if($item->category->title == "Respiratory Worldwide" )
            <span class="label"><img class="label-image" src="https://cdn.ersnet.org/images/news/flag-rww.jpg" alt=""></span>
        @endif
    @endif

</div>