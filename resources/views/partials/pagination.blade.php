@if(isset($pagination))
<div class="spacer center-block">
  <nav>
    <ul class="pagination pagination-lg">
      @if(request()->input('page', false))
        <li><a href="{{url($category->uri) }}" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
      @endif
      @if($pagination->previous)
        <li><a href="{{url($category->uri).'?page='.$pagination->previous }}" aria-label="Previous Item"><span aria-hidden="true">...</span></a></li>
      @endif
      @foreach ($pagination->pages as $page)
        <li @if($page['active']) class="active" @endif>
          <a href="{{url($category->uri).$page['page']}}">
            {{$page['pageNumber']}}
          </a>
      </li>
      @endforeach
      @if($pagination->next)
        <li><a href="{{url($category->uri).'?page='.$pagination->next }}" aria-label="Next Item"><span aria-hidden="true">...</span></a></li>
      @endif
      @if($pagination->numberOfPages != request()->input('page'))
        <li><a href="{{url($category->uri).'?page='. $pagination->numberOfPages }}" aria-label="Next"><span aria-hidden="true">»</span></a></li>
      @endif
    </ul>
  </nav>
</div>
@endif