    @foreach($relatedItems as $related)
    @if($related->uri)
    <a href="{{url($related->uri)}}">
    @endif
    <div class="related-items text-left">
      <div class="card card-default card-events">

      <span class="label {{ $item->typeColor }}">@if($related->eventDates){{$related->eventDates}}@endif</span>
      <div class="card-content col-md-8 pull-right">
          <h4>
            {{$related->title}}
          </h4>  
          {{--<p>
            @if($related->shortLead || !$related->eventDates){{$related->shortLead}}@endif
          </p>--}}
        </div>        
        @if($related->image)
          <div class="card-image col-md-4 pull-left">
          <!--<span class="label label-danger">Few days left</span>-->
            <img class="img-responsive" src="{{ $related->image }}">
          </div> 
        @endif  
      </div>
    </div>
    @if($related->uri)
    </a>
    @endif
    @endforeach