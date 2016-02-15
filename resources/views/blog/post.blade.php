@extends('home')

@section('content')
		{!! Form::open(array('route' => 'blog.store')) !!}

        <div class="form-group">
            <label for="tag" class="col-md-3 control-label">Title</label>
             <div class="col-md-3">
                <input type="text" class="form-control" name="title" id="title" value="{{ $title }}" autofocus>
            </div>
        </div>

		<div class="form-group">
            <label class="col-sm-3 control-label">Category</label>
            <div class="col-sm-6">
                <select class="form-control">
                    <option value="FJlJfypzaewiwyukGi2kI">Children</option>
                    <option value="6XL7nwqRZ6yEw0cUe4y0y6">Literature</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="tag" class="col-md-3 control-label">Author</label>
             <div class="col-md-3">
                <input type="text" class="form-control" name="author" id="author" value="{{ $author }}">
            </div>
        </div>

        <div class="form-group">
            <label for="tag" class="col-md-3 control-label">Extract</label>
             <div class="col-md-3">
             	<textarea class="form-control" name="extract" id="extract" value="{{ $extract }}"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="tag" class="col-md-3 control-label">Body</label>
             <div class="col-md-3">
             	<textarea class="form-control" name="body" id="body" value="{{ $body }}"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="tag" class="col-md-3 control-label">Video</label>
             <div class="col-md-3">
                <input type="text" class="form-control" name="video" id="video" value="{{ $video }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-7 col-md-offset-3">
                <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-plus-circle"></i>
                      Add New Post
                </button>
            </div>
        </div>

	{!! Form::close() !!}
@endsection
