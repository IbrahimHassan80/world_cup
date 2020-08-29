<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sportz &mdash; Colorlib Sports Team Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>

  <body>

<!-- /////////-------- header --------///////////////// -->
  @include('master.header.headerfrance')
<!-- //////////////////-------////////////////// -->




   <!-- CONTENT -----//////////////////-------- -->
    <div class="site-blocks-vs site-section bg-light">
      <div class="container">
        <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
          <div class="container">
          @yield('content')
             </div>
              </div>
               </div>
                </div>
     <!-- End CONTENT --//////////////////------ -->



<!--/////////  Footer //////////////////////////// -->
       @include('master.footer.footer')
<!--///////// End Footer//////////////////////// -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  </body>
  </html>
