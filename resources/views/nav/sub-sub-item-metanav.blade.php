@foreach($items as $item)
  <li@lm-attrs($item) @if($item->hasChildren())class ="dropdown"@endif @lm-endattrs>
    @if($item->link) <a@lm-attrs($item->link) @if($item->hasChildren()) class="dropdown-toggle last-level-hook" data-toggle="dropdown" @else class="last-level-hook" @endif @lm-endattrs href="{!! $item->url() !!}">
      {!! $item->title !!}
      @if($item->hasChildren()) @endif
    </a>
    @else
      {!! $item->title !!}
    @endif
    @if($item->hasChildren())
      <ul class="sub-sub-sub-menu">
        @include('nav.sub-sub-item-metanav', 
        array('items' => $item->children()))
      </ul> 
    @endif
  </li>
  @if($item->divider)
  	<li{{ Lavary\Menu\Builder::attributes($item->divider) }}></li>
  @endif
@endforeach