  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('/')}}" class="brand-link">
      <img src="{{asset('AdminLTE-3.1.0/dist/img/doctorlogo.png')}}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">TanyaDok</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      @auth
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.1.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      @else 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.1.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Guest</a>
        </div>
      </div>
      @endauth


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @auth
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Notifikasi
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Forum
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Pertanyaan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/question" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Pertanyaan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
                Tanya Jawab Saya
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(auth()->user()->isdokter==0)
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user/question" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pertanyaan Saya</p>
                </a>
              </li>
            </ul>
            @else
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user/answer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jawaban Saya</p>
                </a>
              </li>
            </ul>
            @endif
          </li>
          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ubah Profil
              </p>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-at"></i>
              <p>
                User Auth
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/login" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
            </ul>
          </li>
          @endauth
          <li class="nav-item">
            <a href="/team" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Teams
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/contactus" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contact US
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>