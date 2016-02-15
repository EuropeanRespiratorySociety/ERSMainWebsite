 @extends('template')
	@section('content')
 	<div class="ers-content">
	    <div class="page-head">
	        <h2>{{ $blog['title'] }}</h2>
	    </div>
	    <div class="main-content">	
			<div class="row">
				<article class="article">
				<img src="http:{!! $blog['imageUrl'] !!}">
				<p>{!! $blog['body'] !!}</p>
				</article>
			</div>
		</div>
	</div>		
	@endsection
	
	@section('scripts')
    @stop()