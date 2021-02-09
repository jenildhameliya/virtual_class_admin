@include('layouts.header')
  
@include('layouts.t_sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('teacher_index') }}"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">Student Detail</li>
            </ol>
            </div>
          </div><!-- /.col -->

        <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student Detail</h1>
          </div><!-- /.col -->
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div><hr style="border-bottom: 3px solid black;"></div>
      </div><!-- /.container-fluid -->
    </div>
      </div>
      <!-- student show table start -->
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
                      <th>Class</th>
                      <th>City</th>
                      <th>Email</th>
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
                      <td>Class</td>
                      <td>City</td>
                      <td>Email</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
    <!-- student show table end -->
  </div>
  @include('layouts.footer')