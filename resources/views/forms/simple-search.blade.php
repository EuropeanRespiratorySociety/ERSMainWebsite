<div class="navbar-form navbar-right" style="position: absolute;right: 0px; top: 20px; width: 330px;">
{!! Form::open(array('url' => 'search', 'class'=>'form-horizontal group-border-dashed')) !!}
	<div class="input-group input-group-sm">
	    {!! Form::text('query', null, array('required','class' => 'form-control', 'placeholder' => 'Search...')) !!}
	    <span class="input-group-btn">
	        <{!! Form::submit('Search', array('class' => 'btn btn-default')) !!}
	    </span>
	</div>
 {!! Form::close() !!}
 </div>


