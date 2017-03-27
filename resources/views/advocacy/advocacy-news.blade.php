@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($category->url) ? $category->url : null , 
              'title' => $category->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content ers-courses"> 
    <div class="col-md-9">
            <div class="main-content">
                @if($category->title)
                <div class="page-head">
                    <h2 class="">{{$category->title}}</h2>
                </div>
                @endif
                @if($category->body)
                <div class="col-md-9 center-block lead">
                    {!!$category->body!!}
                </div>
                @endif

            </div><!-- main-content news and feautures -->
            <div class="main-content" style="overflow: hidden; ">
                <div class="row row_news rel">
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-4'))
                </div>
                @if(isset($pagination))
                <div class="row">
                    @include('partials.pagination',array('category' => $category, isset($pagination) ? $pagination : null))
                </div>
                @endif
            </div><!-- main-content latest news -->
    </div><!-- col-md-9 -->
        @include('advocacy.president-summit', array('alliances' => $category->sponsorsAlliances, 'class' => 'col-md-3'))

</div><!-- ers-content -->
@stop() 


@section('scripts')
<script type="text/javascript">
    $('.row_news').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-4',
        },            
        percentPosition: true
        
    });
</script> 
@stop()