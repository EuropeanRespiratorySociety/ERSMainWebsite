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
            @include('partials.category-items',array('items' => $items, 'class' => 'col-md-3'))
        </div>
    </div>    
</div>

@stop()  

@section('scripts')   
@stop()