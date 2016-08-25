<nav id="top-bar" class="navbar navbar-default navbar-fixed-top ers-top-header fixed-top-bar">       
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

    <a data-toggle="collapse" data-target=".ers-navbar-collapse" class="ers-toggle-top-header-menu collapsed">
      <span class="icon s7-angle-down"></span>
    </a>         
    <div id="" class="ers-navbar-collapse collapse navbar-collapse hidden-xs">
      <!-- Start Breadcrumb/title bar -->
      <ul class="nav navbar-left breadcrumb hidden-xs">
        <li><a href="/"><h2>European Respiratory Society</h2></a></li>
        @include('nav.breadcrumb-items', array('items' => $BreadCrumb->roots()))
      </ul>
      <!-- End Breadcrumb/title bar -->
    </div>
  </div>
</nav> 