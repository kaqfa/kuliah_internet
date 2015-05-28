<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>List Mahasiswa</title>
    <?php include "./admin-template/header_script.php"; ?>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include "./admin-template/header.php"; ?>

      <!-- Left side column. contains the logo and sidebar -->
      <?php include "./menu_pinggir.php"; ?>

      <!-- Content Wrapper. Contains page content -->
      <?php include "./table_mhs.php"; ?>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015
          <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <?php include "./admin-template/control_side.php"; ?>
    </div><!-- ./wrapper -->


    <?php include "./admin-template/footer_script.php"; ?>

  </body>
</html>
