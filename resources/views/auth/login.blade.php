<!doctype html>
<html lang="fa">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>زینتکده زهرا</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap4-rtl.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="rtl">
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('img/logo.png') }}"
                                alt="logo')}}"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">صفحه اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">درباره ما</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('product_list') }}"
                                    id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    محصولات
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="{{ route('product_list') }}"> لیست محصولات</a>
                                </div>
                            </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product_list') }}">محصولات </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">تماس با ما</a>
                                </li>
                            </ul>
                        </div>

                        <div class="hearer_icon d-flex align-items-center">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route($role) }}" class="text-sm text-gray-700 "
                                        style="font-family:Shabnam; font-size: 120%;"><img
                                            src="{{ asset('img/profile.png') }}"></a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><img
                                            src="{{ asset('img/login.png') }}"></a></a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                                            <img src="{{ asset('img/register.png') }}">
                                        </a>
                                    @endif
                                @endif
                                @endif
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
        <!-- Header part end-->

        <!-- breadcrumb part start-->
        <section class="breadcrumb_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <h2>ورود</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb part end-->

        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>اولین خرید شماست؟</h2>
                                <p>برای تجربه خرید راحت تر حساب کاربری بسازید</p>
                                <a href="{{ route('register') }}" class="btn_3">ساخت حساب کاربری</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>خوش آمدید ! <br>
                                    لطفا وارد شوید</h3>


                                <form class="row contact_form" action="{{ route('login') }}" method="POST"
                                    novalidate="novalidate">
                                    @csrf
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="email" 
                                            placeholder="رایانامه">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password"
                                            required autocomplete="current-password" 
                                            placeholder="رمز عبور">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">مرا به خاطر بسپار</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            ورود
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->

        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="footer_iner">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="footer_menu">
                                <div class="footer_logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}"
                                            alt="#"></a>
                                </div>
                                <div class="footer_menu_item">
                                    <a href="{{ url('/') }}">صفحه اصلی</a>

                                    <a href="{{ route('product_list') }}">محصولات</a>

                                    <a href="{{ route('contact') }}">تماس با ما</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="social_icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                {{-- <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright_part">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="copyright_text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="ti-heart" aria-hidden="true"></i> by <a href=""
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                                <p>فارسی و راست چین شده<i aria-hidden="true"></i> توسط <a
                                        href="{{ asset('https://webrubik.com/') }}" target="-blank">Webrubik.com </a>-
                                    غزاله نظام</p>
                                <div class="copyright_link"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        <!--::footer_part end::-->

        <!-- jquery plugins here-->
        <script src="js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="js/mixitup.min.js"></script>
        <!-- particles js -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- slick js -->
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
    </body>

    </html>
