@extends('template')
@section('meta')
        @if(isset($category))
        @include('partials.meta', array('meta' => 
            [
            'url' => isset($category->url) ? $category->url : null , 
            'title' => $category->title
            ],
            ['pagination' => isset($pagination) ? $pagination : null]
              )) 
        @endif      
@stop()
@section('content')

<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                @if(isset($category->title))
                <div class="page-head">
                    <h2 class="">{{$category->title}}</h2>
                </div>
                @endif
                @if(isset($category->body))
                <div class="col-md-9 center-block lead">
                    {!!$category->body!!}
                </div>
                @endif
           
                <div class="row row_event rel">
                    @include('partials.news-items',array('items' => $items, 'class' => 'col-md-4'))
                </div>
                @if(isset($pagination))
                <div class="row">
                    @include('partials.pagination',array('category' => $category, isset($pagination) ? $pagination : null))
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