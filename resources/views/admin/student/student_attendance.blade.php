@include('layouts.header')
  
@include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">Student Attendance</li>
            </ol>
            </div>
          </div><!-- /.col -->

        <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Attendance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <ol class="breadcrumb float-sm-right">
            </ol>
            </ol>
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
              Attendance  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
    <!-- student show table end -->
  </div>
  @include('layouts.footer')