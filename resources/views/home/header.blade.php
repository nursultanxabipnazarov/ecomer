<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="{{route('index')}}">Footwear</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                <form action="#" class="search-wrap">
                   <div class="form-group">
                      <input type="search" class="form-control search" placeholder="Search">
                      <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                </div>
                </form>
             </div>
         </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li class="has-dropdown">
                            <a href="men.html">Men</a>
                            <ul class="dropdown">
                                <li><a href="product-detail.html">Product Detail</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-complete.html">Order Complete</a></li>
                                <li><a href="add-to-wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="women.html">Women</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="cart"><a href="{{route('showCart')}}"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                        @if (Route::has('login'))
                            @auth


                        <li class="cart" >
                            {{-- <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> --}}
                        <x-app-layout>
                        </x-app-layout>


                        </li>
                        @else
                        <li class="cart"><a href="{{route('login')}}" class="btn btn-success " > LOGIN</a></li>


                        <li class="cart"><a href="{{route('register')}}" class="btn btn-success " > REGISTR</a></li>
                        @endauth
                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sale">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center">
                    <div class="row">
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
