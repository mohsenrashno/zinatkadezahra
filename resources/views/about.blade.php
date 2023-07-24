<!doctype html>
<html lang="fa">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>زینتکده زهرا</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-rtl.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                            <h2>درباره ما</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb part end-->

        <!-- product list part start-->
        <section class="about_us padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about_us_content">
                            <h5>هدف ما</h5>
                            <h3>هدف ما تولید محصولات با کیفیت بوده با آنها آشپزخانه خانه خود را زیبا کنید.</h3>
                            <div class="about_us_video">
                                <img src="{{ asset('img/about.jpg') }}" alt="#" class="img-fluid">
                                <a class="about_video_icon popup-youtube"
                                    href=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product list part end-->

        <!-- feature part here -->
        <section class="feature_part section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="feature_part_tittle">
                            <h3>با وسایل نگه داری آشپزخانه زیبایی را به خانه هدیه کنید.</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="feature_part_content">
                            <p> ما سعی می کنیم با استفاده از پارچه ها و مواد مرغوب محصولات با کیفیتی برای شما تولید کنیم.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{ asset('img/icon/feature_icon_1.svg') }}" alt="#">
                            <h4>پرداخت با کارت </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{ asset('img/icon/feature_icon_2.svg') }}" alt="#">
                            <h4>سفارش آنلاین</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_feature_part">
                            <img src="{{ asset('img/icon/feature_icon_3.svg') }}" alt="#">
                            <h4>تحویل از طریق پست</h4>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset('img/icon/feature_icon_4.svg')}}" alt="#">
                        <h4>محصولات همراه با جایزه</h4>
                    </div>
                </div> --}}
                </div>
            </div>
        </section>
        <!-- feature part end -->

        <!-- client review part here -->
        <section class="client_review " style="direction: ltr">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="client_review_slider owl-carousel ">
                            <div class="single_client_review" dir="rtl">
                                <div class="client_img">
                                    <img src="{{ asset('img/client.png') }}" alt="#">
                                </div>
                                <p>خداوند زیباست و زیبایی را دوست دارد، خانه هایمان را زیبا کنیم.</p>
                                <h5> محسن رشنو</h5>
                            </div>
                            <div class="single_client_review" dir="rtl">
                                <div class="client_img">
                                    <img src="{{ asset('img/client.png') }}" alt="#">
                                </div>
                                <p>نظم جزء الزامات زندگی است با وسایل نظم دهنده زندگیمان را منظم کنیم.</p>
                                <h5> </h5>
                            </div>
                            <div class="single_client_review" dir="rtl">
                                <div class="client_img">
                                    <img src="{{ asset('img/client.png') }}" alt="#">
                                </div>
                                <p>انسان برای زندگی به انگیره نیاز دارد با وسایل خوب و زیبا انگیزه را وارد زندگی خود کنیم.
                                </p>
                                <h5> محسن رشنو</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- client review part end -->

        <!-- subscribe part here -->
        <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content" style="direction: rtl">
                            <h2>به روز رسانی و مطالب پیشرفته!</h2>
                            <p>ما سعی می کنیم با کیفیت ترین و زیباترین محصولات را برای شما تولید کنیم .</p>
                            {{-- <div class="subscribe_form">
                        <input type="email" placeholder="ایمیل خود را وارد کنید">
                        <a href="#" class="btn_1">تایید پرداخت</a>
                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe part end -->

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
        <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
        <!-- popper js -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
        <!-- carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <!-- slick js -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
    </html>
