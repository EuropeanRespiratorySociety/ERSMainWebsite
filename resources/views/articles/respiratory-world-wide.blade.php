@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">Respiratory worldwide column</h2>
                </div>
                <div class="col-md-9 center-block lead">
                    <p>Respiratory worldwide is a new platform for leaders from national and regional respiratory organisations.</p>
                    <p>Each month, a new author will share their latest news and views with the aim of ensuring the respiratory community is well-informed about activities and events across the world.</p>
                </div>
                <div class="row row_event rel">
                @if(!empty($items))
                    @include('partials.news-items',array('items' => $items, 'class' => 'col-md-4'))
                @endif    
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