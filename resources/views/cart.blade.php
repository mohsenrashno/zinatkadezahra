<!doctype html>
<html lang="fa">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>قالب ریسپانسیو فروشگاهی pillomart :: دریافت شده از وب روبیک</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap4-rtl.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- icon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style_pillowmart.css') }}">
</head>

<body class="rtl">
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('img/logo.png" alt="logo') }}">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">صفحه اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">درباره ما</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        محصولات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="product_list.html"> لیست محصولات</a>
                                        <a class="dropdown-item" href="single-product.html">جزئیات محصولات</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        صفحات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html">
                                            ورود

                                        </a>
                                        <a class="dropdown-item" href="checkout.html">چک کردن محصولات</a>
                                        <a class="dropdown-item" href="cart.html">سبد خرید</a>
                                        <a class="dropdown-item" href="confirmation.html">تایید نهایی</a>
                                        <a class="dropdown-item" href="elements.html">جزئیات</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        وبلاگ
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> وبلاگ</a>
                                        <a class="dropdown-item" href="single-blog.html">صفحه داخلی وبلاگ</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                            </div>
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

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>سبد خرید</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Cart Area =================-->
    <section class="cart_area section_padding" dir="rtl">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">محصول</th>
                                <th scope="col">قیمت</th>
                                <th scope="col">تعداد</th>
                                <th scope="col">جمع کل</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/arrivel/arrivel_1.png" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <p> {{ $product->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{ $product->price }} تومان</h5>
                                    </td>
                                    <td>
                                        <div class="product_count" dir="ltr">
                                            <!-- <input type="text" value="1" min="1" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                                            <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                            <input class="input-number" type="text" value="1" min="0"
                                                max="10">
                                            <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{ $product->price * 1 }} تومان</h5>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="bottom_button">
                                <td>
                                    <a class="btn_1" href="{{ url('/') }}">ادامه خرید</a>
                                </td>

                                <td>
                                    {{-- <div class="cupon_text float-right">
                                        <a class="btn_1" href="#">عدم استفاده از کد تخفیف </a>
                                    </div> --}}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>مجموع</h5>
                                </td>
                                <td>
                                    <h5>{{ $order->price }} تومان</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area" dir="ltr">
                                <td></td>
                                <td></td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            نحوه پرداخت
                                            <br>
                                            <br>
                                            <li>
                                                درگاه اینترنتی <input type="radio"
                                                    aria-label="Radio button for following text input" name="payment"
                                                    id="payment1">
                                            </li>
                                            <li>
                                                کارت <input type="radio"
                                                    aria-label="Radio button for following text input" name="payment"
                                                    id="payment2">
                                            </li>
                                            <li class="active">
                                                بانک <input type="radio"
                                                    aria-label="Radio button for following text input" name="payment"
                                                    id="payment3">
                                            </li>
                                            <li>
                                                نقدی <input type="radio"
                                                    aria-label="Radio button for following text input" name="payment"
                                                    id="payment4">
                                            </li>



                                        </ul>
                                        <h6>


                                        </h6>
                                        <select class="shipping_select">
                                            <option value="1">ایران</option>
                                            <option value="2">هند</option>
                                            <option value="4">پاکستان</option>
                                        </select>
                                        <input class="post_code" type="text" id="address_field"
                                            placeholder="آدرس" value={{ $address }} />
                                        <input class="post_code" type="text" placeholder="کدپستی" />
                                        <a class="btn_1" href="{{ route('payment', ['id' => $order, 'paymentType' => 'نقد' ]) }}" 
                                            {{-- href="javascript:showfunction()" --}}
                                            onclick="verifyData()"> پرداخت</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        {{-- <a class="btn_1" href="#">ادامه خرید</a>
                        <a class="btn_1 checkout_btn_1" href="#">رفتن به قسمت چک کردن محصول</a> --}}
                    </div>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->
    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.html">صفحه اصلی</a>

                                <a href="product_list.html">محصولات</a>
                                <a href="#">صفحات</a>
                                <a href="blog.html">وبلاگ</a>
                                <a href="contact.html">تماس با ما</a>
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
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                            <p>فارسی و راست چین شده<i class="ti-heart" aria-hidden="true"></i> توسط <a
                                    href="https://webrubik.com/" target="-blank">Webrubik.com </a>- غزاله نظام
                            </p>
                            <div class="copyright_link">
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
    {{-- <script>
        function showfunction() {
            var id = document.querySelector('input[name = "payment"]:checked').value;
            var url = "{{ route('payment', ['id' => $order, 'paymentType' => `{id}`]) }}";
          //  url = url.replace('id', id);
            document.location.href = url;
        }
    </script> --}}

    <script>
        function verifyData() {
            var empt1 = document.getElementById('address_field');
            var empt2 = document.getElementById('payment1');
            var empt3 = document.getElementById('payment2');
            var empt4 = document.getElementById('payment3');
            var empt5 = document.getElementById('payment4');
            if ((empt1.value == "") || (!empt2.checked && !empt3.checked && !empt4.checked && !empt5.checked)) {
                alert("فیلد آدرس و نحوه پرداخت الزامی است!");
                event.preventDefault();
            } else {
                if (empt2.checked) {
                    $paymentType = 'درگاه اینترنتی';
                } else if (empt3.checked) {
                    $paymentType = 'کارت ';
                } else if (empt4.checked) {
                    $paymentType = 'حساب بانکی ';
                } else {
                    $paymentType = 'نقد ';
                }
                alert("پرداخت با موفقیت انجام شد.!");
            }
        }
    </script>

    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap_pillowmart.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
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
