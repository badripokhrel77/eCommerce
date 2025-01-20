<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>@yield('title', 'Fruitkha')</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('img/favicon.png') }}">
    <!-- google font -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap') }}" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ url('css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="{{url('/')}}">
                                <img src="img/logo.png" alt="">
                                {{-- <h4 class="text-white">Hamro Bagaincha</h4> --}}
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{url('home')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                    
                                        <li><a href="{{url('cart')}}">Cart</a></li>
                                        <li><a href="{{url('checkout')}}">Check Out</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('news')}}">News</a></li>
                                        <li><a href="{{url('single_news')}}">Single News</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                
                                <li><a href="{{url('shop')}}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('shop')}}">Shop</a></li>
                                        <li><a href="{{url('single_product')}}">Single Product</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="header-icons d-flex align-items-center">
                                        
                                        <a class="mobile-hide search-bar-icon ms-3" href="#"><i class="fas fa-search"></i></a>
                                        @if (auth()->check())
                                            <form action="{{ route('logout') }}" method="POST" class="d-inline ms-3">
                                                @csrf
                                                <a class="shopping-cart" href="{{url('cart')}}"><i class="fas fa-shopping-cart"></i></a>
                                                <a href="#" onclick="this.closest('form').submit();" class="text-black text-decoration-none">Logout</a>
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}" class="ms-3">Login</a>
                                            <a href="{{ route('register') }}" class="ms-3">Register</a>
                                        @endif
                                    </div> 
                                </li>

                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    @yield('content')

  <!-- logo carousel -->
  <div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="img/company-logos/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>Butwal-03,Golpark, Rupandehi</li>
                            <li>fruitkha@gmail.com</li>
                            <li>071-520210</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Fruitskha</a>, All Rights
                        Reserved. <br>
                        Design By - <a href="#">Atirab techno pvt.ltd</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="{{ url('js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ url('js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ url('js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ url('js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ url('js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ url('js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('js/main.js') }}"></script>

</body>

</html>
