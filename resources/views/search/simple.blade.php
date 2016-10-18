@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">Search Results</h2>
                </div>

                @if(!$items)
                <div class="col-md-9 center-block lead" style="height:300px;">
                    <h3>Sorry, no result found</h3>
                    <p>Note that the search engine is currently under development and that it will soon include people and other missing features</p>
                </div>
                @else
                <div class="row row_event rel">
                    @include('partials.search-results',array('items' => $items, 'class' => 'col-md-4'))
                </div>
                @endif
            </div>
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