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
    <style>
        @media (min-width: 1025px) {
    .h-custom {
      height: 100vh !important;
}
}
    </style>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		@include('home.header')
        
		
            <section class="h-50 h-custom" style="background-color: #eee;">
            <div class="container  py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-200">
                <div class="col">
                  <div class="card">
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                @endif
                    <div class="card-body p-4">
          
                      <div class="row">
                     
                        <div class="col-lg-7">
                          <h5 class="mb-3"><a href="#!" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                          <hr>
          
                          <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                              <p class="mb-1">Shopping cart</p>
                             
                              <p class="mb-0">You have 4 items in your cart</p>
                            </div>
                            <div>
                              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                                  class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                            </div>
                          </div>
                     
                          <?php $allTotalPrice = 0  ?>
                          <div class="card mb-3">
                            @foreach ($carts as  $cart)
                                
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="storage/product-img/{{$cart->img}}"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5> </h5>
                                    <p class="small mb-0">{{$cart->product_name}} </p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 200px;">
                                    <h5 class="fw-normal mb-0">Count product :{{$cart->quantity}} </h5>
                                  </div>
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">Total Price:   ${{$cart->total_price}} </h5>
                                  </div>
                                 <a href="{{route('removeCart',$cart->id)}}" onclick="return confirm('Rastanda cartdan oshiriwdi qaleysibe?')" class="btn btn-danger ">Delete </a>
                                 
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>

                            <?php $allTotalPrice = $allTotalPrice + $cart->total_price ?>
                            @endforeach


                          </div>
          
                          {{-- <div class="card mb-3">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5>Samsung galaxy Note 10 </h5>
                                    <p class="small mb-0">256GB, Navy Blue</p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 50px;">
                                    <h5 class="fw-normal mb-0">2</h5>
                                  </div>
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">$900</h5>
                                  </div>
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
          
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5>Canon EOS M50</h5>
                                    <p class="small mb-0">Onyx Black</p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 50px;">
                                    <h5 class="fw-normal mb-0">1</h5>
                                  </div>
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">$1199</h5>
                                  </div>
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
          
                          <div class="card mb-3 mb-lg-0">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5>MacBook Pro</h5>
                                    <p class="small mb-0">1TB, Graphite</p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 50px;">
                                    <h5 class="fw-normal mb-0">1</h5>
                                  </div>
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">$1799</h5>
                                  </div>
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
           --}}
                        </div>
                        <div class="col-lg-5">
                         
                            
          
                          <div class="card bg-primary text-white rounded-3">
                            <div class="card-body">
                            
          
                              <p class="small mb-2">Перейти к оформлению</p>
                              <a href="#!" type="submit" class="text-white"><i
                                  class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                              <a href="#!" type="submit" class="text-white"><i
                                  class="fab fa-cc-visa fa-2x me-2"></i></a>
                              <a href="#!" type="submit" class="text-white"><i
                                  class="fab fa-cc-amex fa-2x me-2"></i></a>
                              <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
          
                              <form class="mt-4">
                                
                             
                            
          
                              </form>
          
                              <hr class="my-4">
          
                              <div class="d-flex justify-content-between">
                                {{-- <p class="mb-2">Subtotal</p>
                                <p class="mb-2">$4798.00</p> --}}
                              </div>
          
                              <div class="d-flex justify-content-between">
                                {{-- <p class="mb-2">Shipping</p>
                                <p class="mb-2">$20.00</p> --}}
                              </div>
          
                              <div class="d-flex justify-content-between mb-4">
                                <p class="mb-2">Итого: </p>
                                <p class="mb-2">${{$allTotalPrice}}</p>
                              </div>
          
                              <button type="button" class="btn btn-success btn-block btn-lg">
                                <a href="{{route('addCashOrder')}}" class="d-flex justify-content-between" >
                                    Cash payment
                                    <div class="d-flex justify-content-between">
                                        <span>${{$allTotalPrice}}</span>
                                      </div>
                                </a>
                                
                              </button>
                              <button type="button" class="btn btn-success btn-block btn-lg">
                                <a href="" class="d-flex justify-content-between" >
                                    Card payment
                                    <div class="d-flex justify-content-between">
                                        <span>${{$allTotalPrice}}</span>
                                      </div>
                                </a>
                                
                              </button>
          
                            </div>
                          </div>
          
                        </div>
          
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
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

