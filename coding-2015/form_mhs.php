<?php
    include "Student.php";
    $stud = new Student();
    $data = $stud->getMhs($_GET['nim']);
?>
<div style="min-height: 946px;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Mahasiswa
        <small>Edit Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Mahasiswa</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="Student.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nim">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $data->nim; ?>"
                        placeholder="nim" id="nim" name="nim" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nama">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $data->nama; ?>"
                        placeholder="Nama Lengkap" id="nama" name="nama" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="alamat">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $data->alamat; ?>"
                        placeholder="Alamat" id="alamat" name="alamat" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="ipk">IPK</label>
                  <div class="col-sm-10">
                    <input type="ipk" value="<?php echo $data->ipk; ?>" id="ipk" name="ipk" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="status">Status</label>
                  <div class="col-sm-10">
                    <?php $data->printSelectStatus($data->status); ?>
                  </div>
                </div>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default" type="reset">Cancel</button>
                <button class="btn btn-info pull-right" name="edit" type="submit">Edit</button>
              </div><!-- /.box-footer -->
            </form>
          </div><!-- /.box -->
        </div>
        </div>
    </section>
</div>
