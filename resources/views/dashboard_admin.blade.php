<!DOCTYPE html>
<html lang="en">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('میزکار مدیر') }}
        </h2>
    </x-slot>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title> زینتکده زهرا </title>
        <!-- start styles and css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap_dashboard-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font_dashboard-awesome.min.css') }}">
        <link type="text/css" href="{{ asset('css/style_table.css') }}" rel="stylesheet" />
		<link type="text/css" href="{{ asset('css/style_button.css') }}" rel="stylesheet" />
        <!-- end styles and css -->
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 bhoechie-tab-container">
                    <!-- start tab list -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 bhoechie-tab-menu">
                        <div class="list-group">
                            <a href="#" class="list-group-item active text-center">
                                <h4 class="fa fa-plane"></h4><br />پرواز
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-road"></h4><br />قطار
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-home"></h4><br />هتل
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-cutlery"></h4><br />رستوران
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-credit-card"></h4><br />کارت اعتباری
                            </a>
                        </div>
                    </div>
                    <!-- end tab list -->
                    <!-- start tab content -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-12 bhoechie-tab">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active">
                            <center>
                                <div class="limiter">
                                    <div class="container-table100">
                                        <div class="wrap-table100">
                                            <div class="table100">
                                                <table>
                                                    <thead>
                                                        <tr class="table100-head">
                                                            <th class="column1">تاریخ</th>
                                                            <th class="column2">شماره سفارش</th>
                                                            <th class="column3">نام</th>
                                                            <th class="column4">قیمت</th>
                                                            <th class="column5">تعداد</th>
                                                            <th class="column6">جمع کل</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="column1">1398-09-29 01:22</td>
                                                            <td class="column2">200398</td>
                                                            <td class="column3">گوشی موبایل iPhone X 64Gb Grey</td>
                                                            <td class="column4">999 هزار تومان</td>
                                                            <td class="column5">1</td>
                                                            <td class="column6">999 هزار تومان</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="column1">1398-09-28 05:57</td>
                                                            <td class="column2">200397</td>
                                                            <td class="column3">گوشی موبایل Samsung S8 Black</td>
                                                            <td class="column4">756 هزار تومان</td>
                                                            <td class="column5">1</td>
                                                            <td class="column6">756 هزار تومان</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="column1">1398-09-26 05:57</td>
                                                            <td class="column2">200396</td>
                                                            <td class="column3">دسته حرفه ای کامپیوتر</td>
                                                            <td class="column4">22 هزار تومان</td>
                                                            <td class="column5">2</td>
                                                            <td class="column6">44 هزار تومان</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </center>
                        </div>
                        <!-- train section -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <h1 class="fa fa-road"></h1>
                                <h2>به زودی افتتاح خواهد شد</h2>
                                <h3>رزرو قطار</h3>
                            </center>
                        </div>

                        <!-- hotel search -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <h1 class="fa fa-home"></h1>
                                <h2>به زودی افتتاح خواهد شد</h2>
                                <h3>رزرو هتل</h3>
                            </center>
                        </div>
                        <div class="bhoechie-tab-content">
                            <center>
                                <h1 class="fa fa-cutlery"></h1>
                                <h2>به زودی افتتاح خواهد شد</h2>
                                <h3>رزرو رستوران</h3>
                            </center>
                        </div>
                        <div class="bhoechie-tab-content">
                            <center>
                                <h1 class="fa fa-credit-card"></h1>
                                <h2>به زودی افتتاح خواهد شد</h2>
                                <h3>دریافت کارت اعتباری</h3>
                            </center>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
        <!-- start javascript -->
        <script src="{{ asset('js/jquery_dashboard-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap_dashboard.min.js') }}"></script>
        <script src="{{ asset('js/scripts_dashboard.js') }}"></script>


</x-app-layout>
</body><!-- This template has been downloaded from Webrubik.com -->

</html>
