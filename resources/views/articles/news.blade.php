@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">News</h2>
                </div>
           
                <div class="row row_event rel">
                    @include('partials.news-items',array('items' => $items, 'class' => 'col-md-4'))
                </div>
            </div>
</div>
@stop()  

@section('scripts')  
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-4',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()