@extends('template')
@section('meta')
        @include('partials.meta', array('meta' => [
              'url' => isset($category->url) ? $category->url : null , 
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
	        @foreach($items as $item)
		        <div class="col-md-4 xs-mb-15">
		            @if(isset($item['image']))
                        <img src="{{$item['image']}}" alt="@if(isset($item['imageDescription'])){{$item['imageDescription']}}@endif" class="img-circle">
                    @endif
                    <p class="photo_caption">
			            <a href="authors/{{$item['slug']}}" title="
				            	@if(isset($item['salutation']))
				            		{{$item['salutation']}}
				            	@endif
				            	@if(isset($item['firstName']))
				            		{{$item['firstName']}}
				            	@endif
				            	@if(isset($item['lastName']))
				            		{{$item['lastName']}}
				            	@endif
			            	">
			            	@if(isset($item['salutation']))
			            		{{$item['salutation']}}
			            	@endif
			            	@if(isset($item['firstName']))
			            		{{$item['firstName']}}
			            	@endif
			            	@if(isset($item['lastName']))
			            		{{$item['lastName']}}
			            	@endif
			            </a>
		            </p>
		            @if(isset($item['tagLine']))
		            	<h3><a href="authors/{{$item['slug']}}" alt="{{$item['tagLine']}}">{{$item['tagLine']}}</a></h3>
		            @endif
	        	</div>
	        @endforeach	
	        </div>
	       
	    </div>
	</div>
 
</div>



@stop()  

    @section('scripts')
    
    @stop()