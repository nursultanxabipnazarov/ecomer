<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach ($products as $product )

            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="{{route('detalisProduct',$product->id)}}" class="prod-img">
                        <img src="storage/product-img/{{ $product->img }}" class="img-fluid " alt="Img ">
                    </a>
                    <div class="desc">
                        <h2><a href="#">{{$product->name}}</a></h2>
                        @if ($product->discount_price!=NULL)
                        <p class="price text-danger"><strong class="" >Discount price:</strong> $ {{$product->discount_price}}</p>
                        <p style="text-decoration: line-through" class="  ">$ {{$product->price}}</p>
                        @else
                        <span>${{$product->price}}</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

            <div class="container text-center">
           <h3> {{ $products->links() }}  </h3> 

            </div>



           
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>
