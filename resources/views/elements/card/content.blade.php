<?php 
    $home = $home ?? false;
?>


<div class="card-content">
    @if($item->earlybirdDeadline)
        <p class="btn-rounded early_bird">Early Bird deadline {{ $item->earlybirdDeadline }}</p>
    @endif
        <h3 class="title">
    @if(Request::path() !== '/') 
      @if(strpos($item->registerButton->link, '@') && $item->typeColor != "label-school")
          @if($item->type == "Spirometry Programme")
            <a href="/professional-development/spirometry-training-programme">{{ $item->title }}</a>
          @elseif($item->type == "Self-assessment course")
          <a href="/professional-development/hermes/host-an-ers-hermes-self-assessment-course-in-your-city-or-country">{{ $item->title }}</a>
          @else
            <a href="{{'mailto:'.$item->registerButton->link}}">{{ $item->title }}</a>
          @endif
      @elseif($item->type == "Spirometry Programme")
        <a href="/professional-development/spirometry-training-programme">{{ $item->title }}</a>
      @elseif($item->registerButton->link 
              && ($item->ersEndorsedEvent
                  || $item->nonErsCalendarItem 
                  || $item->ersDeadline
                  || (isset($item->category->title) && $item->category->title == "Events Calendar")
                  || $item->contentType == "event_calendar")
              )
            @if($item->registerButton->link)
                <a href="{{$item->registerButton->link}}" target="_blank">{{ $item->title }}</a>
            @endif
      @endif
    @endif

    @if($item->contentType != "event_calendar")
        @if($item->uri) 
            <a href="{{url($item->uri)}}">{{ $item->title }}</a>
        @elseif($item->url)
            <a href="{{url($item->url)}}">{{ $item->title }}</a>
        @elseif($item->slug&& $item->type != "Self-assessment course")
            <a href="{{Request::path().'/'.$item->slug}}">{{ $item->title }}</a>
        @endif 
    @endif 
    @if(!$item->uri && !$item->registerButton->link && $item->contentType == "event_calendar" && $item->type != "Spirometry Programme")
        {{ $item->title }}
    @endif  
    </h3>
    @if($item->sponsors[0]->text && $item->contentType == "event_grant")
        <p class="sponsor"><span class="icon icon-building"></span> {{$item->sponsors[0]->text}}</p>
    @endif 
    @if($item->sponsors[0]->text && $item->contentType == "event_award")
        <p class="sponsor"><span class="icon icon-building"></span> {{$item->sponsors[0]->text}}</p>
    @endif 
    @if($item->modifiedOn && $item->type)
        @if(($item->type == "News" && !$home) || ($home && !$item->doNotDisplayCreatedOnOnHomepage && $item->type == "News"))
            @if($item->displayModifiedOnDate)<h4 class="date mod">{{ $item->modifiedOn }}</h4>
            @else <h4 class="date crea">{{ $item->createdOn }}</h4>
            @endif
        @endif
    @endif
    @if($item->eventLocation)
        <p class="place"><span class="icon s7-map-marker"></span> {{ $item->eventLocation }}</p>
    @endif
    @if(($item->feeList->liveStreaming) || ($item->feeList->liveStreamingNonErs) || ($item->type == "Research Seminar" && ($item->feeList->liveStreaming === 0 || $item->feeList->liveStreamingNonErs === 0)))
        <p class="place" style="color:#d0043c"><span class="icon s7-video" style="color:#d0043c;"></span> Live streaming available</p>    
    @endif
    @if($item->eventDates)
        <p class="date"><span class="icon s7-date"></span> {{ $item->eventDates }}</p>
    @endif
    @if($item->faculty &&  $item->contentType == "event_webinar")
        <p class="sponsor">{{ $item->faculty }}</p>
    @endif
    @if(!$home)
        <div class="lead-card">{!! $item->shortLead !!}</div>
    @endif
</div>