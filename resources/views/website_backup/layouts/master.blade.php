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
        <!-- =========================
          Mobile Menu 
        ============================== -->
            <div class="order-2 order-sm-1 col-2 col-sm-2 col-md-4 d-block d-lg-none">
              <div class="accordion-wrapper hide-sm-up">
                  <a href="#" class="mobile-open"><i class="fa fa-bars" ></i></a>
                  <!--Mobile Menu start-->

                  <ul id="mobilemenu" class="accordion">
                     <!-- <li class="mob-logo"><a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a></li>-->
                      <li><a class="closeme" href="#"><i class="fa fa-times" ></i></a></li>
                      <li class="mob-logo"><a href="{{ route('index') }}"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a></li>
                      <li class="out-link"><a class="" href="{{ route('index') }}">Home</a></li>
                      <li>
                          <div class="link">All Forex VPS Review<i class="fa fa-chevron-down"></i></div>
                          <ul class="submenu font-sky">
                            @foreach($review_submenus as $review_submenu)
                            <li><a href="{{ route('review', $review_submenu->slug) }}">{{ $review_submenu->title }}</a></li>
                            @endforeach
                          </ul>
                      </li>
                      <li>
                          <div class="link ">Best VPS List<i class="fa fa-chevron-down"></i></div>
                          <ul class="submenu">
                            @foreach($article_submenus as $article_submenu)
                            <li><a href="{{ route('article', $article_submenu->slug) }}">{{ $article_submenu->title }}</a></li>
                            @endforeach
                          </ul>
                      </li>
                      <li class="out-link"><a class="" href="{{ route('comparison') }}">VPS Hosting Comparison</a></li>
                  </ul>
                  <!--Mobile Menu end-->
              </div>
            </div><!--Mobile menu end-->
            
          <div class="order-1 order-sm-2  col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2">
            <div class="blrub-logo">
              <a href="{{ route('index') }}">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo">
              </a>
            </div>
          </div>

        <!-- =========================
           Search Box  Show on large device
        ============================== -->
        <div class="col-12 order-lg-2 col-md-5 col-lg-6 col-xl-5 d-none d-lg-block">
            <div class="input-group wd-btn-group header-search-option">
                <input type="text" class="form-control blurb-search" placeholder="Search ..." aria-label="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary wd-btn-search" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </div>

        </div><!--Row End-->
      </div><!--Container End-->
    </section><!--Section End-->

    <!-- =========================
        Main Menu Section
    ============================== -->
    <section id="main-menu" class="sticker-nav">
      <div class="container">
        <div class="row">
          <div class="col-2 col-md-6 col-lg-12 ">
            <div class="menu-container wd-megamenu">
              <div class="menu">
                  <ul class="wd-megamenu-ul">
                      <li><a href="{{ route('index') }}" class="main-menu-list">Home</a></li>
                      <li><a href="#" class="main-menu-list">All Forex VPS Review<i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
                          <ul class="single-dropdown">
                            @foreach($review_submenus as $review_submenu)
                              <li><a href="{{ route('review', $review_submenu->slug) }}">{{ $review_submenu->title }}</a></li>
                            @endforeach
                          </ul>
                      </li>
                      <li><a href="#" class="main-menu-list">Best VPS List<i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
                          <ul class="single-dropdown">
                            @foreach($article_submenus as $article_submenu)
                              <li><a href="{{ route('article', $article_submenu->slug) }}">{{ $article_submenu->title }}</a></li>
                            @endforeach
                          </ul>
                      </li>
                      <li><a href="{{ route('comparison') }}" class="main-menu-list">VPS Hosting Comparison</a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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
                  <img class="img-fluid main-hover-icon-compare" src="{{ asset('frontend/img/details-img/compare-icon.png') }}" alt="compare-icon">
                  <img class="img-fluid hover-icon-compare" src="{{ asset('frontend/img/details-img/compare.png') }}" alt="compare-icon">
                </div>
              </div>
              <div class="col-sm-9 p0 details-description">
                <h6 class="details-title">Lets Compare</h6>
                <p>Choose your product with price comparisons make your best deal today</p>
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
                  <img class="img-fluid main-hover-icon-user" src="{{ asset('frontend/img/details-img/review-icon.png') }}" alt="review-icon">
                  <img class="img-fluid hover-icon-user" src="{{ asset('frontend/img/details-img/user-2.png') }}" alt="review-icon">
                </div>
              </div>
              <div class="col-sm-9 p0 details-description">
                <h6 class="details-title">Take Review</h6>
                <p>Take your selected product review choose best one</p>
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
                  <img class="img-fluid main-hover-icon-vendor" src="{{ asset('frontend/img/details-img/shop.png') }}" alt="vendor-icon">
                  <img class="img-fluid hover-icon-vendor" src="{{ asset('frontend/img/details-img/vendor-icon.png') }}" alt="vendor-icon">
                </div>
              </div>
              <div class="col-sm-9 p0 details-description">
                <h6 class="details-title">Choose Multi-Vendor Store</h6>
                <p>Lets check your product from multivendor store get satisfy.</p>
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
        Subscribe Section
    ============================== -->
    {{-- <section id="subscribe">
      <div class="container">
        <!-- <div class="col-md-1"></div> -->
            <div class="row subscribe-body">
                <div class="col-12 col-md-12 col-lg-5">
                    <h4 class="subscribe-title">Sign up for the latest updates</h4>
                </div>
                <div class="col-12 col-md-9 col-lg-5">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary wd-shop-btn subscribe-btn">
                        Subscribe
                    </button>
                </div>
            </div>
      </div>
    </section> --}}

    <!-- =========================
        Footer Section
    ============================== -->
    {{-- <footer class="footer wow fadeInUp animated" data-wow-delay="900ms">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <!-- ===========================
                Footer About
               =========================== -->
            <div class="footer-about">
              <a href="#" class="footer-about-logo">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo">
              </a>
              <div class="footer-description">
                <p>Lorem ipsum dolor sit amet, anim id est laborum. Sed ut perspconsectetur, adipisci vam aliquam qua.</p>
              </div>
              <div class="wb-social-media">
                <a href="#" class="bh"><i class="fa fa-behance"></i></a>
            <a href="#" class="fb"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="db"><i class="fa fa-dribbble"></i></a>
            <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="vn"><i class="fa fa-vine"></i></a>
            <a href="#" class="yt"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-2 footer-view-controller">
            <!-- ===========================
                Festival Deals
               =========================== -->
            <div class="footer-nav">
              <h6 class="footer-subtitle active-color">Footer Menu</h6>
              <ul>
                <li><a href="index.html"> Home </a></li>
                <li><a href="compare-products.html">Comparison Product </a></li>
                <li><a href="shop-left-sidebar.html">Shop </a></li>
                <li><a href="review-left-sidebar.html">Reviews</a></li>
                <li><a href="blog-four-grid-left-sidebar.html">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 footer-view-controller">
            ===========================
                Top Stores
               ===========================
            <div class="footer-nav">
              <div class="stores-list">
                <h6 class="footer-subtitle">Top Stores</h6>
                <ul>
                  <li><a href="shop-left-sidebar.html">Affiliate Market 1</a></li>
                  <li><a href="shop-left-sidebar.html">Affiliate Market 2</a></li>
                  <li><a href="shop-left-sidebar.html">Affiliate Market 3</a></li>
                  <li><a href="shop-left-sidebar.html">Affiliate Market 4</a></li>
                  <li><a href="shop-left-sidebar.html">Affiliate Market 5</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2 footer-view-controller">
            <!-- ===========================
                Need Help ?
               =========================== -->
            <div class="footer-nav">
              <h6 class="footer-subtitle">Need Help ?</h6>
              <ul>
                <li><a href="#">Getting Started</a></li>
                <li><a href="contact-us.html">Contact us</a></li>
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Press</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 footer-view-controller">
            <!-- ===========================
                About
               =========================== -->
            <div class="footer-nav">
              <h6 class="footer-subtitle">About</h6>
              <ul>
                <li><a href="conditions.html">Privacy</a></li>
                <li><a href="conditions.html">Return Policy</a></li>
                <li><a href="conditions.html">Order &#38; Return</a></li>
                <li><a href="conditions.html">Terms &#38; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}

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
                  COPYRIGHT &copy; {!! $setting->footer_text !!}
                @endif
              </p><a class="created-by" target="_blank" href="https://hitechparks.com/">Hi-Tech Parks</a>
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