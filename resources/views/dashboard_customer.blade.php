<!DOCTYPE html>
<html lang="en">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('میزکار مشتری') }}
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

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 bhoechie-tab-container" style="top:-150px; right:-5px">
                        <!-- start tab list -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 bhoechie-tab-menu">
                            <div class="list-group">
                                <a href="#" class="list-group-item active text-center">
                                    <h4 class="fa fa-plane"></h4><br />سفارشات
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
                                                                <th class="column1">شماره سفارش</th>
                                                                <th class="column2"> تاریخ سفارش</th>
                                                                <th class="column3">تاریخ لغو</th>
                                                                <th class="column4">وضعیت پرداخت</th>
                                                                <th class="column5">تاریخ پرداخت</th>
                                                                <th class="column6"> تاریخ آماده سازی</th>
                                                                <th class="column7"> تاریخ اتمام</th>
                                                                <th class="column8">تاریخ تحویل</th>
                                                                <th class="column9">کالاها </th>
                                                                <th class="column10">جمع کل</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($orders as $order)
                                                                @php
                                                                    $p = App\Http\Controllers\DashboardController::products($order->id);
                                                                    $all_products = null;
                                                                    foreach ($p as $temp) {
                                                                        $all_products .= $temp->name;
                                                                        $all_products .= ', ';
                                                                    }
                                                                @endphp
                                                                @if ($order->paidstatus == null)
                                                                    <tr
                                                                        onclick="window.location='{{ route('cart', ['order' => $order]) }}'">
                                                                        <td class="column1">{{ $order->id }}</td>
                                                                        <td class="column2">{{ $order->orderdate }}</td>
                                                                        <td class="column3">
                                                                            {{ $order->ordercanceleddate }}
                                                                        </td>
                                                                        <td class="column4">{{ $order->paidstatus }}
                                                                        </td>
                                                                        <td class="column5">{{ $order->paiddate }}</td>
                                                                        <td class="column6">{{ $order->preparingdate }}
                                                                        </td>
                                                                        <td class="column7">{{ $order->finisheddate }}
                                                                        </td>
                                                                        <td class="column8">{{ $order->deliverydate }}
                                                                        </td>
                                                                        <td class="column9"> {{ $all_products }}</td>
                                                                        <td class="column10">{{ $order->price }}</td>
                                                                        {{-- <td class="column11"><button
                                                                                style="--c:#E95A49"><a
                                                                                    href="{{ route('cart', ['id' => $order]) }}">پرداخت</a></button>
                                                                        </td> --}}
                                                                    </tr>
                                                                @else
                                                                    <tr style="cursor:default; background-color:yellow"
                                                                        onclick="paymentAlert()">
                                                                        <td class="column1">{{ $order->id }}</td>
                                                                        <td class="column2">{{ $order->orderdate }}
                                                                        </td>
                                                                        <td class="column3">
                                                                            {{ $order->ordercanceleddate }}
                                                                        </td>
                                                                        <td class="column4">{{ $order->paidstatus }}
                                                                        </td>
                                                                        <td class="column5">{{ $order->paiddate }}</td>
                                                                        <td class="column6">{{ $order->preparingdate }}
                                                                        </td>
                                                                        <td class="column7">{{ $order->finisheddate }}
                                                                        </td>
                                                                        <td class="column8">{{ $order->deliverydate }}
                                                                        </td>
                                                                        <td class="column9"> {{ $all_products }}</td>
                                                                        <td class="column10">{{ $order->price }}</td>
                                                                        {{-- <td class="column11"><button
                                                                                style="--c:#E95A49"><a
                                                                                    href="{{ route('cart', ['id' => $order]) }}">پرداخت</a></button>
                                                                        </td> --}}
                                                                    </tr>
                                                                @endif
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
            <script>
                function paymentAlert() {
                    alert("پرداخت شده است!");
                }
            </script>
            <script src="{{ asset('js/jquery_dashboard-3.1.1.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap_dashboard.min.js') }}"></script>
            <script src="{{ asset('js/scripts_dashboard.js') }}"></script>


</x-app-layout>
</body><!-- This template has been downloaded from Webrubik.com -->

</html>
