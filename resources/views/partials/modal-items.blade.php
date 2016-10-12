@foreach ($items as $item)
<!-- Start Modal -->
    <div id="@if(isset($item->slug)){{$item->slug}}@endif" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
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
            @if($item->sponsors)
            <div class="">
                <p class="">Sponsor: {{$item->sponsors->text}}
                @if($item->sponsors->image)
                    <img style="height:25px;" src="{{ $item->sponsors->image}}" class="img-responsive">
                @endif    
                </p>
            </div>
            @endif  
              @if($item->lead){!! $item->lead !!}@endif
              @if($item->body){!! $item->body !!}@endif
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End Modal -->
@endforeach