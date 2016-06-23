    @foreach($relatedItems as $related)
    <div style="padding:20px 20px 20px 40px" class="text-left">
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
          <p>
            {{$related['shortLead']}}
          </p>
          <a href="related/{{$related['slug'] }}" target="new_blank" class="btn btn-xs btn-default pull-right">More...</a>
        </div>
      </div>
    </div>
    @endforeach