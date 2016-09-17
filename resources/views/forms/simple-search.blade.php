<div id="md-search" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
        {!! Form::open(array('url' => 'search', 'class'=>'form-horizontal group-border-dashed')) !!}
          <div class="modal-header">
            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>     
          <div class="modal-body">
              <div class="text-center"> 
		          <div class="input-group input-group-xl col-xs-12 col-sm-12 col-md-12">
		            {!! Form::text('query', null, array('required','class' => 'form-control', 'placeholder' => 'Search...')) !!}
		          </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            {!! Form::submit('Search', array('class' => 'btn btn-primary')) !!}
          </div>   
        {!! Form::close() !!}
        </div>
    </div>
</div>