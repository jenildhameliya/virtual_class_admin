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
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('studentdetail') }}" class="nav-link">
            <i class="fa fa-users nav-icon"></i>
              <p>
                Student Detail
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('attendance') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Student Attendence
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-graduation-cap nav-icon"></i>
              <p>
                Academic
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('teacher_timetable') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher Time Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('class') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subject_group') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject Group</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('meeting') }}" class="nav-link">
            <i class="fa fa-tv nav-icon"></i>
              <p>
                Agora Meeting
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('doc_download') }}" class="nav-link">
            <i class="fa fa-download nav-icon"></i>
              <p>
                Downloads
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('staff_details') }}" class="nav-link">
            <i class="fa fa-user nav-icon" aria-hidden="true"></i>
              <p>Staff Detail</p>
            </a>
          </li>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('staff_details') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff_attendance') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Attendence</p>
                </a>
              </li>
            </ul> -->
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-cogs nav-icon"></i>
              <p>
                System Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('general') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('notification') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notification Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('email') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('language') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Languages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('custom_fields') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Custom Fields</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('system_fields') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>System Fields</p>
                </a>
              </li>
            </ul>
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