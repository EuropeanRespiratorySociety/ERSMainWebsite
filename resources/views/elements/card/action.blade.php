<div class="card-action clearfix">
    @if($item->registerButton->link)
    <a href="{{$item->registerButton->link}}" target="new_blank"  class="btn btn-register">{{$item->registerButton->text ? $item->registerButton->text : "register"}}</a>
    @endif
        @if($item->uri !="false" && $item->uri)
            <a href="{{url($item->uri)}}"  class="btn btn-register">more</a>
        @elseif($item->url !="false" && $item->url)
            <a href="{{url($item->url)}}"  class="btn btn-register">more</a>
        @elseif($item->slug && $item->contentType != "event_calendar")
            <a href="{{Request::path().'/'.$item->slug}}"  class="btn btn-register">more</a>
        @endif
</div>