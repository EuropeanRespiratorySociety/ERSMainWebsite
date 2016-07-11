@extends('template')
@section('meta')
        @include('partials.meta', array('meta' => [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ]
              , ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                    @if(isset($item->image))
                        <img src="{{$item->image}}" alt="@if(isset($item->imageDescription)){{$item->imageDescription}}@endif" class="img-circle">
                    @endif
                    <h2 class="">{{$item->title}}</h2>
                </div>
                <div class="col-md-9 center-block lead">
                @if(isset($item->image))
                    {!!$item->body!!}
                @endif    
                </div>
                <div class="row row_event rel">
                @if(!empty($items))
                    @include('partials.author-items',array('items' => $items, 'class' => 'col-md-4'))
                @endif    
                </div>            </div>
</div>
@stop()  

@section('scripts')  
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()