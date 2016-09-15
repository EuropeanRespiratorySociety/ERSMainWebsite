<div class="navbar-form navbar-right input-group input-group-sm xs-mb-15" style="margin: 20px -60px 0 0">
{!! Form::open(array('url' => 'search', 'class'=>'form navbar-form navbar-right searchform')) !!}
    {!! Form::text('query', null, array('required','class' => 'form-control input-sm', 'placeholder' => 'Search for anything...')) !!}
    {!! Form::submit('Search', array('class' => 'btn btn-default btn-xs', 'style' => 'margin-top:3px;')) !!}
 {!! Form::close() !!}
 </div>
