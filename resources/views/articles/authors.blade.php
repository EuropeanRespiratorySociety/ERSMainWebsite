@extends('template')
@section('meta')
        @include('partials.meta', array('meta' => [
              'url' => $category->url ? $category->url : null , 
              'title' => $category->title
              ]
              , ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-12">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">The ERS Bloggers</h2>
	        </div>
	        <div class="row leadership-people">
	        	@include('elements.people.person', array('items' => $items))
	        </div>
	       
	    </div>
	</div>
 
</div>



@stop()  

    @section('scripts')
    
    @stop()