 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>IPK</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php
                include "Student.php";
                $stud = new Student();

                $data = $stud->getAllMhs();
                foreach($data as $mhs){
                ?>
                <tr>
                  <td><?php echo $mhs->nim; ?></td>
                  <td><?php echo $mhs->nama; ?></td>
                  <td><?php echo $mhs->alamat; ?></td>
                  <td><?php echo $mhs->ipk; ?> - (<?php echo $mhs->level()?>)</td>
                  <td><?php echo $mhs->getStatus(); ?></td>
                  <td>
                      [<a href="edit_mhs.php?nim=<?php echo $mhs->nim; ?>">Edit</a>]
                      [<a href="delete_mhs.php?nim=<?php echo $mhs->nim; ?>">Delete</a>]
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>IPK</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
