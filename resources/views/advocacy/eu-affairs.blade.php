@extends('template')
@section('content')
<div class="ers-content ers-courses">
    <div class="clearfix">
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
            </div>

            <div class="main-content" style="overflow: hidden; ">
                @if($category->title == "News and Features")
                    <div class="page-head">
                        <h2 class="">Latest News</h2>
                    </div>
                @endif
                    <div class="row row_news rel">
                        @include('partials.items',array('items' => $items, 'class' => 'col-md-4'))
                    </div>
                @if(isset($pagination))
                    <div class="row">
                        @include('partials.pagination',array('category' => $category, isset($pagination) ? $pagination : null))
                    </div>
                @endif
            </div>

        </div>
@include('advocacy.president-summit', array('alliances' => $category->sponsorsAlliances, 'class' => 'col-md-3'))
    </div>
</div>
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