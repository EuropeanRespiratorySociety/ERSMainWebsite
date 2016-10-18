@if($item->travelInfo)
<div id="md-travel_info" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Travel Info</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            {!! $item->travelInfo !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif