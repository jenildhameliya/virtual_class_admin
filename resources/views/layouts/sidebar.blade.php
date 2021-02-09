<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('dist/img/virtualclass.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Virtual Class</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
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
            <ul class="nav nav-treeview ">
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
            <a href="{{ route('staff_details') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Staff
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out nav-icon" aria-hidden="true"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 