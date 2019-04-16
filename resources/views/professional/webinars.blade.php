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
              <div class="col-md-9 center-block lead">
                  @if(isset($item->body)){!!$item->body!!}@endif
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

