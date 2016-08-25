    <nav id="main-nav fixed-main-nav" class="navbar navbar-default navbar-fixed-top ers-top-header ers-top-header-bellow-bar ers-navbar-collapse navbar-collapse collapse">
      <div class="container-fluid">
        <div id="" class="ers-navbar-collapse collapse navbar-collapse" style="border-color:#fff;">
          <ul class="nav ers-nav-right navbar-nav ers-main-nav">
            @include(config('laravel-menu.views.bootstrap-items'), array('items' => $MainNav->roots()))
          </ul>
        </div>
      </div>
    </nav>