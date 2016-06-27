@extends('template')
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
                    @include('partials.category-items-modal',array('items' => $items, 'class' => 'col-md-3'))
                </div>
            </div>
</div>
 @include('partials.modal-items', array('items' => $items))
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