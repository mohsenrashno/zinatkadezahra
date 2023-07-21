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
                                <h4 class="fa fa-cutlery"></h4><br /> ثبت محصولات
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
                                                            <th class="column12">نام مشتری </th>
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
                                                            <tr>
                                                                <td class="column1">{{ $order->id }}</td>
                                                                <td class="column12">
                                                                    {{ App\Models\Order::find($order->id)->user()->first()->name }}
                                                                </td>
                                                                <td class="column2">{{ $order->orderdate }}</td>
                                                                <td class="column3">{{ $order->ordercanceleddate }}
                                                                </td>
                                                                <td class="column4">{{ $order->paidstatus }}</td>
                                                                <td class="column5">{{ $order->paiddate }}</td>
                                                                <td class="column6">
                                                                    @if ($order->preparingdate == null)
                                                                        <button style="--c:#E95A49"><a
                                                                                href="{{ route('preparing', ['id' => $order]) }}">ثبت</a></button>
                                                                    @else
                                                                        {{ $order->preparingdate }}
                                                                    @endif

                                                                </td>
                                                                <td class="column7">
                                                                    @if ($order->finisheddate == null)
                                                                        <button style="--c:#E95A49"><a
                                                                                href="{{ route('finished', ['id' => $order]) }}">ثبت</a></button>
                                                                    @else
                                                                        {{ $order->finisheddate }}
                                                                    @endif
                                                                </td>
                                                                <td class="column8">

                                                                    @if ($order->deliverydate == null)
                                                                        <button style="--c:#E95A49"><a
                                                                                href="{{ route('delivery', ['id' => $order]) }}">ثبت</a></button>
                                                                    @else
                                                                        {{ $order->deliverydate }}
                                                                    @endif
                                                                </td>
                                                                <td class="column9"> {{ $all_products }}</td>
                                                                <td class="column10">{{ $order->price }}</td>

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
                        <!-- train section -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <div class="limiter">
                                    <div class="container-table100">
                                        <div class="wrap-table100">
                                            <div class="table100">
                                                <table>
                                                    <thead>
                                                        <tr class="table100-head">
                                                            <th class="column1">نام مشتری</th>
                                                            <th class="column2"> تعداد سفارشات </th>
                                                            <th class="column3"> تعداد کالاهای سفارش داده شده </th>
                                                            <th class="column4"> مجموع قیمت سفارشات</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($customers as $customer)
                                                            @php
                                                                $temp_orders = App\Models\User::find($customer->id)
                                                                    ->orders()
                                                                    ->get();
                                                                $orders_count = 0;
                                                                $products_count = 0;
                                                                $orders_price = 0;
                                                                foreach ($temp_orders as $temp_order) {
                                                                    $temp_products = App\Models\Order::find($temp_order->id)
                                                                        ->products()
                                                                        ->get();
                                                                    foreach ($temp_products as $temp_product) {
                                                                        $products_count = $products_count + 1;
                                                                    }
                                                                    $orders_count = $orders_count + 1;
                                                                    $temp_price = App\Models\Order::find($temp_order->id)->price;
                                                                    $orders_price = $orders_price + $temp_price;
                                                                }
                                                            @endphp
                                                            <tr>
                                                                <td class="column1">{{ $customer->name }}</td>
                                                                <td class="column2">
                                                                    {{ $orders_count }}
                                                                </td>
                                                                <td class="column3">{{ $products_count }}</td>
                                                                <td class="column4">{{ $orders_price }}
                                                                </td>



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
                                                            <th class="column1">نام خیاط</th>
                                                            <th class="column2"> تعداد کارهای شده </th>
                                                            <th class="column3">مجموع دستمزد خیاط</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($tailors as $tailor)
                                                            @php
                                                                $temp_tailor = DB::table('order_product')
                                                                    ->where('user_id', $tailor->id)
                                                                    ->get();
                                                                
                                                                $work_count = 0;
                                                                $works_price = 0;
                                                                foreach ($temp_tailor as $temp_product) {
                                                                    $temp_price = App\Models\Product::find($temp_product->product_id)->price;
                                                                    $work_count = $work_count + 1;
                                                                    $works_price = $works_price + $temp_price;
                                                                }
                                                            @endphp
                                                            <tr>
                                                                <td class="column1">{{ $tailor->name }}</td>
                                                                <td class="column2">
                                                                    {{ $work_count }}
                                                                </td>
                                                                <td class="column3">{{ ($works_price * 2) / 3 }}</td>

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
                        <div class="bhoechie-tab-content">
                            <center>
                                <div class="limiter">
                                    <div class="container-table100">
                                        <div class="wrap-table100">
                                            <div class="table100">
                                                <table>
                                                    <thead>
                                                        <tr class="table100-head">
                                                            <th class="column1">شماره سفارش </th>
                                                            <th class="column2"> نام مشتری </th>
                                                            <th class="column3"> نام کالا</th>
                                                            <th class="column4"> نام خیاط</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $order)
                                                            @php
                                                                $user_id = App\Models\Order::find($order->id)
                                                                    ->user()
                                                                    ->first();
                                                                $user_name = App\Models\User::find($user_id)->first()->name;
                                                                $products = App\Models\Order::find($order->id)
                                                                    ->products()
                                                                    ->get();
                                                            @endphp

                                                            @foreach ($products as $product)
                                                                <tr>
                                                                    <td class="column1">{{ $order->id }}</td>
                                                                    <td class="column2">
                                                                        {{ $user_name }}
                                                                    </td>
                                                                    <td class="column3">{{ $product->name }}
                                                                    </td>

                                                                    <td class="column3">
                                                                        @php
                                                                            $tailors = App\Models\User::all()->where('role', 'tailor');
                                                                        @endphp
                                                                        <select name="tailors" id="tailors">

                                                                            @foreach ($tailors as $tailor)
                                                                                <option value="volvo">
                                                                                    {{ $tailor->name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </td>
                                                                    <td class="column4">
                                                                        @php
                                                                            $temp_record = DB::table('order_product')
                                                                                ->where('order_id', $order->id)
                                                                                ->where('product_id', $product->id)
                                                                                ->first();
                                                                        @endphp
                                                                        @if ($temp_record->user_id == null)
                                                                            <button style="--c:#E95A49"><a
                                                                                    href="{{ route('delivery', ['id' => $order]) }}">ثبت</a></button>
                                                                        @else
                                                                            {{ $order->deliverydate }}
                                                                        @endif

                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <div class="bhoechie-tab-content">
                            <center>
                                <form method="GET" action="{{ route('pruductRegister') }}">
                                    @csrf

                                    <div>
                                        <x-input-label for="name" :value="__('نام')" />
                                        <x-text-input id="name" class="block mt-1 w-full" type="text"
                                            name="name" :value="old('name')" required autofocus autocomplete="name"
                                            style="background-color:yellow; direction:rtl" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>


                                    <div class="mt-4">
                                        <x-input-label for="type" :value="__('نوع')" />
                                        <x-text-input id="type" class="block mt-1 w-full" type="text"
                                            name="type" :value="old('text')" required autocomplete="type"
                                            style="background-color:yellow; direction:rtl" />
                                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-input-label for="size" :value="__('اندازه')" />
                                        <x-text-input id="size" class="block mt-1 w-full" type="text"
                                            name="size" :value="old('text')" required autocomplete="size"
                                            style="background-color:yellow; direction:rtl" />
                                        <x-input-error :messages="$errors->get('size')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-input-label for="price" :value="__('قیمت')" />
                                        <x-text-input id="price" class="block mt-1 w-full" type="text"
                                            name="price" :value="old('text')" required autocomplete="price"
                                            style="background-color:yellow; direction:rtl" />
                                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <input type="submit" style="--c:#E95A49" value="ثبت">
                                    </div>
                                </form>
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
