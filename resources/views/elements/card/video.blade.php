<div >
    @if($item->video)
      @if(!isset($deleteTypeFlag) && $item->type)
        <span class="label {{ $item->typeColor }}">{{ $item->type }}</span>
      @endif
      <div class="videoWrapper" >
        {!!$item->video!!} 
      </div>
    @endif
</div>