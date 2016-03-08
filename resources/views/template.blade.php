<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>ERS Template</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../css/all.css" type="text/css"/>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>

    <div class="ers-wrapper ers-fixed-sidebar {!! $color !!} {!! $display !!}">

        <!-- Start Top Nav -->  
            @include('nav.top-nav')
        <!-- End Top Nav -->  

        <!-- Start Main Navigation -->    
            @include('nav.main-nav')
        <!-- End Main Navigation -->  

        <!-- Start Left Sidebar -->
            @include('sidebar.left')
        <!-- End Left Sidebar -->

        <!-- Start main content Area -->
            @yield('content')
        <!-- End main content Area -->
          
        <!-- Start right Sidebar -->
            @include('sidebar.right')      
        <!-- End right Sidebar -->
      
    </div>
    
    <script src="../js/all.js" type="text/javascript"></script>
    @yield('scripts')

  </body>
</html>