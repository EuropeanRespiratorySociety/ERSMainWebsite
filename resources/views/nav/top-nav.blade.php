<nav id="top-bar" class="navbar navbar-default navbar-fixed-top ers-top-header fixed-top-bar">       
  <div class="container-fluid">
    <div class="navbar-header">
      {{-- Start Page title Visible on Mobile size screen --}}
      <div class="page-title">
        <a href="/"><span style="color:#313131;">European Respiratory Society</span></a>
      </div>
      {{-- End Page title Visible on Mobile size screen --}}
      <a href="javascript:void(0)" class="ers-toggle-left-sidebar navbar-toggle collapsed">
        <span class="icon-bar"><span></span><span></span><span></span></span>
      </a>
    </div>

    <a data-toggle="collapse" data-target=".ers-navbar-collapse" class="ers-toggle-top-header-menu collapsed">
      <span class="icon s7-angle-down"></span>
    </a>         
    <div id="" class="ers-navbar-collapse collapse navbar-collapse" style="border-top:0;">
      {{-- Start Breadcrumb/title bar --}}
      <ul class="nav navbar-left breadcrumb hidden-xs">
        <li><a href="/"><h2>European Respiratory Society</h2></a></li>
        @include('nav.breadcrumb-items', array('items' => $BreadCrumb->roots()))
      </ul>
      
      <ul class="nav navbar-nav navbar-right ers-icons-nav" style="background-color:#fff;border-color:#eee;">
              <li class="dropdown">
                <a href="#" data-toggle="modal" data-target="#md-search" role="button" class="dropdown-toggle">
                  <span style="color:#777" class="icon s7-search"></span>
                </a>
              </li>
    </div>
  </div>
</nav> 