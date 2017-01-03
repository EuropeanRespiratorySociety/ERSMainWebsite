@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Council</h2>
	        </div>
	        <div class="col-md-8 center-block lead text-left">The Council of the Society is composed of:<br><br>
	        	<ul class="list-unstyled">
	        		<li>The Executive Committee</li>
	        		<li>The National Delegates</li>
	        		<li>The representatives of the Scientific Assemblies (Assembly Delegates) according to the ERS Constitution article VII paragraph 11.</li>
	        	</ul>
			</div>
	        
	    </div>
	</div>
  
@include('nav.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()