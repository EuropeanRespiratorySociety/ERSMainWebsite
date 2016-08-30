<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "{{$item['name']}}",
  "startDate" : "{{$item['startDate']}}",
  @if(isset($item['endDate']))
  "endDate" : "{{$item['endDate']}}",
  @endif
  @if(isset($item['description']))
  "description" : "{!!$item['description']!!}",
  @endif
  @if(isset($item['performer']))
  "performer" : "{{$item['performer']}}",
  @endif
  @if(isset($item['offers']))
  "offers" : {
    '@type': "Offer",
    'name': "{!!$item['offers']!!}",
    'url': "https://my.ersnet.org/Courses/Main"
  },
  @endif
  @if(isset($item['image']))
  "image" : "{{$item['image']}}",
  @endif
@if(isset($item['venueName']))
  "location" : {
    "@type" : "Place",
    "name" : "{{$item['venueName']}}",
    "address" : "{{$item['venueAddress'] }} @if($item['venueAddress2'] != null) {{$item['venueAddress2']}} @endif, {{$item['venueCity']}}, {{$item['venuePostalCode']}}, {{$item['venueCountry']}}"
  },
@endif
  "url" : "{{$item['url']}}"
}
</script>
