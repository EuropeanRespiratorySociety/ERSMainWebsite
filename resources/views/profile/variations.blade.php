 @extends('template')
	@section('content')
	<div class="ers-content">
        <div class="main-content">
        
          <div class="user-profile">

            <!-- Start of the Top part of the profile -->
            <div class="user-display">  
              <div class="photo">
                <div class="cover">
                  <a class="hidden btn btn-default edit-cover-picture" href="#" role="button">Change cover picture</a>
                </div>
              </div>
              <div class="bottom">
                <a class="btn btn-default" href="#" role="button">Edit Profile</a>
                <div class="user-avatar">
                  <span class="status"></span>
                  <img src="../images/avatar.png">
                  <div class="clearfix member-since">
                    <span>ERS Member since 2010</span>
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

            <!-- Start of the Top part of the profile without cover picture-->
            <div class="user-display">  
              <div class="photo">
                <div class="cover no-cover">
                  
                </div>
              </div>
              <div class="bottom">
                <a class="btn btn-default" href="#" role="button">Edit Profile</a>
                <div class="user-avatar">
                  <span class="status"></span>
                  <img src="../images/avatar.png">
                  <div class="clearfix member-since">
                    <span>ERS Member since 2010</span>
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
            <!-- End of the Top part of the profile without cover picture-->

            <div class="row">

              <!-- Start Membership info -->
              <div class="col-md-6">
                <div class="panel panel-full-primary">
                  <div class="panel-heading">Account information</div>
                  <div class="panel-body">
                    <div class="content">
                      <table class="table table-condensed">
                        <tr>
                          <td>Username:</td>
                          <td>myusername</td>
                          <td><a href="#" class="btn btn-dark-primary btn-xs">Change</a></td>
                        </tr>
                        <tr>
                          <td>Password:</td>
                          <td>******</td>
                          <td><a href="#" class="btn btn-dark-primary btn-xs">Change</a></td>
                        </tr>
                        <tr>
                          <td>Membership number:</td>
                          <td>123456</td>
                          <td></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-full-primary">
                <div class="panel-heading">My membership</div>
                  <div class="panel-body">
                    <div class="content">
                      <table class="table table-condensed">
                          <tr>
                            <td style="width:20%">ERS Gold <span class="label label-success pull-right">Active</span></td>
                            <td style="width:50%"> 
                              <div class="progress primary">
                                <div class="progress-bar progress-bar-primary" style="width: 90%"></div>
                               </div> 
                             </td>
                             <td style="width:20%">330 days left</td>
                            <td style="width:10%"><a href="#" class="btn btn-dark-primary btn-xs">Renew</a></td>
                          </tr>
                          <tr>
                            <td style="width:20%">ERS Silver <span class="label label-default pull-right">Expired</span></td>
                            <td style="width:50%"> 
                              <div class="progress primary">
                                <div class="progress-bar progress-bar-primary" style="width: 0%"></div>
                               </div> 
                             </td>
                             <td style="width:20%">ended 6 march 2015</td>
                            <td style="width:10%"></td>
                          </tr>
                          <tr>
                            <td style="width:20%">ERS Trial <span class="label label-default pull-right">Expired</span></td>
                            <td style="width:50%"> 
                              <div class="progress primary">
                                <div class="progress-bar progress-bar-primary" style="width: 0%"></div>
                               </div> 
                             </td>
                             <td style="width:20%">ended 9 October 2011</td>
                            <td style="width:10%"></td>
                          </tr> 
                      </table>
                    </div>
                  </div>
                </div>

                <div class="panel panel-full-primary">
                <div class="panel-heading">My membership</div>
                  <div class="panel-body">
                    <div class="content">
                    <table class="table table-condensed">
                        <tr>
                          <td style="width:20%">ERS Gold <span class="label label-success pull-right">Active</span></td>
                          <td style="width:50%"> 
                            <div class="progress primary">
                              <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                             </div> 
                           </td>
                           <td style="width:20%">73 days left</td>
                          <td style="width:10%"><a href="#" class="btn btn-dark-primary btn-xs">Renew</a></td>
                        </tr>
                        <tr>
                          <td style="width:20%">ERS Silver <span class="label label-default pull-right">Expired</span></td>
                          <td style="width:50%"> 
                            <div class="progress primary">
                              <div class="progress-bar progress-bar-primary" style="width: 0%"></div>
                             </div> 
                           </td>
                           <td style="width:20%">ended 6 march 2015</td>
                          <td style="width:10%"></td>
                        </tr>
                        <tr>
                          <td style="width:20%">ERS Gold <span class="label label-default pull-right">Expired</span></td>
                          <td style="width:50%"> 
                            <div class="progress primary">
                              <div class="progress-bar progress-bar-primary" style="width: 0%"></div>
                             </div> 
                           </td>
                           <td style="width:20%">ended 9 October 2011</td>
                          <td style="width:10%"></td>
                        </tr> 
                      </table>
                    </div>
                  </div>
                </div>

                <div class="panel panel-full-primary">
                <div class="panel-heading">My membership</div>
                  <div class="panel-body">
                    <div class="content">
                     <table class="table table-condensed">
                        <tr>
                          <td style="width:20%">ERS Gold <span class="label label-success pull-right">Active</span></td>
                          <td style="width:50%"> 
                            <div class="progress primary">
                              <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                             </div> 
                           </td>
                           <td style="width:20%">36 days left</td>
                          <td style="width:10%"><a href="#" class="btn btn-dark-primary btn-xs">Renew</a></td>
                        </tr>
                        <tr>
                          <td style="width:20%">ERS Silver <span class="label label-default pull-right">Expired</span></td>
                          <td style="width:50%"> 
                            <div class="progress primary">
                              <div class="progress-bar progress-bar-primary" style="width: 0%"></div>
                             </div> 
                           </td>
                           <td style="width:20%">ended 6 march 2015</td>
                          <td style="width:10%"></td>
                        </tr>
                        <tr>
                          <td style="width:10%">ERS Gold <span class="label label-default pull-right">Expired</span></td>
                          <td style="width:50%"> 
                            <div class="progress primary">
                              <div class="progress-bar progress-bar-primary" style="width: 0%"></div>
                             </div> 
                           </td>
                           <td style="width:20%">ended 9 October 2011</td>
                          <td style="width:10%"></td>
                        </tr> 
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Membership info -->

              <!-- Start Contact details -->
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Contact information</div>
                  <div class="panel-body">
                    <div class="content">
                      <table class="table table-condensed">
                        <tr>
                          <td>Email:</td>
                          <td>
                            <form role="form" novalidate="">
                              <div class="input-group xs-mb-15">
                                <input type="email" class="form-control" placeholder="Enter email" value="email@email.com">
                                <span class="input-group-btn">
                                  <button class="btn btn-primary" type="button">Save</button>
                                </span>
                              </div>
                            </form>  
                          </td>
                          <td><a href="#" class="btn btn-primary btn-xs" style="display:none">Change</a></td> <!-- hidden with JS -->
                        </tr>
                        <tr>
                          <td>Phone number:</td>
                          <td>+41 21 123 12 34</td>
                          <td><a href="#" class="btn btn-default btn-xs">Change</a></td>
                        </tr>
                        <tr>
                          <td>Location:</td>
                          <td>Lausanne, Switzerland</td>
                          <td><a href="#" class="btn btn-default btn-xs">Change</a></td>
                        </tr>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- End Contact details -->

              <!-- Start Contact details -->
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Contact information</div>
                  <div class="panel-body">
                    <div class="content">
                      <table class="table table-condensed">
                        <tr>
                          <td>Email:</td>
                          <td>email@email.com</td>
                          <td><a href="#" class="btn btn-default btn-xs">Change</a></td>
                        </tr>
                        <tr>
                          <td>Phone number:</td>
                          <td>+41 21 123 12 34</td>
                          <td><a href="#" class="btn btn-default btn-xs">Change</a></td>
                        </tr>
                        <tr>
                          <td>Location:</td>
                          <td>Lausanne, Switzerland</td>
                          <td><a href="#" class="btn btn-default btn-xs">Change</a></td>
                        </tr>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- End Contact details -->

              <!-- Start Contact details edit button-->
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading"><a class="btn btn-default pull-right" href="#" role="button">Edit Profile</a>Contact information</div>
                  <div class="panel-body">
                    <div class="content">
                      <table class="table table-condensed">
                        <tr>
                          <td>Email:</td>
                          <td>email@email.com</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Phone number:</td>
                          <td>+41 21 123 12 34</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Location:</td>
                          <td>Lausanne, Switzerland</td>
                          <td></td>
                        </tr>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- End Contact details edit button-->

          </div>


          </div>
        </div>
      </div>
	@stop()  

    @section('scripts')
    @stop()