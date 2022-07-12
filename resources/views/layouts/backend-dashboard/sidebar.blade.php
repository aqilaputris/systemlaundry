<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="{{url('assets/AdminLTE/dist/img/logolaundry.jpg')}}"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">IU LAUNDRY</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="{{url('backend/dashboard')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              <li class="nav-item">
                <a href="{{url('backend/admin/index')}}" class="nav-link">
                <i class="fa fa-user"></i>
                  <p>
                    Admin
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('backend/package/index')}}" class="nav-link">
                <i class="fa fa-box"></i>
                  <p>
                    Package
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('backend/listorder/index')}}" class="nav-link">
                <i class="fa fa-list"></i>
                  <p>
                    List Order
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('listtoday')}}" class="nav-link">
                <i class="fa fa-file-excel"></i>
                  <p>
                    Laporan
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{url('frontend')}}" class="nav-link">
                <i class="fa fa-angle-left"></i>
                  <p>
                    Halaman Depan
                  </p>
                </a>
                </ul>
              </li>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
</aside>