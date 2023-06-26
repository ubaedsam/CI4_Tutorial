<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama_user') ?></a>
          <p class="text-white">
          <?php if (session()->get('level') == 1) {
            echo 'Admin';
          }else{
            echo 'User';
          }
          ?>
          </p>
        </div>
      </div>

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
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('home/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('product') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('mahasiswa') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <?php
              if(session()->get('level') == 1){ ?>
                <li class="nav-item">
                <a href="<?= base_url('upload/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('siswa/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('uploads/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Multiple Uploads</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('berita') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('chart/grafik') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Chart</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('modal/index') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Box Modal CRUD</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?= base_url('login/logout') ?>" class="nav-link">
                  <i class="fas fa-sign nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url('home/menu') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu 1
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('home/menu2') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu 2
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
        <!-- v_home -->

        