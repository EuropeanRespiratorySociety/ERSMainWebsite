      <nav id="top-bar" class="navbar navbar-default navbar-fixed-top ers-top-header">       
        <div class="container-fluid">
          <div class="navbar-header">

            <!-- Start Page title Visible on Mobile size screen -->
            <div class="page-title">
              <span>European Respiratory Society</span>
            </div>
            <!-- End Page title Visible on Mobile size screen -->
              <a href="#" class="ers-toggle-left-sidebar navbar-toggle collapsed">
              <span class="icon-bar"><span></span><span></span><span></span></span>
            </a>
          </div>
          <!-- 
          <a href="#" class="ers-toggle-right-sidebar">
            <span class="icon s7-menu2"></span>
          </a>-->

          <a data-toggle="collapse" data-target=".ers-navbar-collapse" class="ers-toggle-top-header-menu collapsed">
            <span class="icon s7-angle-down"></span>
          </a>         
          <div id="" class="ers-navbar-collapse collapse navbar-collapse">
         

            <!-- Start User Menu -->
            <!--
            <ul class="nav navbar-nav navbar-right ers-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="../images/avatar.png"><span class="user-name">Jane Doe</span><span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#"> <span class="icon s7-user"></span>My profile</a></li>
                  <li><a href="#"> <span class="icon s7-config"></span>Settings</a></li>
                  <li><a href="#"> <span class="icon s7-help1"></span>Help</a></li>
                  <li><a href="#"> <span class="icon s7-power"></span>Sign Out</a></li>
                  <li class="divider"></li>
                  <li>
                        <div class="input-group input-group-sm xs-mb-15">
                          <select class="form-control">
                            <option>English</option>
                            <option>French</option>
                            <option>German</option>
                            <option>Spanish</option>
                            <option>Japanese</option>
                            <option>Russian</option>
                          </select>
                        </div>
                  </li>

                </ul>
              </li>
            </ul>
            -->
            <!-- Start User Menu --> 

            <!-- Start Breadcrumb/title bar -->
            <ul class="nav navbar-left breadcrumb hidden-xs">
              <li><a href="/"><h2>European Respiratory Society</h2></a></li>
              @include('nav.breadcrumb-items', array('items' => $BreadCrumb->roots()))
            </ul>
            <!-- End Breadcrumb/title bar -->
            <!--
            <ul class="nav navbar-nav navbar-right ers-icons-nav">
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                  <span class="icon s7-bell"></span>
                  <span class="indicator"></span>
                </a>
                <ul class="dropdown-menu ers-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="ers-scroller nano">
                        <div class="content nano-content">
                          <ul>
                            <li class="active"><a href="#">
                                <div class="logo"><span class="icon s7-pin"></span></div>
                                <div class="user-content"><span class="circle"></span><span class="name">Jessica Caruso</span><span class="text-content"> accepted your invitation to join the team.</span><span class="date">2 min ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                <div class="user-content"><span class="name">Joel King</span><span class="text-content"> is now following you</span><span class="date">2 days ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-gleam"></span></div>
                                <div class="user-content"><span class="name">Claire Sassu</span><span class="text-content"> is watching your main repository</span><span class="date">2 days ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                <div class="user-content"><span class="name">Emily Carter</span><span class="text-content"> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                  <span class="icon s7-mail"></span>
                </a>
                <ul class="dropdown-menu ers-messages">
                  <li>
                    <div class="title">Messages<span class="badge">3</span></div>
                    <div class="list">
                      <div class="ers-scroller nano">
                        <div class="content nano-content">
                          <ul>
                            <li class="active"><a href="#">
                                <div class="logo"><img src="../images/avatar2.jpg"></div>
                                <div class="user-content"><span class="date">April 25</span><span class="name">Jessica Caruso</span><span class="text-content">Request you to be a part of the same so that we can work...</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="../images/avatar3.jpg"></div>
                                <div class="user-content"><span class="date">March 18</span><span class="name">Joel King</span><span class="text-content"> We wish to extend the building.</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="../images/avatar4.jpg"></div>
                                <div class="user-content"><span class="date">January 3</span><span class="name">Claire Sassu</span><span class="text-content"> We the ladies of a block are wiling to join together to set up a catering...</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="../images/avatar5.jpg"></div>
                                <div class="user-content"><span class="date">January 2</span><span class="name">Emily Carter</span><span class="text-content"> Request you to be a part of the same so that we can work...</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all messages</a></div>
                  </li>
                </ul>
              </li>
            </ul>
            -->
          </div>
        </div>
    </nav> 