<div >
    @if($item->video)
      @if($item->type)
        <span class="label {{ $item->typeColor }}">{{ $item->type }}</span>
      @endif
      <div class="videoWrapper" >
        {!!$item->video!!} 
      </div>
    @endif
</div>