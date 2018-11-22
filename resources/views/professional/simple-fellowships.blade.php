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
<div class="ers-content ers-courses fellowships-content">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">{{$category->title}}</h2>
                </div>
                <div class="col-md-9 center-block lead">
                @if(isset($category->body))
                    {!! $category->body !!}
                @endif 
                </div>
            </div> 
</div>
@stop()  

@section('scripts')  
@include('partials.survey-monkey') 
@stop()