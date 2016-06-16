@extends('template')
@section('content')
<div class="ers-content article-items">
  <div class="row">
    <!--div class="col-md-3 midium-grey-bg left-photo-map">    
    
    </div-->
    <!-- Beginning Main Content Area -->
    <div class="col-md-9 lighter-grey-bg article-text">
      <div class="header">
        <div class="clearfix notification">
          @if(isset($item->flags))
          <p class="pull-right {{$item->flags['color'] }}">{{ $item->flags['text'] }}</p>
          @endif
        </div>
      </div>
      <div class="page-head">
        <h2 class="">{{$item->title}}</h2>
      </div>

      <div class="article text-left">
        {!!$item->lead!!}
        {!!$item->body!!}
      </div>
    </div>
    <!-- Beginning Main Content Area -->
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">

      @if(isset($item->image))
      <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
      @endif

      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>

<!--Modal contents div-->
<!--END Modal contents div-->

@stop()  

@section('scripts')
    
@stop()