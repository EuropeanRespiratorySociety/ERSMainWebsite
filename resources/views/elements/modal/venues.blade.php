@if($item->suggestedAccommodation[0]->name 
    || $item->suggestedAccommodation[0]->streetAddress
    || $item->ebusVenues[0]->name
    || $item->ebusVenues[0]->streetAddress
)

<div id="md-venues" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
        @if($item->suggestedAccommodation[0]->name 
            || $item->suggestedAccommodation[0]->streetAddress)  
        <h3 class="modal-title">Suggested Accomodation</h3>
        @endif
        @if($item->ebusVenues[0]->name 
            || $item->ebusVenues[0]->streetAddress)  
        <h3 class="modal-title">Event Venues and Dates</h3>
        @endif
      </div>
      <div class="modal-body">
        <div class="text-left">
        @if($item->suggestedAccommodation[0]->name 
            || $item->suggestedAccommodation[0]->streetAddress)        
           <?php $accommodations = $item->suggestedAccommodation; ?>
        @endif
        @if($item->ebusVenues[0]->name
            || $item->ebusVenues[0]->streetAddress)        
          <?php $accommodations = $item->ebusVenues; ?>
        @endif
        @foreach ($accommodations as $accommodation)
        <div class="row">
          <div class="col-md-12">
            <p>
              @if($accommodation->url)
                <a target="_blank" href="{{$accommodation->url}}">
              @endif 
              @if($accommodation->name)
                {{$accommodation->name}} 
              @endif  
              @if($accommodation->url)
                </a>
              @endif
              <br/>
              @if($accommodation->phoneNumber)
                Phone: {{$accommodation->phoneNumber}}<br>
              @endif
              @if($accommodation->streetAddress)
                {{$accommodation->streetAddress}}<br>
              @endif
              @if($accommodation->streetAddress2)
                {{$accommodation->streetAddress2}}<br>
              @endif
              @if($accommodation->streetAddress3)
                {{$accommodation->streetAddress3}}<br>
              @endif
              @if($accommodation->postalCode){{$accommodation->postalCode}} {{$accommodation->city}}<br>@endif
              @if($accommodation->country){{$accommodation->country}}@endif
              @if($accommodation->info){!!$accommodation->info!!}@endif
            </p>
            <hr>
          </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endif