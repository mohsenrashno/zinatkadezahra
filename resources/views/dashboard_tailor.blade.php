<!DOCTYPE html>
<html lang="en">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('میزکار خیاط') }}
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
                                <h4 class="fa fa-plane"></h4><br />سفارشات
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-road"></h4><br />مشتری
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-home"></h4><br />خیاط
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-credit-card"></h4><br />ارجاع کارها
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="fa fa-cutlery"></h4><br /> ثبت نام خیاط
                            </a>

                        </div>
                    </div>
                    <!-- end tab list -->
                    <!-- start tab content -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-12 bhoechie-tab">
                        <!-- flight section -->

                        <!-- train section -->


                        <!-- hotel search -->

                        <div class="bhoechie-tab-content">
                            <center>
                                <div class="limiter">
                                    <div class="container-table100">
                                        <div class="wrap-table100">
                                            <div class="table100">
                                                <table>
                                                    <thead>
                                                        <tr class="table100-head">
                                                            <th class="column1">شماره سفارش</th>
                                                            <th class="column2">نام محصول </th>
                                                            <th class="column3"> تاریخ سفارش</th>
                                                            <th class="column4"> شروع آماده سازی</th>
                                                            <th class="column5"> هزینه</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($orders as $order)
                                                            @php
                                                                $products = App\Models\Order::find($order->id)
                                                                    ->products()
                                                                    ->get();
                                                            @endphp
                                                            <tr>
                                                                @foreach ($products as $product)
                                                                    $all_products .= $temp->name;
                                                                    $all_products .= ', ';

                                                                    <td class="column1">{{ $order->id }}</td>
                                                                    <td class="column2">
                                                                        {{ product->name }}
                                                                    </td>
                                                                    <td class="column3">
                                                                        @if ($order->preparingdate == null)
                                                                            <button style="--c:#E95A49"><a
                                                                                    href="{{ route('preparing', ['id' => $order]) }}">ثبت</a></button>
                                                                        @else
                                                                            {{ $order->preparingdate }}
                                                                        @endif
                                                                    </td>
                                                                    <td class="column4">{{ ($order->price * 2) / 3 }}
                                                                    </td>
                                                                @endforeach
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
