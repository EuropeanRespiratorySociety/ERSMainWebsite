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
<div class="ers-content ers-courses light-grey-bg fellowships-content">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">{{$category->title}}</h2>
                </div>
                <div class="col-md-9 center-block lead">
                @if(isset($category->body))
                    {!! $category->body !!}
                @endif 
                </div>
                <div class="row fellowships-links">
                    <div class="col-md-4 col-md-offset-2">
                        <a href="professional-development/fellowships/short-term-research-training-fellowships">
                            <h3>Short-Term Research Training Fellowships <span class="icon s7-angle-right" style="font-size: 30px;position: relative; top: 10px;"></span></h3>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="professional-development/fellowships/long-term-research-fellowships">
                            <h3>Long-Term Research Training Fellowships <span class="icon s7-angle-right" style="font-size: 30px;position: relative; top: 10px;"></span></h3>
                        </a>
                    </div>
                </div>
                <div class="row">
                <h4><strong>All fellowships:</strong></h4>
                </div>            

                <div class="row row_event rel">
                    @include('partials.fellowships-items',array('items' => $items, 'class' => 'col-md-3'))
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
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()