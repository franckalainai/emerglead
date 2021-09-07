<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMERGLEAD</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="/assets/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>
<body>
    <div class="page-wrapper">
    @include('layouts.top_bar')
    @include('layouts.header')
    @yield('content')

      <footer class="site-footer">
          <div class="site-footer__bottom">
              <div class="container">
                  <p class="site-footer__copy">&copy; Copyright 2021 <a href="#">emerglead.org</a></p>
                  <div class="site-footer__social">
                      <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                      <a href="#"><i class="fab fa-facebook-square"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                  </div><!-- /.site-footer__social -->
                  <!-- /.site-footer__copy -->
              </div><!-- /.container -->
          </div><!-- /.site-footer__bottom -->
      </footer><!-- /.site-footer -->
      </div><!-- /.page-wrapper -->

      <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
      </div><!-- /.search-popup -->

      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/js/owl.carousel.min.js"></script>
      <script src="/assets/js/waypoints.min.js"></script>
      <script src="/assets/js/jquery.counterup.min.js"></script>
      <script src="/assets/js/TweenMax.min.js"></script>
      <script src="/assets/js/wow.js"></script>
      <script src="/assets/js/jquery.magnific-popup.min.js"></script>
      <script src="/assets/js/countdown.min.js"></script>
      <script src="/assets/js/vegas.min.js"></script>

      <!-- template scripts -->
      <script src="/assets/js/theme.js"></script>
</body>
</html>
