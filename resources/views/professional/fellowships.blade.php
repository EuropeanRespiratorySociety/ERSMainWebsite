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
                
                <div class="row">
                    <h4><strong>All fellowships:</strong></h4>
                </div>            

                <div class="row row_event rel">
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-3'))
                </div>
            </div> 
</div>

@stop()  

@section('modals')
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
  @include('partials.survey-monkey')  

@stop()