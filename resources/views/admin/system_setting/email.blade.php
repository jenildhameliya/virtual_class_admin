@include('layouts.header')
  
@include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active">System Setting</li>
              <li class="breadcrumb-item active">Email Setting</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
      <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Email Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <ol class="breadcrumb float-sm-right">
            <!-- <a href="#" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Staff</a> -->
            </ol>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div><hr style="border-bottom: 3px solid black;"></div>
      </div>
    </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
            
            Email Setting  

        </div>
      </div>
          <!--/.col (right) -->
    </div>
        <!-- /.row -->
  </div><!-- /.container-fluid -->
    </section>
  
  @include('layouts.footer')