 @extends('template')
	@section('content')
      <div class="ers-content">
        <div class="page-head">
          <h2>Form Validation</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Basic Form</h3>
                </div>
                <div class="panel-body">
                  <form action="#" data-parsley-validate="" novalidate="">
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
                    </div>
                    <div class="ers-checkbox">
                      <input id="check1" type="checkbox" class="icheck">
                      <label for="check1">Remember me</label>
                    </div>
                    <div class="spacer text-right">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                      <button class="btn btn-space btn-default">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Horizontal Form</h3>
                </div>
                <div class="panel-body">
                  <form role="form" data-parsley-validate="" novalidate="" class="form-horizontal">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input id="inputEmail3" type="email" required="" parsley-type="email" placeholder="Email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input id="inputPassword3" type="password" required="" placeholder="Password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Web Site</label>
                      <div class="col-sm-10">
                        <input type="url" required="" parsley-type="url" placeholder="URL" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="ers-checkbox">
                          <input id="check2" type="checkbox" class="icheck">
                          <label for="check2">Remember me</label>
                        </div>
                        <div class="spacer text-right">
                          <button type="submit" class="btn btn-space btn-primary">Registrer</button>
                          <button class="btn btn-space btn-default">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Validation Types</h3>
                </div>
                <div class="panel-body">
                  <form action="#" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Required</label>
                      <div class="col-sm-6">
                        <input type="text" required="" placeholder="Type something" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Min Length</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-minlength="6" placeholder="Min 6 chars." class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Max Length</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-maxlength="6" placeholder="Max 6 chars." class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Range Length</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Min Value</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-min="6" placeholder="Min value is 6" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Max Value</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-max="6" placeholder="Max value is 6" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Range Value</label>
                      <div class="col-sm-6">
                        <input required="" type="text" min="6" max="100" placeholder="Number between 6 - 100" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Regular Exp</label>
                      <div class="col-sm-6">
                        <input type="text" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Equal To</label>
                      <div class="col-sm-3">
                        <input id="pass2" type="password" required="" placeholder="Password" class="form-control">
                      </div>
                      <div class="col-sm-3">
                        <input type="password" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Min check</label>
                      <div class="col-sm-6">
                        <div class="ers-checkbox">
                          <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1">
                          <label for="ck1">Option 1</label>
                        </div>
                        <div class="ers-checkbox">
                          <input id="ck2" name="ck2" type="checkbox" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1">
                          <label for="ck2">Option 2</label>
                        </div>
                        <div class="ers-checkbox">
                          <input id="ck3" name="ck3" type="checkbox" data-parsley-multiple="groups" value="bar3" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1">
                          <label for="ck3">Option 3</label>
                        </div>
                        <div id="error-container1"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Max check</label>
                      <div class="col-sm-6">
                        <div class="ers-checkbox">
                          <input type="checkbox" value="bar" id="e1" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2">
                          <label for="e1">Option 1</label>
                        </div>
                        <div class="ers-checkbox">
                          <input type="checkbox" value="bar" id="e2" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2">
                          <label for="e2">Option 2</label>
                        </div>
                        <div class="ers-checkbox">
                          <input type="checkbox" value="bar" id="e3" data-parsley-multiple="group1" data-parsley-maxcheck="1" data-parsley-errors-container="#error-container2">
                          <label for="e3">Option 3</label>
                        </div>
                        <div id="error-container2"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">E-Mail</label>
                      <div class="col-sm-6">
                        <input type="email" required="" parsley-type="email" placeholder="Enter a valid e-mail" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">URL</label>
                      <div class="col-sm-6">
                        <input parsley-type="url" type="url" required="" placeholder="URL" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Digits</label>
                      <div class="col-sm-6">
                        <input data-parsley-type="digits" type="text" required="" placeholder="Enter only digits" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Number</label>
                      <div class="col-sm-6">
                        <input data-parsley-type="number" type="text" required="" placeholder="Enter only numbers" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Alphanumeric</label>
                      <div class="col-sm-6">
                        <input data-parsley-type="alphanum" type="text" required="" placeholder="Enter alphanumeric value" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Textarea</label>
                      <div class="col-sm-6">
                        <textarea required="" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                        <button class="btn btn-space btn-default">Cancel</button>
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