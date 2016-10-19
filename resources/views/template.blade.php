
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
        @yield('structured-data')
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "https://www.ersnet.org/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.ersnet.org/search?query={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
</script>    
    <!--[if lt IE 9]>     
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://bootstrap.ersnet.org/css/all.css" type="text/css"/>
   {{--<link rel="stylesheet" href="http://erstemplate.app/css/all.css" type="text/css"/>--}}


  </head>
  <body id="ersMainWebsite">
{{-- Google Tag Manager --}}
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5Z6KP9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5Z6KP9');</script>
{{-- End Google Tag Manager --}}

    <div class="ers-wrapper ers-fixed-sidebar ers-white-header">

        {{-- Start Top Nav --}}  
            @include('nav.top-nav')
        {{-- End Top Nav --}}  

        {{-- Start Main Navigation --}}    
            @include('nav.main-nav')
        {{-- End Main Navigation --}}  

        {{-- Start Left Sidebar --}}
            @include('sidebar.left-variant')
        {{-- End Left Sidebar --}}

        {{-- Start main content Area --}}
            @yield('content')
        {{-- End main content Area --}}
          
        {{-- Start right Sidebar --}}     
        {{-- End right Sidebar --}}
      
    </div>

    <script src="https://bootstrap.ersnet.org/js/jquery.min.js" type="text/javascript"></script>
    {{--<script src="http://erstemplate.app/js/jquery.min.js" type="text/javascript"></script>--}}
    <script src="https://bootstrap.ersnet.org/js/all.js" type="text/javascript"></script>
    {{--<script src="http://erstemplate.app/js/all.js" type="text/javascript"></script>--}}


    @yield('scripts')

    {{--<script src="/js/sw-registration.js" type="text/javascript"></script>--}}

    {{-- Modal windows --}}
    @yield('modals')
    @include('forms.simple-search') 

  </body>
</html>