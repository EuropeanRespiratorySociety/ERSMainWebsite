@foreach($items as $item)
  <li@lm-attrs($item) @if($item->hasChildren())class ="dropdown"@endif @lm-endattrs>
    @if($item->link) <a@lm-attrs($item->link) @if($item->hasChildren()) class="dropdown-toggle disable" @endif @lm-endattrs href="{!! $item->url() !!}">
      {!! $item->title !!}
      
    </a>
      @if($item->hasChildren()) <a href="javascript:void(0)" class="dropdown-toggle independent-toggle" data-toggle="dropdown"><b class="caret"></b></a> @endif
    @else
      {!! $item->title !!}
    @endif
    @if($item->hasChildren())
      <ul class="dropdown-menu">
        @include(config('laravel-menu.views.bootstrap-items'), 
array('items' => $item->children()))
      </ul> 
    @endif
  </li>
  @if($item->divider)
  	<li{!! Lavary\Menu\Builder::attributes($item->divider) !!}></li>
  @endif
@endforeach
