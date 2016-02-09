  @extends('template')
	@section('content')
	<div class="ers-content">
        <div class="page-head">
          <h2>Form Elements</h2>
        </div>
        <div class="main-content">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Basic Form</h3>
                </div>
                <div class="panel-body">
                  <form role="form">
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" placeholder="Enter email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="ers-checkbox">
                      <input id="check1" type="checkbox">
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
                  <form role="form" class="form-horizontal">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input id="inputEmail3" type="email" placeholder="Email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input id="inputPassword3" type="password" placeholder="Password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="ers-checkbox">
                          <input id="check2" type="checkbox">
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
          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Basic Elements</h3>
                </div>
                <div class="panel-body">
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Input Text</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Input Password</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Placeholder Input</label>
                      <div class="col-sm-6">
                        <input type="text" placeholder="Placeholder text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Disabled Input</label>
                      <div class="col-sm-6">
                        <input type="text" disabled="disabled" placeholder="Disabled input text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Readonly Input</label>
                      <div class="col-sm-6">
                        <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Textarea</label>
                      <div class="col-sm-6">
                        <textarea class="form-control"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Select & Option Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Select & Option Elements</div>
                </div>
                <div class="panel-body">
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Basic Select</label>
                      <div class="col-sm-6">
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Multiple Select</label>
                      <div class="col-sm-6">
                        <select multiple="" class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Radio</label>
                      <div class="col-sm-6">
                        <div class="ers-radio">
                          <input type="radio" checked="" name="rad1" id="rad1">
                          <label for="rad1">Option 1</label>
                        </div>
                        <div class="ers-radio">
                          <input type="radio" checked="" name="rad1" id="rad2">
                          <label for="rad2">Option 2</label>
                        </div>
                        <div class="ers-radio">
                          <input type="radio" checked="" name="rad1" id="rad3">
                          <label for="rad3">Option 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Inline Radio</label>
                      <div class="col-sm-6">
                        <div class="ers-radio inline">
                          <input type="radio" checked="" name="rad2" id="rad4">
                          <label for="rad4">Option 1</label>
                        </div>
                        <div class="ers-radio inline">
                          <input type="radio" checked="" name="rad2" id="rad5">
                          <label for="rad5">Option 2</label>
                        </div>
                        <div class="ers-radio inline">
                          <input type="radio" checked="" name="rad2" id="rad6">
                          <label for="rad6">Option 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Checkbox</label>
                      <div class="col-sm-6">
                        <div class="ers-checkbox">
                          <input id="check3" type="checkbox">
                          <label for="check3">Option 1</label>
                        </div>
                        <div class="ers-checkbox">
                          <input id="check4" type="checkbox">
                          <label for="check4">Option 2</label>
                        </div>
                        <div class="ers-checkbox">
                          <input id="check5" type="checkbox">
                          <label for="check5">Option 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Inline Checkbox</label>
                      <div class="col-sm-6">
                        <div class="ers-checkbox inline">
                          <input id="check6" type="checkbox">
                          <label for="check6">Option 1</label>
                        </div>
                        <div class="ers-checkbox inline">
                          <input id="check7" type="checkbox">
                          <label for="check7">Option 2</label>
                        </div>
                        <div class="ers-checkbox inline">
                          <input id="check8" type="checkbox">
                          <label for="check8">Option 3</label>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Input Groups-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Input Groups</div>
                </div>
                <div class="panel-body">
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Input Text</label>
                      <div class="col-sm-6">
                        <div class="input-group xs-mb-15"><span class="input-group-addon">@</span>
                          <input type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="input-group xs-mb-15">
                          <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                        </div>
                        <div class="input-group xs-mb-15"><span class="input-group-addon">$</span>
                          <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Input Sizing</label>
                      <div class="col-sm-6">
                        <div class="input-group input-group-lg xs-mb-15"><span class="input-group-addon">@</span>
                          <input type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="input-group xs-mb-15"><span class="input-group-addon">@</span>
                          <input type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="input-group input-group-sm xs-mb-15"><span class="input-group-addon">@</span>
                          <input type="text" placeholder="Username" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Checkbox & Radio</label>
                      <div class="col-sm-6">
                        <div class="input-group xs-mb-15"><span class="input-group-addon">
                            <div class="ers-checkbox">
                              <input type="checkbox" id="check9">
                              <label for="check9"></label>
                            </div></span>
                          <input type="text" class="form-control">
                        </div>
                        <div class="input-group xs-mb-15"><span class="input-group-addon">
                            <div class="ers-radio">
                              <input type="radio" id="rad7">
                              <label for="rad7"></label>
                            </div></span>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Button Addons</label>
                      <div class="col-sm-6">
                        <div class="input-group xs-mb-15">
                          <input type="text" class="form-control"><span class="input-group-btn">
                            <button type="button" class="btn btn-primary">Go!</button></span>
                        </div>
                        <div class="input-group xs-mb-15">
                          <input type="text" class="form-control">
                          <div class="input-group-btn">
                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu pull-right">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="input-group xs-mb-15">
                          <input type="text" class="form-control">
                          <div class="input-group-btn">
                            <button tabindex="-1" type="button" class="btn btn-primary">Action</button>
                            <button tabindex="-1" data-toggle="dropdown" type="button" class="btn btn-primary btn-shade1 dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                            <ul role="menu" class="dropdown-menu pull-right">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Swtich Component-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Switch Component</div>
                </div>
                <div class="panel-body">
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Sizes</label>
                      <div class="col-sm-6">
                        <div class="switch-button switch-button-xs">
                          <input type="checkbox" checked="" name="swt1" id="swt1"><span>
                            <label for="swt1"></label></span>
                        </div>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="swt2" id="swt2"><span>
                            <label for="swt2"></label></span>
                        </div>
                        <div class="switch-button">
                          <input type="checkbox" checked="" name="swt3" id="swt3"><span>
                            <label for="swt3"></label></span>
                        </div>
                        <div class="switch-button switch-button-lg">
                          <input type="checkbox" checked="" name="swt4" id="swt4"><span>
                            <label for="swt4"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Success</label>
                      <div class="col-sm-6 xs-pt-5">
                        <div class="switch-button switch-button-success">
                          <input type="checkbox" checked="" name="swt5" id="swt5"><span>
                            <label for="swt5"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Info</label>
                      <div class="col-sm-6 xs-pt-5">
                        <div class="switch-button switch-button-info">
                          <input type="checkbox" checked="" name="swt6" id="swt6"><span>
                            <label for="swt6"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Warning</label>
                      <div class="col-sm-6 xs-pt-5">
                        <div class="switch-button switch-button-warning">
                          <input type="checkbox" checked="" name="swt7" id="swt7"><span>
                            <label for="swt7"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Danger</label>
                      <div class="col-sm-6 xs-pt-5">
                        <div class="switch-button switch-button-danger">
                          <input type="checkbox" checked="" name="swt8" id="swt8"><span>
                            <label for="swt8"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Yes/No Labels</label>
                      <div class="col-sm-6 xs-pt-5">
                        <div class="switch-button switch-button-yesno">
                          <input type="checkbox" checked="" name="swt9" id="swt9"><span>
                            <label for="swt9"></label></span>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Datepicker-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Date Picker</div>
                </div>
                <div class="panel-body">
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Default</label>
                      <div class="col-sm-6">
                        <input type="text" value="" class="form-control datetimepicker">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Read Only</label>
                      <div class="col-sm-6">
                        <div data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" readonly="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Only Date </label>
                      <div class="col-sm-6">
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Decade View</label>
                      <div class="col-sm-6">
                        <div data-start-view="4" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Year View</label>
                      <div class="col-sm-6">
                        <div data-start-view="3" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Month View</label>
                      <div class="col-sm-6">
                        <div data-start-view="2" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Day View</label>
                      <div class="col-sm-6">
                        <div data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Hour View</label>
                      <div class="col-sm-6">
                        <div data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Day View Meridian</label>
                      <div class="col-sm-6">
                        <div data-show-meridian="true" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Hour View Meridian</label>
                      <div class="col-sm-6">
                        <div data-show-meridian="true" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker col-md-5 col-xs-7">
                          <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Select2 & Slider-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Advanced Controls</div>
                </div>
                <div class="panel-body">
                  <form action="#" class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Select2</label>
                      <div class="col-sm-6">
                        <select class="select2">
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">MultiTag Input</label>
                      <div class="col-sm-6">
                        <select multiple="" class="tags">
                          <option value="1">Green</option>
                          <option value="2">Red</option>
                          <option value="3">Blue</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Multitag from Select</label>
                      <div class="col-sm-6">
                        <select multiple="" class="select2">
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <!--
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Slider</label>
                      <div class="col-sm-6">
                        <input type="text" value="" class="bslider form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Range Slider</label>
                      <div class="col-sm-6">
                        <input type="text" data-slider-value="[250,450]" data-slider-step="5" data-slider-max="1000" data-slider-min="10" value="" class="bslider form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Vertical Slider</label>
                      <div class="col-sm-6">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-2" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                        <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      </div>
                    </div>
                    --> 
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
