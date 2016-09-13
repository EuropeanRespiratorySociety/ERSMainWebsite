<div class="section home-news-content fp-auto-height" id="">
  <div class="main-content">
    <div class="page-head"><h2>Latest News</h2></div>
    <div class="row center-block">
      @foreach($items as $item)
        <div class="col-md-4">
          <a href="@if(isset($item->uri)){{url($item->uri)}}@endif">
          <div class="card card-padded @if(!isset($item->image)) card-primary @endif">
            <figure 

            @if(isset($item->contrastOnHomepage))
              @if($item->contrastOnHomepage ) class="hover-gradation-dark" @else class="hover-gradation" @endif
            @else 
              class="hover-gradation"
            @endif  
            >

            @if(isset($item->type))
              <span class="label @if(isset($item->typeColor)){{$item->typeColor}}@else label-default @endif">{{$item->type}}</span>
            @endif
            @if(isset($item->image))
              <img src="{{url($item->image)}}" @if(isset($item->imageDescription))alt="{{$item->imageDescription}}" @endif >
            @endif
              <figcaption>
              @if($item->doNotDisplayCreatedOn != true)
                <h4>
                  @if(isset($item->createdOn)){{$item->createdOn}}@endif
                </h4>
              @endif
              <h2>@if(isset($item->title)){{$item->title}}@endif</h2>
              </figcaption>     
            </figure>
          </div>
          </a>
        </div>
      @endforeach  
    </div>
    <h3 style="font-size:20px; margin-top:40px;">
      <a href="{{url('the-society/news')}}">
        </span>All News<span class="s7-angle-right" style="font-size: 30px;position: relative; top: 8px;">
      </a>
    </h3>

  </div>
</div>  


















