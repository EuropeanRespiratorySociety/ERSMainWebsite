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
                  <img src="../images/user.png">
                  <div class="clearfix member-since">
                    <a href="#">Become an <br />ERS Member</a>
                  </div>
                </div>
                <div class="clearfix user-info">
                  <ul class="list-inline">
                    <li>
                      <span class="badge badge-default">E-access</span>
                    </li>
                  </ul>  
                    <h4>Dr. Prof. Jane Doe</h4>
                    <dl class="dl-horizontal">
                      <dt>Interested in:</dt>
                      <dd>Sales/Marketing</dd>
                    </dl>
                </div>
              </div>
            </div>
            <!-- End of the Top part of the profile -->

            <div class="row">


              <div class="col-md-6">
              <!-- Start Membership info -->
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
              <!-- End Membership info -->

              <!-- Start Contact details -->
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
              <!-- End Contact details -->

              </div>

              <!-- Start membersip add -->
              <div class="col-md-6">
                <div class="panel panel-warning">
                  <div class="panel-heading">ERS Membership</div>
                  <div class="panel-body">
                    <div class="content">
                    <h3>Benefits </h3>
                    <p>Nunc nibh urna, feugiat in blandit a, interdum non turpis. Quisque rhoncus semper lorem, id elementum massa mollis ac. Vestibulum sed congue lectus. Suspendisse potenti. Nam a suscipit ante. Nullam faucibus malesuada diam, sed sagittis lorem vehicula a. Nulla sodales libero hendrerit odio varius imperdiet. Mauris ex tellus, dignissim at ullamcorper sit amet, euismod ac turpis. Vestibulum ut maximus lectus. Fusce fringilla ex sed est tempor, sed hendrerit metus aliquam. </p>
                    </div>
                    <div class="btn-white-space">
                      <a href="#" class="btn btn-warning" >Become an ERS Member</a>
                    </div>  
                  </div> 
                </div>
              </div>
              <!-- End membership add-->

          </div>


          </div>
        </div>
      </div>
	@stop()  

    @section('scripts')
    @stop()