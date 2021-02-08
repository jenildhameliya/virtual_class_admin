@include('layouts.header')
  
@include('layouts.sidebar')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">Staff Detail</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
      
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Staff Detail</h1>
            </div><!-- /.col -->
            
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <a href="{{ route('staff_create') }}" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Staff</a>
              </ol>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
        <div>
          <hr style="border-bottom: 3px solid black;">
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>FName</th>
                        <th>MName</th>
                        <th>LName</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Image</td>
                        <td>FName</td>
                        <td>MName</td>
                        <td>LName</td>
                        <td>Gender</td>
                        <td>City</td>
                        <td>Email</td>
                        <td>
                          <a href="#" class="btn btn-success">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @include('layouts.footer')