<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<<<<<<< HEAD
      <span class="brand-text font-weight-light">Company Profile :: Admin</span>
=======
      <span class="brand-text font-weight-light">Company Profil</span>
>>>>>>> dev
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="/admin/dashboard" class="nav-link {{Request::is('admin/dashboard*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            {{--<span class="right badge badge-danger">New</span>--}}
            </p>
        </a>
        </li>

<<<<<<< HEAD
        <li class="nav-item {{Request::is('admin/pesan*') ? 'active' : ''}}">
        <a href="/admin/pesan" class="nav-link  ">
=======
        <li class="nav-item">
        <a href="/admin/pesan" class="nav-link">
>>>>>>> dev
            <i class="nav-icon fas fa-envelope"></i>
            <p>
            Pesan
            {{--<span class="right badge badge-danger">New</span>--}}
            </p>
        </a>
        </li>


<<<<<<< HEAD
          <li class="nav-item {{Request::is('admin/posts*') ? 'menu-is-opening menu-open' : ''}}">
            <a href="#" class="nav-link">
=======
          <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/posts/blog*') ? 'menu-is-opening menu-open' : '' }}">
>>>>>>> dev
              <i class="nav-icon fas fa-file"></i>
              <p>
                Galeri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/posts/blog" class="nav-link {{Request::is('admin/posts/blog*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/posts/kategori" class="nav-link {{Request::is('admin/posts/kategori*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
        <a href="/admin/profil" class="nav-link {{Request::is('admin/profil*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-calendar"></i>
            <p>
            Profil
            {{--<span class="right badge badge-danger">New</span>--}}
            </p>
        </a>
        </li>

        <li class="nav-item">
        <a href="/admin/potensi" class="nav-link {{Request::is('admin/potensi*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-list"></i>
            <p>
<<<<<<< HEAD
            Potensi Dan Produk
=======
            Potensi & Produk
>>>>>>> dev
            {{--<span class="right badge badge-danger">New</span>--}}
            </p>
        </a>
        </li>

        <li class="nav-item">
        <a href="/admin/banner" class="nav-link {{Request::is('admin/banner*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-image"></i>
            <p>
            Banner
            {{--<span class="right badge badge-danger">New</span>--}}
            </p>
        </a>
        </li>

        <li class="nav-item">
        <a href="/admin/user" class="nav-link {{Request::is('admin/user*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-users"></i>
            <p>
            User
            {{--<span class="right badge badge-danger">New</span>--}}
            </p>
        </a>
        </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
