<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @foreach( $settings as $setting )
    <!-- App Title -->
    <title>@yield('title') | {{ $setting->title }}</title>

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}">
    <link rel="shortcut icon" href="{{ asset('/uploads/setting/'.$setting->favicon_path) }}">
    <meta name="description" content="{{ $setting->description }}">
    <meta name="keywords" content="{{ $setting->keywords }}">
    @endforeach

    <!-- Meta Tags -->
    <link rel="canonical" href="https://bestforexvps.org/"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:site" content="@sproutsocial" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:creator" content="@sproutsocial" />
    <!-- Meta Tags -->

    @if(empty($setting))
    <!-- App Title -->
    <title>@yield('title')</title>
    @endif


    <!-- =========================
        Loding All Stylesheet
    ============================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/rateyo.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/lightslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/megamenu.css') }}">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- =========================
      Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js') }}"></script>
  </head>
  <body class="">
    <div class="preloader"></div>


    <!-- =========================
        Header Top Section
    ============================== -->
    <section id="wd-header" class="d-flex align-items-center mob-sticky">
      <div class="container">
        <div class="row">
            
          <div class="order-1 order-sm-2  col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2">
            <div class="blrub-logo">
              <a href="{{ route('index') }}">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo">
              </a>
            </div>
          </div>

        </div><!--Row End-->
      </div><!--Container End-->
    </section><!--Section End-->


    <!-- =========================
        Content Area
    ============================== -->
    @yield('content')
    <!-- =========================
        Content Area
    ============================== -->


    <!-- =========================
        Details Section
    ============================== -->
    <section id="details">
      <div class="container">
        <div class="row wow fadeInLeft animated justify-content-center" data-wow-delay="600ms">
          <div class="col-10 col-sm-8 col-lg-3 details-box">
            <div class="row">
              <div class="col-sm-3 p0 text-center">
                <div class="details-img">
                  <span class="details-icon"><i class="fa fa-rocket"></i></span>
                </div>
              </div>
              <div class="col-sm-9 p0 details-description">
                <h6 class="details-title">UPTIME</h6>
                <p>Make sure your preferred provider is delivering you guaranteed server uptime. It’s one of the most important factors in Forex Trading for a successful trading career.</p>
              </div>
            </div>
          <div class="arow">
            <img src="{{ asset('frontend/img/details-img/angle2.png') }}" alt="">
          </div>
          </div>
          <div class="col-10 col-sm-8 col-lg-3 details-box">
            <div class="row">
              <div class="col-sm-3 p0 text-center">
                <div class="details-img">
                  <span class="details-icon"><i class="fa fa-map-marker"></i></span>
                </div>
              </div>
              <div class="col-sm-9 p0 details-description">
                <h6 class="details-title">LATENCY</h6>
                <p>The closer you are by your broker server, the better it will be for a great trading execution. Before choosing any provider, look closely at how much latency it’s going to be from your broker server.</p>
              </div>
            </div>
          <div class="arow">
            <img src="{{ asset('frontend/img/details-img/angle2.png') }}" alt="">
          </div>
          </div>
          <div class="col-10 col-sm-8 col-lg-3 details-box">
            <div class="row">
              <div class="col-sm-3 p0 text-center">
                <div class="details-img">
                  <span class="details-icon"><i class="fa fa-phone-square"></i></span>
                </div>
              </div>
              <div class="col-sm-9 p0 details-description">
                <h6 class="details-title">SUPPORT</h6>
                <p>This department should be taken seriously before taking any action. An experienced & educated technical support team can mean a lot to you when your server faces any technical issue.</p>
              </div>
            </div>
          <div class="arow">
            <img src="{{ asset('frontend/img/details-img/angle2.png') }}" alt="">
          </div>
          </div>
          <div class="col-10 col-sm-8 col-lg-3 details-box details-active">
            <div class="text-center">
              <img class="img-fluid" src="{{ asset('frontend/img/details-img/gift-icon.png') }}" alt="gift-icon">
              <h3 class="details-active-title">Enjoy Result</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================
        CopyRight
    ============================== -->
    <section class="copyright wow fadeInUp animated" data-wow-delay="1500ms">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="copyright-text">
              <p class="text-uppercase"> 
                @if(isset($setting))
                  &copy; {!! $setting->footer_text !!} -
                @endif
              </p><a class="created-by" target="_blank" href="https://bestforexvps.org/">Best Forex VPS</a>
            </div>
          </div>
        </div>
      </div>
  </section>

    <!-- =========================
      Main Loding JS Script
    ============================== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nav.js') }}"></script>
    <!-- <script src="js/jquery.nicescroll.js"></script> -->
    <script src="{{ asset('frontend/js/jquery.rateyo.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/mobile.js') }}"></script>
    <script src="{{ asset('frontend/js/lightslider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simplePlayer.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

  </body>
</html>