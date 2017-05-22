@if($item->venue->name ||
    $item->venue->url ||
    $item->venue->phoneNumber ||
    $item->venue->streetAddress ||
    $item->venue->streetAddress2 ||
    $item->venue->streetAddress3 ||
    $item->venue->postalCode ||
    $item->venue->city ||
    $item->venue->info )
<div id="md-venue_accommodation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        <h3 class="modal-title">Course Venue</h3>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <p>
            @if($item->venue->url)
              <a target="_blank" href="{{$item->venue->url}}">
            @endif 
              @if($item->venue->name){{$item->venue->name}}@endif
            @if($item->venue->url)
              </a>
            @endif
            <br/>
            @if($item->venue->phoneNumber)
              Phone: {{$item->venue->phoneNumber}}<br>
            @endif
            @if($item->venue->streetAddress)
              {{$item->venue->streetAddress}}<br>
            @endif
            @if($item->venue->streetAddress2)
              {{$item->venue->streetAddress2}}<br>
            @endif
            @if($item->venue->streetAddress3)
              {{$item->venue->streetAddress3}}<br>
            @endif
            @if($item->venue->postalCode){{$item->venue->postalCode}}@endif
            @if($item->venue->city){{$item->venue->city}}@endif<br>
            @if($item->venue->country){{$item->venue->country}}@endif
            <hr>
            @if($item->venue->info){!!$item->venue->info!!}@endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endif