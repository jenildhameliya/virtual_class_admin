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
              <li class="breadcrumb-item active"><a href="{{ route('subject') }}">Subject</a></li>
              <li class="breadcrumb-item active">Create Subject</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
      <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Subject</h1>
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
                  <div class="card-body">
                    <div class="form-group">
                      <label>Subject Name <span style="color: red">*</span></label>
                      <!-- <select name="cid" id="cid" class="form-control">
                        <option value="0">Select Class Id</option>
                      </select> -->
                      <input type="text" name="sname" class="form-control" placeholder="Enter Subject Name">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('subject') }}" class="btn btn-danger">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('layouts.footer')