@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg fellowships-content">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">Fellowships</h2>
                </div>
                <div class="col-md-9 center-block lead">ERS is committed to promoting excellence in in research and providing development opportunities for bright and committed researchers in respiratory medicine. Find out more about the fellowships we offer. 
                </div>
                <div class="row fellowships-links">
                    <div class="col-md-4 col-md-offset-2">
                        <a href="fellowships/short-term">
                            <h3>Short-Term Research Training Fellowships <span class="icon s7-angle-right"></h3>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="fellowships/long-term">
                            <h3>Long-Term Research Training Fellowships <span class="icon s7-angle-right"></h3>
                        </a>
                    </div>
                </div>
                <div class="row">
                <h4><strong>All fellowships:</strong></h4>
                </div>            

                <div class="row row_event rel">

                    @include('partials.category-items-modal',array('items' => $items, 'class' => 'col-md-3'))
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