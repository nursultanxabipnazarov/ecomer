<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('admin.navbar')
        @include('admin.sidebar')
      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            @if (session()->has('del'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('del') }}
                <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div>
        @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Advanced Table</h4>
              <div class="card-header-form">
                <form action="{{route('searchProduct') }}" method="GET" >
                    @csrf
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th class="text-center">
                      <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                          class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                      </div>
                    </th>
                    <th>Category</th>
                    <th>Porduct name</th>
                    <th>Img</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>Discount Price</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>

                  @foreach ($products as $product)

                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                          id="checkbox-1">
                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>  {{$product->category_id}} </td>
                    <td>  {{$product->name}} </td>

                    <td>
                      <img alt="image" src="storage/product-img/{{$product->img}}" class="" width="100"
                        data-toggle="tooltip" title="Wildan Ahdian">
                    </td>
                    <td> {{$product->price}} </td>
                    <td>
                      {{$product->quantity}}
                    </td>
                    <td> {{$product->discount_price}} </td>
                    <td>{!!Str::words($product->desc,2,'...')!!} <a href="">Learn More</a> </td>
                    <td > <a href="{{route('updateProduct',$product->id)}}" class="btn btn btn-primary" >Edit</a> </td>
                    <td > <a href="{{route('deleteProduct',$product->id)}}" class="btn btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')" >Delete</a> </td>
                  </tr>

                  @endforeach


                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    </div>
    @include('admin.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  @include('admin.js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
