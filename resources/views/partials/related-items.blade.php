    @foreach($relatedItems as $related)
    @if(isset($related['uri']))
    <a href="{{url($related['uri'])}}">
    @endif
    <div class="related-items text-left">
      <div class="card card-default card-events">          
        @if(isset($related['image']))
          <div class="card-image">
          <!--<span class="label label-danger">Few days left</span>-->
            <img class="img-responsive" src="{{ $related['image'] }}">
          </div> 
        @endif  
        <div class="card-content">
          <h4>
            {{$related['title']}}
          </h4>  
          <h5>@if(isset($related['eventDates'])){{$related['eventDates']}}@endif</h5>
          <p>
            @if(isset($related['shortLead']) || !isset($related['eventDates'])){{$related['shortLead']}}@endif
          </p>
        </div>
      </div>
    </div>
    @if(isset($related['uri']))
    </a>
    @endif
    @endforeach