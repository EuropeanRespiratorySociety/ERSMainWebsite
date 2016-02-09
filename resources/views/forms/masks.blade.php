 @extends('template')
	@section('content')
	<div class="ers-content">
        <div class="page-head">
          <h2>Input Masks</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-defaultt">
                <div class="panel-heading">
                  <h3>Masks Types</h3>
                </div>
                <div class="panel-body">
                  <form action="#" novalidate="" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Date</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="date" placeholder="DD/MM/YYYY" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Phone</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="phone" placeholder="(999) 999-9999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Phone + Opcional Ext.</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="phone-ext" placeholder="(999) 999-9999? x99999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Int Phone</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="phone-int" placeholder="+33 999 999 999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Tax Id</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="taxid" placeholder="99-9999999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">SSN</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="ssn" placeholder="999-99-9999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Product Key</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="product-key" placeholder="a*-999-a999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Percent</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="percent" placeholder="99%" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Currency</label>
                      <div class="col-sm-6">
                        <input type="text" data-mask="currency" placeholder="$0" class="form-control text-right">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	@stop()  

    @section('scripts')
    @stop()