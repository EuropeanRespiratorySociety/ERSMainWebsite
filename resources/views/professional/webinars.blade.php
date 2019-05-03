@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
          @if($item->highResImage)
          <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
          </div>
          @endif
          <div class="main-content">
              <div class="page-head">
                  <h2 class="">@if(isset($item->title)){{$item->title}}@endif</h2>
              </div>
              <div class="col-md-7 center-block lead text-left" style="margin-bottom:80px;">
                  @if(isset($item->body)){!!$item->body!!}@endif
                  {{-- <div class="text-right" style="margin-top:40px;">
                    <a href="https://ersnet.org" type="button" class="btn btn-space btn-primary btn-rounded btn-sm">
                      <i style="font-size:20px;padding-right: 8px;" class="icon s7-video"></i>Past webinars
                    </a>
                  </div> --}}
              </div>


              <div class="row row_event">
                  @include('partials.items', array('items' => $items))
              </div>
          </div>
        </div>
    </div>
</div>
@stop()  


@section('scripts')
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope'
        },            
        percentPosition: true
    });
</script>
@stop()

