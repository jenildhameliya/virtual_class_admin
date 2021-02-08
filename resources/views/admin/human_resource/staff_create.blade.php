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
              <li class="breadcrumb-item active"><a href="{{ route('staff_details') }}">Staff Detail</a></li>
              <li class="breadcrumb-item active">Create Staff</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
      <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Staff</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div><hr style="border-bottom: 3px solid black;"></div>
      </div>
    </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
              <!-- form start -->
              
              <form id="adminForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Role <span style="color: red">*</span></label>
                    <select name="role" id="role" class="form-control">
                      <option value="0">Select Role</option>
                    </select>
                    <!-- <input type="text" name="admissionno" class="form-control" placeholder="Enter Admission No."> -->
                  </div> 

                  <div class="form-group">
                    <label>Middle Name <span style="color: red">*</span></label>
                    <input type="text" name="mname" class="form-control" placeholder="Enter Middle Name">
                  </div>

                  <div class="form-group">
                    <label>Gender <span style="color: red">*</span></label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="0">Select Gender</option>
                    </select>
                    <!-- <input type="text" name="gender" class="form-control" placeholder="Select Gender"> -->
                  </div>

                  <div class="form-group">
                    <label>Address <span style="color: red">*</span></label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                  </div>

                  <div class="form-group">
                    <label>State <span style="color: red">*</span></label>
                    <select name="state" id="state" class="form-control">
                      <option value="0">Select State</option>
                    </select>
                    <!-- <input type="text" name="state" class="form-control" placeholder="Select State"> -->
                  </div>

                  <div class="form-group">
                    <label>Email <span style="color: red">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label>Confirm Password <span style="color: red">*</span></label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password">
                  </div>

                  <div class="form-group">
                    <label>Date Of Joining <span style="color: red">*</span></label>
                    <input type="date" name="doj" class="form-control" placeholder="Select Date Of Joining">
                  </div>

                  <div class="form-group">
                    <label>Photo <span style="color: red">*</span></label>
                    <input type="file" name="t_photo" class="form-control" placeholder="Select Photo">
                  </div>
                </div>
            </div>

            <div class="card-body">
                  <div class="form-group">
                    <label>First Name <span style="color: red">*</span></label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                  </div>

                  <div class="form-group">
                    <label>Last Name <span style="color: red">*</span></label>
                    <input type="date" name="lname" class="form-control" placeholder="Enter Last Name">
                  </div>

                  <div class="form-group">
                    <label>Date Of Birth <span style="color: red">*</span></label>
                    <input type="date" name="dob" class="form-control" placeholder="Select Date Of Birth">
                  </div>

                  <div class="form-group">
                    <label>City <span style="color: red">*</span></label>
                    <select name="city" id="city" class="form-control">
                      <option value="0">Select City</option>
                    </select>
                    <!-- <input type="text" name="city" class="form-control" placeholder="Select City"> -->
                  </div>

                  <div class="form-group">
                    <label>Country <span style="color: red">*</span></label>
                    <select name="country" id="country" class="form-control">
                      <option value="0">Select Country</option>
                    </select>
                    <!-- <input type="text" name="country" class="form-control" placeholder="Select Country"> -->
                  </div>

                  <div class="form-group">
                    <label>Password <span style="color: red">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                  </div>

                  <div class="form-group">
                    <label>Qualification <span style="color: red">*</span></label>
                    <input type="text" name="qualification" class="form-control" placeholder="Enter Qualification">
                  </div>

                  <div class="form-group">
                    <label>Experience <span style="color: red">*</span></label>
                    <input type="number" name="experience" class="form-control" placeholder="Enter Experience">
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('staff_details') }}" class="btn btn-danger">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  @include('layouts.footer')