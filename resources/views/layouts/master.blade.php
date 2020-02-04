<!DOCTYPE html>
<html lang="en">
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
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;#124;PT+Mono" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">

  </head>
  <body class="loading">
    <div class="arcelia">
      <!-- header-->
      <header class="header text-inverse wow fadeIn">
        <div class="sky"></div>
        <div class="container">

          <!-- Top navbar-->
          <div class="menu">

            @if(isset($setting))
            <!-- App Logo -->
            <a class="logo" href="{{ URL('/') }}">
              <span>
                <img src="{{ asset('/uploads/setting/'.$setting->logo_path) }}" alt="logo">
              </span>
            </a>
            @endif

            <nav>
              <div class="menu__close"><a href="#" title="close"><i class="icon-cross"></i></a></div>
              <ul>
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ URL('/') }}">{{ __('navbar.home') }}</a></li>
                <li class="{{ Request::is('article*') ? 'active' : '' }}"><a href="{{ URL('/articles') }}">{{ __('navbar.article') }}</a></li>
                <li class="{{ Request::is('faq*')  ? 'active' : '' }}"><a href="{{ URL('/faqs') }}">{{ __('navbar.faqs') }}</a></li>
                <li class="{{ Request::is('video*') ? 'active' : '' }}"><a href="{{ URL('/videos') }}">{{ __('navbar.videos') }}</a></li>
                <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="{{ URL('/contact') }}">{{ __('navbar.contact') }}</a></li>
              </ul>
            </nav><a class="menu__burger" href="#" title="Menu"><span></span><span></span><span></span></a>
          </div>

          <!-- search-->
          <div class="search">
            <h2 class="search__title">{{ __('search.title') }}</h2>
            <div class="search__form">
              <form action="{{ URL('/search') }}" method="get">
                <input class="search__input" type="text" name="search" placeholder="{{ __('search.placeholder') }}">
                <div class="search__icon"><i class="fas fa-search"></i></div>
              </form>
            </div>
          </div>

        </div>
      </header>
      <!-- ./ header-->


      <!-- Content Start -->
      @yield('content')
      <!-- Content End -->


      <!-- contactUs-->
      <section class="section section-contactUs text-inverse">
        <div class="container wow fadeIn">
          <div class="row align-items-center">
            <div class="col-lg-8 mb-40 text-lg-left text-center">
              <h2>{{ __('contact.banner_title') }}</h2>
              <div class="lead">{{ __('contact.banner_subtitle') }}</div>
            </div>
            <div class="col-lg-4 mb-40 text-center"><a class="btn btn-white" href="{{ url('/contact') }}">{{ __('contact.banner_button') }}</a>
            </div>
          </div>
        </div>
      </section>
      <!-- ./ contactUs-->

      <!-- footer-->
      <footer class="footer">

        <div class="copyright">
          <div class="container">
            @if(isset($setting))
            <div>© {!! $setting->footer_text !!}</div>
            @endif
          </div>
        </div>

      </footer>
      <!-- ./ footer-->

    </div>

    <!-- preloader-->
    <div class="preloader">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <!-- ./ preloader-->

    <!-- App scripts-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- ./ App scripts-->

  </body>
</html>