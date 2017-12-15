    @foreach($relatedItems as $related)
    @if($related->uri)
    <a href="{{url($related->uri)}}">
    @endif
    <div class="related-items text-left">
      <div class="card card-default card-events">
      <span class="label {{ $related->typeColor }}">@if($related->eventDates){{$related->eventDates}}@endif</span>
      <div class="card-content 
                  @if($related->image) 
                    col-md-8 col-xs-8 
                  @else 
                    col-md-12 col-xs-12 
                  @endif pull-right"
            @if(!$related->image) 
              style="width:100%;"
              @endif >
          <h4>
            {{$related->title}}
          </h4>  
          {{--<p>
            @if($related->shortLead || !$related->eventDates){{$related->shortLead}}@endif
          </p>--}}
        </div>        
        @if($related->image)
          <div class="card-image col-md-4 col-xs-4 pull-left">
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