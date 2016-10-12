@if($item->cancellationPolicy)
<div id="md-cancellation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Cancellation policy</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            {!! $item->cancellationPolicy !!}
           
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif