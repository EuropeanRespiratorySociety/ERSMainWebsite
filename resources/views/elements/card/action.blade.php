<div class="card-action clearfix">
    @if($item->registerButton->link)
    <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-register">{{$item->registerButton->text ? $item->registerButton->text : "register"}}</a>
    @endif
    @if($item->contentType != "event_calendar")
        @if($item->uri)
            <a href="{{url($item->uri)}}"  class="btn btn-register">more</a>
        @elseif($item->url)
            <a href="{{url($item->url)}}"  class="btn btn-register">more</a>
        @elseif($item->slug)
            <a href="{{Request::path().'/'.$item->slug}}"  class="btn btn-register">more</a>
        @endif
    @endif
</div>