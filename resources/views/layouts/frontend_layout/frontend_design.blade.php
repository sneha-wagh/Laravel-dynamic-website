<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from ygamin.bitbucket.io/groggery/1.1.0/index_video.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 05:48:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon/favicon_Groggery.ico">

    <title>Groggery</title>

    <!-- CSS Plugins -->
    <link href="{{ asset('plugins/lightbox/dist/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <link href="{{ asset('css/frontend_css/styles.css') }}" rel="stylesheet">

  </head>
  <body>
      @include('layouts.frontend_layout.frontend_header')

      @yield('content')

      @include('layouts.frontend_layout.frontend_footer')
  </body>
  <script src="{{ asset('plugins/jquery/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- JS Plugins -->
    <script src="{{ asset('plugins/lightbox/dist/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
   <!--  <script src="{{ asset('plugins/contact.js') }}"></script>
    <script src="{{ asset('plugins/flickity.min.css') }}"></script>
    <script src="{{ asset('plugins/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/ionicons/css/ionicons.min.js') }}"></script>
    <script src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('plugins/lightbox/dist/css/lightbox.css') }}"></script> -->
    
    <!-- JS Custom -->
    <script src="{{ asset('js/frontend_js/custom.js') }}"></script>
    <script src="{{ asset('js/frontend_js/google_maps.js') }}"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfwXIv2vgXzFDZRzzRH2VpbvgSzhqCCuU&amp;callback=initMap" async defer></script>

  </body>

</html>