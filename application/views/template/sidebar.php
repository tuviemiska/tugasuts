<body class="hold-transition skin-red layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Futsal Jepara City</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/hero.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Tuvie</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/dist/img/hero.jpg" class="img-circle" alt="User Image">

                <p>
                  Tuvie | Zero
                  <small>Admin</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url("login/logout") ?>" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/hero.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Tuvie Miska</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Hidup</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">TABEL</li>
        <li>
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-edit"></i><span> Pemesanan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('lapangan') ?>">
            <i class="fa fa-soccer-ball-o"></i><span> Lapangan</span>
          </a>
        </li>
        <li>
          <a href="#modal-profil" data-toggle="modal">
            <i class="fa fa-user"></i><span> Profil</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- modal about -->
<div class="modal modal-default fade" id="modal-profil">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title">Profil</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="idadmin">
          <label>NIM</label>
          <input type="text" class="form-control" readonly value="181240000814">
        </div>
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" class="form-control" readonly value="Tuvie Miska Muchammad">
        </div>
        <div class="form-group">
          <label>PRODI/SEMESTER</label>
          <input type="text" class="form-control" readonly value="Teknik Informatika / 4">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal about-->