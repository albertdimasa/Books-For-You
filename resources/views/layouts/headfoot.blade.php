<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Books For You</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ url ('/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ url ('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url ('/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/aos.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/style.css') }}">
    <link rel="stylesheet" href="{{ url ('/css/all.min.css') }}">
    <link rel="icon" href="images/logo.png" type="image/icon type">
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
     <div class="site-mobile-menu-body"></div>
  </div>  
  <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">    
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <div class="site-logo mr-auto w-25%"><a href="{{ url ('/')}} ">Books For You</a></div>
        <div class="mx-auto text-center">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block m-0 p-0">
              <li><a href="{{url ('/')}}" class="nav-link">Beranda</a></li>
              <li><a href="{{url ('/#programs-section')}}" class="nav-link">Keuntungan</a></li>
              <li><a href="{{url ('/#teachers-section')}}" class="nav-link">Penyusun</a></li>
            </ul>
          </nav>
        </div>
        <div class="ml-auto w-25 ">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
              @guest
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link btn btn-primary text-white " href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @endif
              @else
                  <li class="nav-item dropdown ">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-white btn btn-primary " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->nama }} <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('home') }}" </a>
                          Beranda
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </ul>
          </nav>
          <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
        </div>
      </div>
    </div>
  </header>
    
  @yield('bg')
  @yield('lp')
  
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Tentang Books For You</h3>
            <p>Sebuah tempat untuk saling berbagi buku dengan meminjamkan kepada seseorang yang membutuhkan.</p>
          </div>
          <div class="col-md-5 mx-auto">
            <h3>Berlangganan</h3>
            <p>Informasi terbaru seputar website ini?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-5 mr-2 " placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-5 mt-1" value="Langganan">
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>

      </div>
    </footer>
  <!-- Script JS -->
  <script src="{{ url ('/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url ('/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url ('/js/jquery-ui.js') }}"></script>
  <script src="{{ url ('/js/popper.min.js') }}"></script>
  <script src="{{ url ('/js/bootstrap.min.js') }}"></script>
  <script src="{{ url ('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url ('/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url ('/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ url ('/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url ('/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url ('/js/aos.js') }}"></script>
  <script src="{{ url ('/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ url ('/js/jquery.sticky.js') }}"></script>
  <script src="{{ url ('/js/main.js') }}"></script>
  </body>
</html>