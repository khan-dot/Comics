<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Comics Online</title>
      <meta content="" name="descriptison">
      <meta content="" name="keywords">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="/vendor/aos/aos.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="/css/style.css" rel="stylesheet">

    </head>


    <body style="background-color: #3c3d3d">
    	@include('inc.navbar')
    	<div class="container">
            @include('inc.messages')
    	</div>
      @yield('content')
       <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
       <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>ComicsOnLinE</h3>
            <p>If you too want to get excited over comic heroes’ great performances with other readers all over the world,<br>“ComicsOnLinE” is the best place for you..</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>ComicsOnLinE</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="\vendor\jquery\jquery.min.js"></script>
  <script src="\vendor\bootstrap\js/bootstrap.bundle.min.js"></script>
  <script src="\vendor\jquery.easing\jquery.easing.min.js"></script>
  <script src="\vendor\php-email-form\validate.js"></script>
  <script src="\vendor\jquery-sticky\jquery.sticky.js"></script>
  <script src="\vendor\venobox\venobox.min.js"></script>
  <script src="\vendor\waypoints\jquery.waypoints.min.js"></script>
  <script src="\vendor\counterup\counterup.min.js"></script>
  <script src="\vendor\isotope-layout\isotope.pkgd.min.js"></script>
  <script src="\vendor\owl.carousel\owl.carousel.min.js"></script>
  <script src="\vendor\aos\aos.js"></script>

  <!-- Template Main JS File -->
  <script src="\js\main.js"></script>
    </body>
</html>