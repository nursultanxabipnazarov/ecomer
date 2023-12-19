<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="home/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="home/css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="home/css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="home/css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="home/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="home/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="home/css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		@include('home.header')
		@include('home.slider')
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(home/images/men.jpg);"></a>
							<div class="desc">
								<h2><a href="#">Shop Men's Collection</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(home/images/women.jpg);"></a>
							<div class="desc">
								<h2><a href="#">Shop Women's Collection</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('home.product')

		@include('home.partnyor')

        @include('home.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="home/js/jquery.min.js"></script>
   <!-- popper -->
   <script src="home/js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="home/js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="home/js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="home/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="home/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="home/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="home/js/jquery.magnific-popup.min.js"></script>
	<script src="home/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="home/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="home/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="home/js/main.js"></script>

	</body>
</html>

