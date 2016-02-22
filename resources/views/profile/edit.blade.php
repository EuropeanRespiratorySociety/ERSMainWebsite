 @extends('template')
	@section('content')
	<div class="ers-content">
        <div class="main-content">

          <div class="user-profile">

            <!-- Start of the Top part of the profile -->
            <div class="user-display">  
              <div class="photo">
                <div class="cover">
                  <a class="btn btn-default edit-cover-picture" href="#" role="button">Change cover picture</a>
                </div>
              </div>
              <div class="bottom">
                <div class="user-avatar">
                  <span class="status"></span>
                  <img src="../images/avatar.png">
                  <div class="clearfix member-since">
                    <a href="#">Change profile picture</a>
                  </div>  
                  <div class="clearfix text-center">
                    <a href="#" class="small">Delete</a>
                  </div>
                </div>
                <div class="clearfix user-info">
                  <ul class="list-inline">
                    <li>
                      <span class="badge badge-default">ERS National Delegate</span>
                    </li>
                    <li>
                      <span class="badge badge-default">Assembly Group 4.3</span>
                    </li>
                    <li>
                      <span class="badge badge-default">Assembly Chair</span>
                    </li>
                  </ul>  
                    <h4>Dr. Prof. Jane Doe</h4>
                    <h5>Clinical/Researcher</h5>
                    <dl class="dl-horizontal">
                      <dt>Interested in:</dt>
                      <dd>General pneumology (General respiratory medicine), Occupational and environmental health, Tobacco, Smoking, Control and health education</dd>
                    </dl>
                </div>
              </div>
            </div>
            <!-- End of the Top part of the profile -->

            <!-- Start Profile Edit -->
            <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <a class="btn btn-primary profile-edit-save" href="#" role="button">Save</a>
                    <div class="panel-heading">Edit your data</div>
                      <div class="panel-body">
                        <div class="content">
                          <div class="row">
                            <div class="col-md-2">
                              <ul id="profile-nav" class="nav">
                                <li><a href="#profile">Profile</a></li>
                                <li><a href="#assembly">Assembly details</a></li>
                                <li><a href="#contact">Contact information</a></li>
                                <li><a href="#address">Address</a></li>
                                <li><a href="#account">Account</a></li>
                                <li><a href="#password">Password</a></li>
                                <li><a href="#privacy">Privacy</a></li>
                              </ul>
                            </div>
                            <div class="col-md-4">
                              <form class="user-edit" role="form" novalidate="" data-spy="scroll" data-target="#profile-nav">
                                  <h3 id="profile">Profile</h3>
                                  <div class="disabled form-group">
                                    <label>Title</label>
                                    <select class="form-control">
                                      <option selected>--Choose--</option>
                                      <option>Ms.</option>
                                      <option>Mr.</option>
                                      <option>Miss.</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Academic degree (optional)</label>
                                    <select class="form-control">
                                      <option disabled selected>--Choose--</option>
                                      <option>Dr.</option>
                                      <option>Prof.</option>
                                      <option>Dr. Prof.</option>
                                      <option>...</option>
                                    </select>  
                                 </div>
                                 <div class="form-group">
                                  <label>First name</label>
                                  <input type="text" class="form-control" placeholder="Enter your first name">
                                 </div>
                                 <div class="form-group">
                                  <label>Last name</label>
                                  <input type="text" class="form-control" placeholder="Enter your last name">
                                 </div>
                                 <div class="form-group">
                                  <label>Professional activity</label>
                                  <input type="text" class="form-control" placeholder="Enter your professional activity">
                                 </div>
                                 <div class="form-group">
                                  <label>Work place</label>
                                  <input type="text" class="form-control" placeholder="Enter your work place">
                                 </div>
                                 <div id="assembly" class="form-group">
                                  <label>Area of interest</label>
                                    <select multiple="" class="tags">
                                      <option value="Smoking">Smoking</option>
                                      <option value="Tobacco" data-select2-tag="true">Tobacco</option>
                                      <option value="Control and health education">Control and health education</option>
                                      <option value="Running">Running</option>
                                      <option value="Jumping">Jumping</option>
                                      <option value="Mountaineering">Mountaineering</option>
                                      <option value="You've got the idea">You've got the idea</option>
                                      <option value="...">...</option>
                                    </select>
                                </div>
                                <h3 class="edit-subtitle" >Assembly details</h3>
                                  <div class="form-group">
                                    <label>Main group</label>
                                    <select class="form-control">
                                      <option disabled selected>--Choose--</option>
                                      <option>01.01 Clinical Problems</option>
                                      <option>01.02 Clinical Solutions</option>
                                      <option>02.01 Something Else</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Group 2</label>
                                    <select class="form-control">
                                      <option disabled selected>--Choose--</option>
                                      <option>01.01 Clinical Problems</option>
                                      <option>01.02 Clinical Solutions</option>
                                      <option>02.01 Something Else</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Group 3</label>
                                    <select id="contact" class="form-control">
                                      <option disabled selected>--Choose--</option>
                                      <option>01.01 Clinical Problems</option>
                                      <option>01.02 Clinical Solutions</option>
                                      <option>02.01 Something Else</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                                  <h3 class="edit-subtitle" >Contact Information</h3>
                                  <div class="form-group">
                                      <label class="control-label">Receive information from ERS</label>
                                      <div class="">
                                        <div class="ers-checkbox">
                                          <input checked="checked" id="check1" type="checkbox">
                                          <label for="check1" class="active">By mail</label>
                                        </div>
                                        <div class="ers-checkbox">
                                          <input id="check2" type="checkbox">
                                          <label for="check2">By post mail</label>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" placeholder="Enter email" class="form-control">
                                  </div>
                                  <div id="address" class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" placeholder="Enter telephone number" class="form-control"> <span><a href="#">+ add phone number</a></span>
                                  </div> 
                                  <h3>Address</h3>
                                  <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" placeholder="Enter your address" class="form-control"> <span><a href="#">+ add address line</a></span>
                                  </div> 
                                  <div class="form-group">
                                    <label>Postal code</label>
                                    <input type="text" placeholder="Enter your postal code" class="form-control">
                                  </div> 
                                  <div class="form-group">
                                    <label>City</label>
                                    <input type="text" placeholder="Enter your city" class="form-control">
                                  </div> 
                                  <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control">
                                      <option disabled selected>--Choose--</option>
                                      <option>Switzerland</option>
                                      <option>ERS</option>
                                      <option>List</option>
                                      <option>of</option>
                                      <option>countries</option>
                                    </select>
                                  </div> 
                                  <div class="form-group">
                                    <label>State</label>
                                    <select disabled="disabled" class="form-control">
                                      <option disabled selected>--Choose--</option>
                                      <option>Switzerland</option>
                                      <option>ERS</option>
                                      <option>List</option>
                                      <option>of</option>
                                      <option>countries</option>
                                    </select>
                                  </div>
                                  <div id="account" class="form-group">
                                      <label class="control-label">Journal delivery address</label>
                                      <div class="">
                                        <div class="ers-checkbox">
                                          <input checked="checked" id="check1" type="checkbox">
                                          <label class="active" for="check1">Same as main address</label> <!-- If unchecked, display another address group -->
                                        </div>
                                  </div> 
                                  <h3 class="edit-subtitle">Account</h3>
                                  <div class="form-group">
                                    <label class="control-label">Gender</label>
                                    <div class="">
                                      <div class="ers-radio">
                                        <input type="radio" checked="checked" name="rad1" id="rad1">
                                        <label for="rad1">Male</label>
                                      </div>
                                      <div class="ers-radio">
                                        <input type="radio" checked="checked" name="rad1" id="rad2">
                                        <label for="rad2">Female</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Date of Birth</label>
                                    <div class="">
                                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                                          <input size="16" type="text" value="1981-03-10" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                                        </div>
                                    </div>
                                  </div>
                                  <div id="password" class="disabled form-group">
                                    <label>Username</label>
                                    <input type="text" placeholder="myUsername" class="form-control">
                                  </div> 
                                  <h3 class="edit-subtitle">Password</h3>
                                    <div class="form-group">
                                      <label>Current password</label>
                                      <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>New password</label>
                                      <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div id="privacy" class="form-group">
                                      <label>Retype new password</label>
                                      <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                  <h3 >Privacy</h3>
                                    <div class="form-group">
                                      <div class="">
                                        <div class="ers-checkbox">
                                          <input checked="checked" id="check1" type="checkbox">
                                          <label for="check1" class="active">Visible in the <a href="#">ERS Directory</a></label>
                                        </div>
                                      </div> 
                                    </div>
                                    <div class="spacer text-right">
                                      <button type="submit" class="btn btn-space btn-primary">Save</button>
                                    </div>
                              </form>
                            </div>
                            <div class="cold-md-6">
                            </div>
                          </div>  
                        </div>
                      </div>
                    </div>    
                  </div>
                </div>  
            </div>
            <!-- End Profile Edit -->


          </div>
        </div>
      </div>
	@stop()  

    @section('scripts')
    @stop()