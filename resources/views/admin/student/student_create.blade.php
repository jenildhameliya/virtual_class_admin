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
              <li class="breadcrumb-item active"><a href="{{ route('studentdetail') }}">Student Detail</a></li>
              <li class="breadcrumb-item active">Create Student</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
      <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Student</h1>
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
                    <label>Admission No. <span style="color: red">*</span></label>
                    <input type="text" name="admissionno" class="form-control" placeholder="Enter Admission No.">
                  </div> 

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
                    <label>Caste <span style="color: red">*</span></label>
                    <input type="text" name="caste" class="form-control" placeholder="Enter Caste">
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
                    <label>Mobile No. <span style="color: red">*</span></label>
                    <input type="text" name="mnumber" class="form-control" placeholder="Enter Mobile No">
                  </div>

                  <div class="form-group">
                    <label>Password <span style="color: red">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                  </div>

                  <div class="form-group">
                    <label>Admission Date <span style="color: red">*</span></label>
                    <input type="date" name="adtae" class="form-control" placeholder="Select Admission Date">
                  </div>

                  <div class="form-group">
                    <label>Father Name <span style="color: red">*</span></label>
                    <input type="text" name="fathername" class="form-control" placeholder="Enter Father Name">
                  </div>

                  <div class="form-group">
                    <label>Father Mobile No. <span style="color: red">*</span></label>
                    <input type="text" name="fathermnumber" class="form-control" placeholder="Enter Father Mobile No.">
                  </div>

                  <div class="form-group">
                    <label>Mother Occupation <span style="color: red">*</span></label>
                    <input type="text" name="motheroccupation" class="form-control" placeholder="Enter Mother Occupation">
                  </div>
                </div>
            </div>

            <div class="card-body">
                  <div class="form-group">
                    <label>Class Id <span style="color: red">*</span></label>
                    <select name="cid" id="cid" class="form-control">
                      <option value="0">Select Class Id</option>
                    </select>
                    <!-- <input type="text" name="cid" class="form-control" placeholder="Select Class Id"> -->
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
                    <label>Category <span style="color: red">*</span></label>
                    <select name="category" id="category" class="form-control">
                      <option value="0">Select Category</option>
                    </select>
                    <!-- <input type="text" name="category" class="form-control" placeholder="Select Category"> -->
                  </div>

                  <div class="form-group">
                    <label>Address <span style="color: red">*</span></label>
                    <textarea name="address" id="address" cols="30" rows="1" class="form-control" placeholder="Enter Address"></textarea>
                    <!-- <input type="text" name="address" class="form-control" placeholder="Enter Address"> -->
                  </div>

                  <div class="form-group">
                    <label>State <span style="color: red">*</span></label>
                    <select name="state" id="state" class="form-control">
                      <option value="0">Select State</option>
                    </select>
                    <!-- <input type="text" name="state" class="form-control" placeholder="Select State"> -->
                  </div>

                  <div class="form-group">
                    <label>Religion <span style="color: red">*</span></label>
                    <input type="text" name="religion" class="form-control" placeholder="Enter Religion">
                  </div>

                  <div class="form-group">
                    <label>Email Id <span style="color: red">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label>Confirm Password <span style="color: red">*</span></label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password">
                  </div>

                  <div class="form-group">
                    <label>Student Photo <span style="color: red">*</span></label>
                    <input type="file" name="sphoto" class="form-control" placeholder="Select Student Photo">
                  </div>

                  <div class="form-group">
                    <label>Father Occupation <span style="color: red">*</span></label>
                    <input type="text" name="fatheroccupation" class="form-control" placeholder="Enter Father Occupation">
                  </div>

                  <div class="form-group">
                    <label>Mother Name <span style="color: red">*</span></label>
                    <input type="text" name="mothername" class="form-control" placeholder="Enter Mother Name">
                  </div>

                  <div class="form-group">
                    <label>Mother Mobile No. <span style="color: red">*</span></label>
                    <input type="text" name="mothermnumber" class="form-control" placeholder="Enter Mother Mobile No.">
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('studentdetail') }}" class="btn btn-danger">Cancel</a>
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
  
  <!-- <script>
$(document).ready(function() {
  $('#adminForm').validate({
    rules: {
      name: {
        required: true,
      },
      schoolname: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      terms: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
      },
      schoolname: {
        required: "Please enter school name",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
  });
});
</script> -->
  @include('layouts.footer')