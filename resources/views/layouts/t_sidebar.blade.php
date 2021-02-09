<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/virtualclass.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Virtual Class</span>
      <div class="pull-right">
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('image/profile.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Teacher</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('teacher_index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('stu_detail') }}" class="nav-link">
            <i class="fa fa-users nav-icon"></i>
              <p>
                Student Info
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('stu_attendance') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Student Attendence
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('stu_meeting') }}" class="nav-link">
            <i class="fa fa-tv nav-icon"></i>
              <p>
                Agora Meeting
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
            <i class="fa fa-sign-out nav-icon" aria-hidden="true"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>