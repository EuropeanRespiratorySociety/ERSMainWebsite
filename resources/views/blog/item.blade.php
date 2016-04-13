 @extends('template')
	@section('content')
 	<div class="ers-content">
	    <div class="page-head">
	        <h2>{{ $blog['title'] }}</h2>
	    </div>
	    <div class="main-content">	
			<div class="row">
				<article class="article">
				<img src="{!! $blog['imageUrl'] !!}">
				<p>{!! $blog['body'] !!}</p>
				</article>
				
				@if(!empty($blog['video']))
					<iframe width="640" height="360" src="https://www.youtube.com/embed/{!!$blog['video']!!}" frameborder="0" allowfullscreen></iframe>
				@endif		

				@if(!empty($blog['image']))
					<img src="{!!$blog['image']!!}" />
				@endif
			</div>
		</div>
	</div>		
	@endsection
	
	@section('scripts')
    @stop()