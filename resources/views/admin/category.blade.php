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
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="card-header">
                        <h4>Add category</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Text</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control w-50 btn btn-primary ">
                          </div>
                        
                      </div>
                 
                  </div>
                 
                </div>
                
              </div>
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>2017-01-09</td>
                          <td>
                            <div class="badge badge-success">Active</div>
                          </td>
                          <td><a href="#" class="btn btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Hasan Basri</td>
                          <td>2017-01-09</td>
                          <td>
                            <div class="badge badge-success">Active</div>
                          </td>
                          <td><a href="#" class="btn btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kusnadi</td>
                          <td>2017-01-11</td>
                          <td>
                            <div class="badge badge-danger">Not Active</div>
                          </td>
                          <td><a href="#" class="btn btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rizal Fakhri</td>
                          <td>2017-01-11</td>
                          <td>
                            <div class="badge badge-success">Active</div>
                          </td>
                          <td><a href="#" class="btn btn-primary">Detail</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
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

