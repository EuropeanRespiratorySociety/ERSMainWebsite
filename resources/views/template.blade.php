
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        @yield('meta')
    <!--[if lt IE 9]>     
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://bootstrap.ersnet.org/css/all.css" type="text/css"/>
    <!--<link rel="stylesheet" href="http://erstemplate.app/css/all.css" type="text/css"/>-->

    <script src="https://bootstrap.ersnet.org/js/jquery.min.js" type="text/javascript"></script>
    <!--<script src="http://erstemplate.app/js/jquery.min.js" type="text/javascript"></script>-->

  </head>
  <body id="ersMainWebsite">

    <div class="ers-wrapper ers-fixed-sidebar ers-white-header">

        <!-- Start Top Nav -->  
            @include('nav.top-nav')
        <!-- End Top Nav -->  

        <!-- Start Main Navigation -->    
            @include('nav.main-nav')
        <!-- End Main Navigation -->  

        <!-- Start Left Sidebar -->
            @include('sidebar.left-variant')
        <!-- End Left Sidebar -->

        <!-- Start main content Area -->
            @yield('content')
        <!-- End main content Area -->
          
        <!-- Start right Sidebar -->     
        <!-- End right Sidebar -->
      
    </div>
    <script src="https://bootstrap.ersnet.org/js/all.js" type="text/javascript"></script>
    <!--script src="http://erstemplate.app/js/all.js" type="text/javascript"></script-->


    @yield('scripts')

    <!--<script src="/js/sw-registration.js" type="text/javascript"></script>-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-77738133-2', 'auto');
      ga('send', 'pageview');
</script>
  </body>
</html>