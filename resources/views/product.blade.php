<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>زینتکده زهرا</title>
	<!-- start css and style -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
	<link type="text/css" href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
	<link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>
<body>
<div class="container">
			{{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
	<div class="row">
		<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-push-2 col-md-push-1">
			<!-- start product box -->
			<div class="product">
				<!-- start back arrow -->
				<div class="header">
				<a href="{{ url('/') }}">
					<div class="back"></div>
				</a>
				</div>
				<!-- end back arrow -->
				<!-- start box -->
				<div class="main">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<!-- start right side -->
							<div class="right">
								<h1>{{ $productname }}</h1>
								<h2>{{ $producttype }} </h2>
								<h3><input disabled name="product-price" id="product-price" value="{{ $price }}">  تومان</h3>
								<img src="{{asset('pics/'.$productname.'.jpg')}}" alt="" />
							</div>
							<!-- end right side -->
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<!-- start left side -->
							<div class="left">
								<p>
								@php
								$filename = './description/'.$productname.'.txt';
								$f = fopen($filename, 'r');

								if ($f) {
    							$contents = fread($f, filesize($filename));
    							fclose($f);
    							echo nl2br($contents);
								}
								@endphp
								</p>
								
								<p>
									<span class="fa fa-star yellow"></span>
									<span class="fa fa-star yellow"></span>
									<span class="fa fa-star yellow"></span>
									<span class="fa fa-star yellow"></span>
									<span class="fa fa-star"></span>
									<span>(4.67 - 172 بازخورد)</span>
								</p>
								<p class="quantity">کیفیت <span class="fa fa-angle-right angle"></span><span id="qt">1</span><span class="fa fa-angle-left angle"></span></p>
							</div>
							<!-- end left side -->
						</div>
					</div>
				</div>
				<!-- end box -->
				<!-- start footer and total -->
				<div class="footer col-lg-12 col-xs-12 p-0">
					<div class="left col-lg-6 col-xs-6">
						<p>
							<span id="price">{{ $price }}</span> تومان
						</p>
					</div>
					<div class="right col-lg-6 col-xs-6">
						@php
                            $id = auth()->user();
                     	@endphp

                        @if($id != null)
                                 <a href="{{ route('order', ['id' => $id, 'productname' => $productname]) }}"> <p>افزودن به سبد</p>  </a>
				        @endif
						
					</div>
				</div>
				<!-- end footer and total -->
			</div>
			<!-- end product box -->
		</div>
	</div>
</div>
<!-- start java script -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/rebound.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
