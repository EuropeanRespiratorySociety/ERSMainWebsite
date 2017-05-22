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
<div class="ers-content ers-courses light-grey-bg fellowships-content">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">@if(isset($item->title)){{$item->title}}@endif</h2>
                </div>
                <div class="col-md-9 center-block lead">
                    @if(isset($item->body)){!!$item->body!!}@endif
                </div>         

                <div class="row row_event rel">
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-3'))
                </div>
            </div>
</div>
@stop()  

@section('scripts')  
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-3',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()