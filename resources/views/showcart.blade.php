<!DOCTYPE HTML>
<html>
	<head>

    <base href="/public">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trendy Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="C:\Users\admin\Desktop\tasty\css\all.min.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="/"> <em> Hungry Birds Restaurent</em> <span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class=""><a href="/">Home</a></li>
							<li><a href="menu">Menu</a></li>
							<li class="has-dropdown">
								<a href="gallery">Gallery</a>
								{{-- <ul class="dropdown">
									<li><a href="#">Events</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Coffees</a></li>
								</ul> --}}
							</li>
							<li><a href="reservation">Reservation</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>

                            {{-- <li class="active">
                                @auth

                                <a href="{{url('/showcart', Auth::user()->id)}}">

                                <button class="btn-outline" type="submit">
                                    <i class="fas fa-shopping-cart me-1"></i>
                                    Cart
                                    <span class="badge bg-dark text-white ms-1 rounded-pill">  {{$count}} </span>
                                </button>

                                </a>

                                @endauth

                                @guest

                                <button class="btn-outline" type="submit">
                                    <i class="fas fa-shopping-cart me-1"></i>
                                    Cart
                                    <span class="badge bg-dark text-white ms-1 rounded-pill"> 0 </span>
                                </button>

                                @endguest
                            </li> --}}



                            <li>
                                @auth

                                <a href="{{url('/showcart', Auth::user()->id)}}">

                                    <button class="btn btn-outline" type="submit" style="font-size: 1.5rem; padding: 3px 8px;">
                                        <i class="fas fa-shopping-cart me-1" style="font-size: 1.2rem;"></i>
                                        Cart
                                        <span class="badge bg-white text-black ms-1 rounded-pill" style="font-size: 1.2rem; padding: 2px 6px; font-family: 'Arial', sans-serif; font-weight: bold;">{{$count}}</span>
                                    </button>

                                </a>

                                @endauth

                                @guest

                                <button class="btn btn-outline" type="submit" style="font-size: 1.5rem; padding: 3px 8px;">
                                    <i class="fas fa-shopping-cart me-1" style="font-size: 1.2rem;"></i>
                                    Cart
                                    <span class="badge bg-white text-black ms-1 rounded-pill" style="font-size: 1.2rem; padding: 2px 6px; font-family: 'Arial', sans-serif; font-weight: bold;">0</span>
                                </button>

                                @endguest
                            </li>




                            <li><a href="{{url('show_order')}}">Orders</a></li>


                            <li>

                                 @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                        @auth
                                            <li>

											<x-app-layout>

											</x-app-layout>

											</li>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif

                            </li>
						</ul>

					</div>
				</div>

			</div>
		<!-- </div> -->
	</nav>


    <div id="fh5co-about" >

		<div class="row">
			<div class="col-md-6" style="width: calc(70%);">
				<table style="margin-top: 30px;" align="right" bgcolor="white">

					<tr >
                        <th width="60%" style="padding: 30px; text-align: center;"> Food image </th>
						<th width="20%" style="padding: 30px;"> Food name </th>
						<th width="20%" style="padding: 30px;"> Unit Price </th>
						<th style="padding: 30px;"> Quantity </th>
                        <th style="padding: 30px;"> Total </th>

					</tr>

                    <form action="{{url('orderconfirm')}}" method="POST">

                    @csrf

					@foreach ($data as $data)
					<tr align="center">

                        <td style="padding: 10px;">
                            <img width="40%" height="40%" src="/foodimage/{{$data->image}}" alt="">
                        </td>
						<td style="padding: 10px; ">
                            <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                            {{$data->title}}
                        </td>
						<td style="padding: 10px; ">
                            <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                            {{$data->price}}$
                        </td>
						<td style="padding: 10px; ">
                            <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                            {{$data->quantity}}
                        </td>
                        <td style="padding: 10px; ">
                            <input type="text" name="total[]" value="{{$data->quantity * $data->price}}" hidden="">
                            {{$data->quantity * $data->price}}$
                        </td>

					</tr>

					@endforeach

				</table>
			</div>

			<div class="col-md-6" style="width: calc(30%);">
				<table style="margin-top: 30px;">
					<tr><th style="padding: 30px; text-align: center"> Action </th></tr>

					@foreach ($data2 as $data2)

					<tr align="center">
						<td style="padding: 37px;"><a href="{{url('/remove',$data2->id)}}" class="btn btn-primary" > Remove </a></td>
					</tr>

					@endforeach

				</table>
			</div>

		</div>

		<div class="row">
			<div class="col-mid-12" align="center" style="padding: 10px">

				<button class="btn btn-warning" style="color: black; font-weight: 500" type="button" id="order"> Order Now </button>

			</div>

			<div id="appear" align="center" style="padding: 10px; display:none;">

				<div style="padding: 10px">
					<label> Name </label>
					<input style="border-radius:20px; height:50px; width:300px; font-size:20px" class="form-control" type="text" name="name" placeholder="Name">
				</div>

				<div style="padding: 10px">
					<label> Phone </label>
					<input style="border-radius:20px; height:50px; width:300px; font-size:20px" class="form-control" type="text" name="phone" placeholder="Phone Number">
				</div>

				<div style="padding: 10px">
					<label> Address </label>
					<input style="border-radius:20px; height:50px; width:300px; font-size:20px" class="form-control" type="text" name="address" placeholder="Addresss">
				</div>

                <div style="padding: 10px">
                    <label for="readonlyInput"> Sub Total </label>
                    <input style="border-radius:20px; height:50px; width:300px; font-size:20px; color: black" class="form-control" type="text" name="sub" id="readonlyInput" readonly>
                </div>

				<div style="padding: 10px">
					<input style="color: black; font-weight: 500" class="btn btn-success" type="submit" value="Order Confirm">
                    <button style="color: black; font-weight: 500" id="close" type="button" class="btn btn-danger">Close</button>
				</div>

			</div>

		</div>

    </form>

	</div>







    <!-- style="position: relative; top: -190px; right: -365px;" -->


    <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Tasty</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Gallery</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Landing Page</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Personal</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">e-Commerce</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<script type="text/javascript">

		$("#order").click(

			function()
            {
                $("#appear").show();
            }

		);

        $("#close").click(

			function()
            {
                $("#appear").hide();
            }

		);

	</script>


    <script>
        document.getElementById('order').addEventListener('click', function() {
            // Show the order confirmation form
            document.getElementById('appear').style.display = 'block';

            // Calculate the subtotal
            var totalInputs = document.getElementsByName('total[]');
            var subtotal = 0;
            for (var i = 0; i < totalInputs.length; i++) {
                subtotal += parseFloat(totalInputs[i].value);
            }

            // Set the subtotal in the readonly input field
            document.getElementById('readonlyInput').value = subtotal.toFixed(2) + '$';
        });

        document.getElementById('close').addEventListener('click', function() {
            // Hide the order confirmation form
            document.getElementById('appear').style.display = 'none';
        });
    </script>



	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
