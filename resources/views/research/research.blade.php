@extends('template')
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
        <div class="col-md-3">  
    
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
            @include('partials.category-items',array('items' => $items, 'class' => 'col-md-3'))
        </div>
    </div>    
</div>

@stop()  

@section('scripts')   
@stop()