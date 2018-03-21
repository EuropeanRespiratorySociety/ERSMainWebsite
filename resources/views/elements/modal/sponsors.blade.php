@if($item->sponsors[0] 
    || $item->sponsors[0]->text
    || $item->sponsors[0]->image
)

<div id="sponsors-info" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        @if($item->category->title == "ERS Courses")
          <h3 style="padding: 0 40px;">
              The following companies are giving sponsorship to support this event:
          </h3>
        @endif
          @foreach ($item->sponsors as $sponsor)
        {{--  start row  --}}
          <div class="row">
          <div class="col-md-offset-1 col-md-10">
              <div class="card card-events">
                @if($sponsor->image)
                <div class="card-image pull-left col-md-5 col-xs-5" style="height:100%;">
                    <p class="" style="background-image: url('{{ $sponsor->image }}'); background-repeat: no-repeat; background-size:100%; width: 100%; height: 100%; background-position: right center; background-size: contain;"></p>
                </div>
                @endif
                @if($sponsor->text)
                  <div class="col-md-7 col-xs-7 pull-right">
                      <h4 style="display: flex; align-items: center; min-height: 100px;" class="text-left">{{$sponsor->text}}</h4>
                  </div>
                  @endif
              </div> 
            </div>
          </div>
          @endforeach
        </div>
      </div> 
      {{--  close row  --}}
      </div>
    </div>
  </div>
</div>
@endif
