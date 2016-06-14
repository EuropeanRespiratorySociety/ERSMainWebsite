@extends('template')
@section('content')
<div class="ers-content ers-courses">

<div class="clearfix">
<div class="col-md-9 light-grey-bg">
    <div class="main-content">
        <div class="page-head">
            <h2 class="">ERS courses</h2>
        </div>
        <div class="col-md-9 center-block lead">ERS provides essential learning opportunities covering the latest advances in respiratory medicine. Working with leaders at the forefront of respiratory education and knowledge, ERS courses cover the latest advances in respiratory medicine and deliver detailed overviews of key topics.
        </div>

        <div class="row row_event">
            @include('partials.category-items',array('items' => $courses))
        </div>

        
    
    </div>


</div>


@include('professional.director', array('class' => 'col-md-3'))
</div>

@include('professional.course-footer', array('class' => 'col-md-12'))

</div>
@stop()  

@section('scripts')  
@stop()