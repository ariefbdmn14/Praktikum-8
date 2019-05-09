<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin/dist')?>/img/user11-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Pustakawan</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('/Perpustakaan/listBuku'); ?>"><i class="fa fa-circle-o"></i>Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listAnggota'); ?>"><i class="fa fa-circle-o"></i>Anggota</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listPeminjaman'); ?>"><i class="fa fa-circle-o"></i>Peminjaman Buku</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
