
    <!DOCTYPE html>,
<html lang="en" class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('') }}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">






</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/shop">shop</a></li>
                                    <li><a href="/about">about</a></li>

                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/cart">Cart</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>



                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>

                                </li>

                                <li><a href="/cart"><span class="flaticon-shopping-cart">{{App\Models\Member::total()}}</span></a></li>
                                @guest
                                <li> <a href="{{ route('login') }}"><span class="flaticon-user"></span></a>
                                @else

                                               <!-- Authentication Links -->
                          {{-- <a class="flaticon-user" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre > <span class="flaticon-user"> --}}
                            <a href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre ><span class="flaticon-user">
                           <i style="
                                 color: black;
                             ">{{ Auth::user()->name }}</i></span> </a></li>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                            </ul>

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="/about">About</a></li>

                                    <li><a href="/contact">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>

                                    <li><a href="/shop">Fashion Accessories</a></li>
                                    <li><a href="/shop"> Man Accessories</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Footer bottom -->
                   <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form" action="{{ asset('/scearch') }}" method="get">
                <input type="text" name="qurey" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/imteaj.sajid.9"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://instrgrem/imteajsajid.com"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.google.com"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>




 <!-- JS here -->

 <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
 <!-- Jquery, Popper, Bootstrap -->
 <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
 <script src="{{ asset('assets/js/popper.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <!-- Jquery Mobile Menu -->
 <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

 <!-- Jquery Slick , Owl-Carousel Plugins -->
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets/js/slick.min.js') }}"></script>

 <!-- One Page, Animated-HeadLin -->
 <script src="{{ asset('assets/js/wow.min.js') }}"></script>
 <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

 <!-- Scrollup, nice-select, sticky -->
 <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

 <!-- contact js -->
 <script src="{{ asset('assets/js/contact.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('assets/js/mail-script.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

 <!-- Jquery Plugins, main Jquery -->
 <script src="{{ asset('assets/js/plugins.js') }}"></script>
 <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
