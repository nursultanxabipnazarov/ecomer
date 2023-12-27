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
                <form action="" method="GET" >
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
                    <th>Porduct name</th>
                    <th>Total Price</th>
                    <th>Img</th>
                    <th>quantity</th>
                    <th>Client name</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>

                    <th>payment Status</th>
                    <th>DELIVERY_STATUS</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>

                  @foreach ($orders as $order)

                  <tr>
                    <td class="p-0 text-center">
                      <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                          id="checkbox-1">
                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                      </div>
                    </td>
                    <td>  {{$order->product_name}} </td>
                    <td>  {{$order->total_price}} </td>

                    <td>
                      <img alt="image" src="storage/product-img/{{$order->img}}" class="w-100" 
                        data-toggle="tooltip" title="Wildan Ahdian">
                    </td>
                    <td> {{$order->quantity}} </td>
                    <td>
                      {{$order->user_name}}
                    </td>
                    <td> {{$order->phone}} </td>
                    <td> {{$order->email}} </td>
                    <td> {{$order->address}} </td>
                    <td > <a href="" class="btn btn-success" >{{$order->payment_status}}</a> </td>
                    <td > <a href="" class="btn btn btn-danger"  >{{$order->delivery_status}}</a> </td>
                    <td > <a href="" class="btn btn btn-primary"  >delivery</a> </td>
                    <td > <a href="" class="btn btn btn-danger"  ></a> </td>
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
