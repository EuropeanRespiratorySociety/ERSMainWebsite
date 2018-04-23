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
            <h2 class="">Educational Activities</h2>
        </div>
        <div class="col-md-9 center-block lead">
            <p>ERS provides essential learning opportunities covering the latest advances in respiratory medicine.</p>
        </div>           
        <div class="row row_event rel">
            <div class="col-md-4">
            <!-- START Courses -->  
                <div class="card card-event">
                    <div class="card-image" style="height:100px;">
                        <img class="img-responsive" src="https://d3egf9svnop2xg.cloudfront.net/images/research/research_4.jpg">
                    </div>

                    <div class="card-content">
                        <p class="title">ERS courses
                        </p>
                        <div class="lead-card">ERS provides essential learning opportunities covering…</div>
                    </div>
                    <div class="card-action clearfix">
                        <a href="professional-development/educational-activities/courses" class="btn btn-register">more</a>
                    </div>
                </div>
            <!-- END Courses -->    
            </div>
        </div>
    </div>
</div>
@stop()  

@section('scripts')  

@stop()