<div class="card-action clearfix">
    @if($item->registerButton->link && !$item->fullyBooked && $item->shouldHaveRegisterButton)
        <a 
            @if(strpos($item->registerButton->link, '@')) 
                href="{{'mailto:'.$item->registerButton->link}}" 
            @else href="{{$item->registerButton->link}}" target="new_blank"
            @endif   
            class="btn btn-register">{{$item->registerButton->text ? $item->registerButton->text : "register"}}
        </a>
    @endif
        @if($item->type == "Spirometry Programme")
            <a href="/professional-development/spirometry-training-programme"  class="btn btn-register">more</a>
        @elseif($item->type == "Self-assessment course")
        <a href="/professional-development/hermes/host-an-ers-hermes-self-assessment-course-in-your-city-or-country"  class="btn btn-register">more</a>
        @elseif($item->uri !="false" && $item->uri)
            <a href="{{url($item->uri)}}"  class="btn btn-register">more</a>
        @elseif($item->url !="false" && $item->url)
            <a href="{{url($item->url)}}"  class="btn btn-register">more</a>
        @elseif($item->slug && $item->contentType != "event_calendar")
            <a href="{{Request::path().'/'.$item->slug}}"  class="btn btn-register">more</a>
        @endif
</div>