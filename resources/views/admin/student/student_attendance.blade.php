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
          <!-- <div class="col-12"> -->
          <div class="col-md-6">
              <!-- form start -->
              
              <form id="adminForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Class <span style="color: red">*</span></label>
                    <select name="class" id="class" class="form-control">
                      <option value="0">Select Class</option>
                    </select>
                    <!-- <input type="text" name="admissionno" class="form-control" placeholder="Enter Admission No."> -->
                  </div>
                </div>
            </div>

            <div class="card-body">
            <div class="form-group">
                    <label>Date <span style="color: red">*</span></label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                      </div>
                      <input type="text" id="datepicker1" name="dob" class="form-control" placeholder="Select Date">
                    </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
    <!-- student show table end -->
  </div>
  @include('layouts.footer')