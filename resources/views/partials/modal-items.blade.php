@foreach ($items as $item)
{{-- Start Modal --}}
    <div id="@if($item->slug){{$item->slug}}@endif" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
            @if($item->title)
            <h3 class="modal-title">{{$item->title}}</h3>
            @endif
            @if($item->subTitle)
            <h4 class="modal-title">
              {{$item->subTitle}}
            </h4>
            @endif
          </div>
          <div class="modal-body">
            <div class="text-left"> 
              @if($item->lead){!! $item->lead !!}@endif
              @if($item->body){!! $item->body !!}@endif
            </div>
          </div>
          <div class="modal-footer">
            @if($item->sponsors)
            <div class="">
                {{--<h3 class="">Sponsor: {{$item->sponsors[0]->text}}</h3>--}}
                @if($item->sponsors[0]->image)
                    <img style="height:60px;" src="{{ $item->sponsors[0]->image}}" class="pull-right img-responsive">
                @endif    
                <i class="pull-right icon-ers icon" style="font-size:60px; color:#d0043c;">&nbsp;</i>
            </div>
            @endif 
          </div>
        </div>
      </div>
    </div>
{{-- End Modal --}}
@endforeach