@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content ers-courses light-grey-bg fellowships-content">
    <div class="main-content">
        <div class="page-head">
            <h2 class="">{{$item->title}}</h2>
        </div>
        <div class="col-md-9 center-block lead">
         {!!$item->body!!}
     </div>
 </div> 
 <div class="main-content">   
    <div class="row">
        <div class="col-md-3 isotope">  

            <div class="card card-event">
                <div class="card-image" style="height:100px;">
                    <img class="img-responsive" src="images/research/research_4.jpg">
                </div>

                <div class="card-content">
                    <p class="title">Research Seminars
                    </p>
                    <div class="lead-card">ERS Research Seminars promote in-depth discussion between experts on topics…</div>
                </div>
                <div class="card-action clearfix">
                    <a href="research/research-seminars" class="btn btn-register">more</a>
                </div>
            </div>
        </div>
        @include('partials.items',array('items' => $items, 'class' => 'col-md-3'))
    </div>
</div>    
</div>

@stop()  

@section('scripts')
<script type="text/javascript">
    $('.row').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>   
@stop()