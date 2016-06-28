@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">Respiratory matters: the experts’ blog</h2>
                </div>
                <div class="col-md-9 center-block lead">
                    <p>Welcome to the new blog from ERS designed to give you an insight into the lives of respiratory leaders across the world.</p>
                    <p>Three bloggers will discuss different areas of respiratory health to give you an insight into the worlds of <a href="authors/sylvia-hartl-the-clinician-s-perspective">a clinician</a>, <a href="authors/peter-sterk-the-scientist’s-perspective">a scientist</a> and <a href="authors/thierry-troosters">an allied health professional</a>.</p>
                </div>
                <div class="row row_event rel">
                @if(!empty($items))
                    @include('partials.news-items',array('items' => $items, 'class' => 'col-md-4'))
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