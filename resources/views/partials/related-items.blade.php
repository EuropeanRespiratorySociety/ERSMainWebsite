    @foreach($relatedItems as $related)
    @if($related->uri)
    <a href="{{url($related->uri)}}">
    @endif
    <div class="related-items text-left">
      <div class="card card-default card-events">          
        @if($related->image)
          <div class="card-image">
          <!--<span class="label label-danger">Few days left</span>-->
            <img class="img-responsive" src="{{ $related->image }}">
          </div> 
        @endif  
        <div class="card-content">
          <h4>
            {{$related->title}}
          </h4>  
          <h5>@if($related->eventDates){{$related->eventDates}}@endif</h5>
          <p>
            @if($related->shortLead || !$related->eventDates){{$related->shortLead}}@endif
          </p>
        </div>
      </div>
    </div>
    @if($related->uri)
    </a>
    @endif
    @endforeach