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
<div class="ers-content ers-courses">

<div class="clearfix">
<div class="col-md-9 light-grey-bg">
    <div class="main-content">
        <div class="page-head">
            <h2 class="">@if(isset($item->title)){{$item->title}}@endif</h2>
        </div>
        <div class="col-md-9 center-block lead">
            @if(isset($item->body)){!!$item->body!!}@endif
        </div>

        <div class="row row_event">
            @include('partials.category-items', array('items' => $courses))
        </div>

        
    
    </div>


</div>


@include('professional.director', array('class' => 'col-md-3'))
</div>

@include('professional.course-footer', array('class' => 'col-md-12'))

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