 @extends('template')
	@section('content')
 	<div class="ers-content">
	    <div class="page-head">
	        <h2>Blog test</h2>
	    </div>
	    <div class="main-content">	
			<div class="row">
				@foreach ($posts as $post)
					<div class="col-md-6">
					              <div class="panel panel-default">
					                <div class="panel-heading"> 
					                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">{{ $post['title'] }}</span>
					                </div>
					                <div class="panel-body">
					                <img src="http:{!! $post['imageUrl'] !!}">
										{!! $post['body'] !!}
									<a href="/blog/{{$post['slug']}}" class="btn btn-primary">Read more...</a>
					                </div>
					              </div>
					 </div>
				@endforeach
			</div>
		</div>
	</div>		
	@endsection
	
	@section('scripts')
    @stop()

