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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6u
    LrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="C:\Users\admin\Desktop\tasty\css\all.min.css">

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
							<li class="active"><a href="reservation">Reservation</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>

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

    <div class="row" style="margin-top:200px">


				<div class="col-md-6" >

                        <div class="col-md-12 fh5co-heading animate-box">

                            <div class="row" >

                                    <div  style="text-align: center" class="table_img">
                                        <img width="90%" src="/table/{{$data->image}}" alt="">
                                    </div>

                                    <div class="couple_table"  style="text-align: center">
                                        <h2 style="color: rgb(226, 226, 226); text-align:center">{{$data->table_title}}</h2>
                                        <p>{{$data->description}}</p>
                                        <h3 style="color: rgb(226, 226, 226);">Table Type : {{$data->table_type}}</h3>
                                        <h3 style="color: rgb(226, 226, 226);"> Price : {{$data->price}}</h3>

                                    </div>

                            </div>
                        </div>



                </div>


   				<div class="col-md-6 ">


                    <div>

                        @if (session()->has('message'))
                        <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert">X</button>
                        {{session()->get('message')}}
                        </div>
                        @endif


                    </div>

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color: red; font-weight: bold">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

					<form action="{{url('add_booking',$data->id)}}" id="form-wrap" method="post">

						@csrf

						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Your Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                @if(Auth::id())
                                style="color: black; font-size: 20px;"
                                value="{{Auth::user()->name}}"
                                @endif>
							</div>
						</div>


                        <div class="row form-group">
							<div class="col-md-12">
								<label for="email">Your Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Your E-mail"
                                @if(Auth::id())
                                style="color: black; font-size: 20px;"
                                value="{{Auth::user()->email}}"
                                @endif>
							</div>
						</div>


                         <div class="row form-group">
							<div class="col-md-12">
								<label for="phone">Phone Number</label>
								<input type="tel" name="phone" id="phone" class="form-control" placeholder="Your Number"
                                @if(Auth::id())
                                style="color: black; font-size: 20px;"
                                value="{{Auth::user()->phone}}"
                                @endif>
							</div>
						</div>


						{{-- <div class="row form-group">
							<div class="col-md-12">
								<label for="many">How Many People</label>
								<input min="1" class="form-control custom_select" type="number" name="guest" placeholder="Number Of Guest"
                                @if(Auth::id())
                                style="color: black; font-size: 20px;"
                                @endif>
							</div>
						</div> --}}

                        <div class="row form-group">
							<div class="col-md-12">
								<label for="date">Date</label>
								<input type="date" name="date" id="date" class="form-control"/
                                @if(Auth::id())
                                style="color: black; font-size: 20px;"
                                @endif>
							</div>
						</div>

                        <div class="row form-group">

							<div class="col-md-6">
                                <label for="check-in">Check-in Time</label>
                                <select id="check_in" name="check_in" class="form-control">
                                    <option value="" disabled selected>Check-in Time</option>
                                    <option style="color: black" value="09:00 AM">09:00 AM</option>
                                    <option style="color: black" value="10:00 AM">10:00 AM</option>
                                    <option style="color: black" value="11:00 AM">11:00 AM</option>
                                    <option style="color: black" value="12:00 PM">12:00 PM</option>
                                    <option style="color: black" value="01:00 PM">01:00 PM</option>
                                    <option style="color: black" value="02:00 PM">02:00 PM</option>
                                    <option style="color: black" value="03:00 PM">03:00 PM</option>
                                    <option style="color: black" value="04:00 PM">04:00 PM</option>
                                    <option style="color: black" value="05:00 PM">05:00 PM</option>
                                    <option style="color: black" value="06:00 PM">06:00 PM</option>
                                    <option style="color: black" value="07:00 PM">07:00 PM</option>
                                </select>
							</div>

                            <div class="col-md-6">
                                <label for="check-out">Check-out Time</label>
                                <select id="check_out" name="check_out" class="form-control">
                                    <option value="" disabled selected>Check-out Time</option>
                                    <option style="color: black" value="10:00 AM">10:00 AM</option>
                                    <option style="color: black" value="11:00 AM">11:00 AM</option>
                                    <option style="color: black" value="12:00 PM">12:00 PM</option>
                                    <option style="color: black" value="01:00 PM">01:00 PM</option>
                                    <option style="color: black" value="02:00 PM">02:00 PM</option>
                                    <option style="color: black" value="03:00 PM">03:00 PM</option>
                                    <option style="color: black" value="04:00 PM">04:00 PM</option>
                                    <option style="color: black" value="05:00 PM">05:00 PM</option>
                                    <option style="color: black" value="06:00 PM">06:00 PM</option>
                                    <option style="color: black" value="07:00 PM">07:00 PM</option>
                                    <option style="color: black" value="08:00 PM">08:00 PM</option>
                                </select>
							</div>

						</div>


						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Book Table">
							</div>
						</div>

					</form>
				</div>

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

$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    var hours = dtToday.getHours();
    var minutes = dtToday.getMinutes();

    if(month < 10)
        month = '0' + month.toString();

    if(day < 10)
        day = '0' + day.toString();

    if(hours < 10)
        hours = '0' + hours.toString();

    if(minutes < 10)
        minutes = '0' + minutes.toString();

    var maxDate = year + '-' + month + '-' + day;
    var maxTime = hours + ':' + minutes;

    $('#date').attr('min', maxDate);
    $('#check-in').attr('min', maxTime);
});

	</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7
pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

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
