<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../demo/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Aplikasi</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Manajemen Mahasiswa</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="list_mhs.php"><i class="fa fa-circle-o"></i>List Mahasiswa</a></li>
          <li><a href="edit_mhs.php"><i class="fa fa-circle-o"></i>Input Mahasiswa</a></li>
          <li><a href="#" onclick="openmodal()"><i class="fa fa-circle-o"></i>Statistik Mahasiswa</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Manajemen Keuangan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Uang Pendaftaran</a></li>
          <li><a href="../../index2.html"><i class="fa fa-circle-o"></i>Keuangan Semester</a></li>
          <li><a href="../../index2.html"><i class="fa fa-circle-o"></i>Beasiswa</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
