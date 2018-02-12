<div class="card-action clearfix">
    @if($item->registerButton->link && !$item->fullyBooked)
    <a 
        @if(strpos($item->registerButton->link, '@')) 
            href="{{'mailto:'.$item->registerButton->link}}" 
        @else href="{{$item->registerButton->link}}" target="new_blank"
        @endif   
        class="btn btn-register">{{$item->registerButton->text ? $item->registerButton->text : "register"}}
    </a>
    @endif
        @if($item->type = "Spirometry Programme")
            <a href="/professional-development/spirometry-training-programme"  class="btn btn-register">more</a>
        @elseif($item->uri !="false" && $item->uri && $item->type != "Spirometry Programme")
            <a href="{{url($item->uri)}}"  class="btn btn-register">more</a>
        @elseif($item->url !="false" && $item->url && $item->type != "Spirometry Programme")
            <a href="{{url($item->url)}}"  class="btn btn-register">more</a>
        @elseif($item->slug && $item->contentType != "event_calendar" && $item->type != "Spirometry Programme")
            <a href="{{Request::path().'/'.$item->slug}}"  class="btn btn-register">more</a>
        @endif
</div>