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
                        <a class="navbar-brand" href="{{ url('welcome.blade.php')}}"> <img src="{{ asset('img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('welcom.blade.php')}}">صفحه اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('about.html')}}">درباره ما</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ asset('blog.html')}}" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        محصولات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{ asset('product_list.html')}}"> لیست محصولات</a>
                                        <a class="dropdown-item" href="{{ asset('single-product.html')}}">جزئیات محصولات</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ asset('blog.html')}}" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        صفحات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{ asset('login.html')}}">
                                            ورود

                                        </a>
                                        <a class="dropdown-item" href="{{ asset('checkout.html')}}">چک کردن محصولات</a>
                                        <a class="dropdown-item" href="{{ asset('cart.html')}}">سبد خرید</a>
                                        <a class="dropdown-item" href="{{ asset('onfirmation.html')}}">تایید نهایی</a>
                                        <a class="dropdown-item" href="{{ asset('elements.html')}}">جزئیات</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ asset('blog.html')}}" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        وبلاگ
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{ asset('blog.html')}}"> وبلاگ</a>
                                        <a class="dropdown-item" href="{{ asset('single-blog.html')}}">صفحه داخلی وبلاگ </a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('contact.html')}}">تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="{{ asset('cart.html')}}">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="جست و جو">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>بالاترین کیفیت
                                بالش و کوسن</h1>
                            <p>تنوع در طرح و رنگ، انواع طبی و تزئینی</p>
                            <a href="{{ asset('product_list.html')}}" class="btn_1">همین الان خرید کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="{{ asset('img/banner.png')}}" alt="#" class="img-fluid">
            <img src="{{ asset('img/banner_pattern.png')}}" alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->

    <!-- product list start-->
    <section class="single_product_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ asset('img/single_product_1.png')}}" class="img-fluid" alt="#">
                                    <img src="{{ asset('img/product_overlay.png')}}" alt="#"
                                        class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>شروع قیمت از 50000 تومان</h5>
                                    <h2> <a href="{{ asset('single-product.html')}}"></a> کوسن مربعی طرح دار پر شده با الیاف مصنوعی
                                    </h2>
                                    <a href="{{ asset('product_list.html')}}" class="btn_3">امتحان کنید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ asset('img/single_product_2.png')}}" class="img-fluid" alt="#">
                                    <img src="{{ asset('img/product_overlay.png')}}" alt="#"
                                        class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>شروع قیمت از 50000 تومان</h5>
                                    <h2> <a href="{{ asset('single-product.html')}}">کوسن مربعی پر شده با الیاف مصنوعی</a> </h2>
                                    <a href="{{ asset('product_list.html')}}" class="btn_3">امتحان کنید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ asset('img/single_product_3.png')}}" class="img-fluid" alt="#">
                                    <img src="{{ asset('img/product_overlay.png')}}" alt="#"
                                        class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>شروع قیمت از 50000 تومان</h5>
                                    <h2> <a href="{{ asset('single-product.html')}}">فوم قابل استفاده در بالش</a> </h2>
                                    <a href="{{ asset('product_list.html')}}" class="btn_3">امتحان کنید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list end-->


    <!-- trending item start-->
    <section class="trending_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>محصولات جدید</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="{{ asset('img/tranding_item/tranding_item_1.png')}}" alt="#" class="img-fluid">
                        </div>
                        <h3> <a href="{{ asset('single-product.html')}}">بالش دور گردنی مخصوص مسافرت
                            </a> </h3>
                        <p>شروع قیمت از 20000 تومان</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset('img/tranding_item/tranding_item_2.png')}}" alt="#" class="img-fluid">
                        <h3> <a href="{{ asset('single-product.html')}}">بالشتک های طبی از جنس فوم</a> </h3>
                        <p>شروع قیمت از 20000 تومان</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset('img/tranding_item/tranding_item_3.png')}}" alt="#" class="img-fluid">
                        <h3> <a href="{{ asset('single-product.html')}}">بالش های طبی از جنس فوم و کتان</a> </h3>
                        <p>شروع قیمت از 20000 تومان</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset('img/tranding_item/tranding_item_4.png')}}" alt="#" class="img-fluid">
                        <h3> <a href="{{ asset('single-product.html')}}"></a> بالش دور گردنی مخصوص مسافرت</h3>
                        <p>شروع قیمت از 20000 تومان</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset('img/tranding_item/tranding_item_5.png')}}" alt="#" class="img-fluid">
                        <h3> <a href="{{ asset('single-product.html')}}">فوم و کتان مخصوص بالش های طبی</a> </h3>
                        <p>شروع قیمت از 20000 تومان</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset('img/tranding_item/tranding_item_6.png')}}" alt="#" class="img-fluid">
                        <h3> <a href="{{ asset('single-product.html')}}">بالش دور گردنی طبی مخصوص مسافرت</a> </h3>
                        <p>شروع قیمت از 20000 تومان</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending item end-->

    <!-- client review part here -->
    <section class="client_review " style="direction: ltr">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel ">
                        <div class="single_client_review" dir="rtl">
                            <div class="client_img">
                                <img src="{{ asset('img/client.png')}}" alt="#">
                            </div>
                            <p>"استفاده از بالش های طبی را در سفرهای طولانی مدت پیشنهاد می کنم.</p>
                            <h5>- رضا محمدی</h5>
                        </div>
                        <div class="single_client_review" dir="rtl">
                            <div class="client_img">
                                <img src="{{ asset('img/client_1.png')}}" alt="#">
                            </div>
                            <p>"برای جلوگیری از گردن درد گزینه های مناسبی هستند.</p>
                            <h5>- امیر امیری</h5>
                        </div>
                        <div class="single_client_review" dir="rtl">
                            <div class="client_img">
                                <img src="{{ asset('img/client_2.png')}}" alt="#">
                            </div>
                            <p>"برای نشستن های طولانی مدت روی مبل قابل قبول اند.</p>
                            <h5>- محمد موسوی</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->


    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>با استفاده از مواد ارگانیک، محصولات استانداردی در اینجا تولید می شود.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>شرکت ما با بهره گیری از استراتژی های مختلف و استفاده از مواد ارگانیک و طبیعی سعی در تولید
                            محصولاتی با کیفیت و مطابق نیاز شما دارد.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset('img/icon/feature_icon_1.svg')}}" alt="#">
                        <h4>پشتیبانی کارت های اعتباری</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset('img/icon/feature_icon_2.svg')}}" alt="#">
                        <h4>سفارش آنلاین</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset('img/icon/feature_icon_3.svg')}}" alt="#">
                        <h4>تحویل رایگان</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset('img/icon/feature_icon_4.svg')}}" alt="#">
                        <h4>محصولات همراه با جایزه</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content" style="direction: rtl">
                        <h2>به روز رسانی و مطالب پیشرفته!</h2>
                        <p>ما سعی در ارائه محصولات با کیفیت تر و با دوام تر با توجه با استانداردهای روز جهان داریم .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="ایمیل خود را وارد کنید">
                            <a href="#" class="btn_1">تایید پرداخت</a>
                        </div>
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
                                <a href="{{ url('welcome.blade.php')}}"><img src="{{ asset('img/logo.png')}}" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="{{ url('welcome.blade.php')}}">صفحه اصلی</a>

                                <a href="{{ asset('product_list.html')}}">محصولات</a>
                                <a href="#">صفحات</a>
                                <a href="{{ asset('blog.html')}}">وبلاگ</a>
                                <a href="{{ asset('contact.html')}}">تماس با ما</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                                    class="ti-heart" aria-hidden="true"></i> by <a href="{{ asset('https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                            <p>فارسی و راست چین شده<i aria-hidden="true"></i> توسط <a href="{{ asset('https://webrubik.com/"
                                    target="-blank">Webrubik.com </a>- غزاله نظام</p>
                            <div class="copyright_link"></div>
                            <a href="#">ضوابط و شرایط</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <script src="js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/contact.js')}}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('js/jquery.form.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js')}}"></script>
</body>

</html>
