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
          @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show">
              {{ session('message') }}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          </div>
      @endif
        @if (session()->has('del'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('del') }}
            <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">×</button>
        </div>
    @endif

            <div class="section-body">
          

                <div class="row">
                 
                  <div class="col-12 col-md-6 col-lg-8">
                    <div class="card">
                      <div class="card-header">
                        <h4>Add category</h4>
                      </div>
                      <form action="{{route('addProduct')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label>Select Category </label>
                            <select name="category_id" class="form-control form-control-sm">
                                <option value="" selected="" > Category </option>
                                @foreach($category as $category)
                              <option value="{{$category->id}}" >{{$category->name}}</option>
                              @endforeach

                            </select>
                          </div>
                        <div class="form-group">
                          <label>Product name</label>
                          <input type="text"  name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                           <input type="text"  name="desc" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                           <input type="text"  name="price" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Quantity</label>
                           <input type="text"  name="quantity" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Discount Price</label>
                           <input type="text"  name="discount_price" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Img</label>
                            <input type="file"  name="img" class="form-control">
                          </div>
                        <div class="form-group">
                            <input type="submit" class="form-control w-50 btn btn-primary ">
                          </div>

                      </div>
                    </form>

                  </div>

                </div>

              </div>
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple Table</h4>
                  </div>
                    {{-- <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                            @foreach ($Categories as $category)

                            <tr>
                            <td>{{$category->id}}</td>
                            <td> {{$category->name}} </td>
                            <td> {{$category->created_at}} </td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Edit</a></td>

                            <td>
                                <form action=" {{route('destroyCategory',$category->id)}} " method="post" class="" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="btn btn-danger " onclick = "return confirm('Rastan oshirejaqsizba?')" >
                                        Delete
                                    </button>
                                </form>
                            </td>
                            </tr>
                            @endforeach


                        </table>
                        </div>
                    </div> --}}
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
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

