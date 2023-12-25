<!DOCTYPE HTML>
<html>
	<head>
        <base href="/public">
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
		<div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image" src="storage/product-img/{{$product->img}}" width="360" /> </div>
                                    <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                    </div>
                                    <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"></span>
                                        <h5 class="text-uppercase">Name: {{$product->name}}</h5>
                                        </div>
                                    </div>
                                    <p class="about">Description: {{$product->desc}}.</p>
                                    <p class="about">Price: {{$product->price}}.</p>
                                    <div class="sizes mt-5">
                                        <h2 class="text-uppercase">QUANTITY: {{$product->quantity}} </h2>  </label>
                                    </div>

									<form class="form-control"  action="{{route('addToCart',$product->id)}}" method="post">
										@csrf
										<input type="number" name="count" value="1" min="1" id="">
										<div class="cart mt-4 align-items-center"> <button type="submit" class="form-input btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>

                                        <style>
                                            .form-input {
                                                color: #333
                                            }
                                        </style>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

