  @if($item->loc->lat && $item->loc->long)
    <script>
    function initMap() {
      function initialize(){
        var myLatLng ={ lat: {{$item->loc->lat}}, lng: {{$item->loc->long}} };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng,
          disableDefaultUI: true,
          fullscreenControl: true
        });

        var marker = new google.maps.Marker({
        map: map,  
        position: myLatLng
        });
      }
      google.maps.event.addDomListener(window, "load", initialize);
      }
    </script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2wilEMZuEtyKs8uSrBQae4_OHSVgxdlk&callback=initMap" async defer></script>    
  @endif
