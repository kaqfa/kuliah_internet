<?php include 'header.php'; ?>

<div class="container">
  <?php require_once 'widgets.php'; ?>
  <?php require_once 'widgets.php'; ?>
  <?php require_once 'widgets.php'; ?>
  <?php require_once 'widgets.php'; ?>

  <div class="col-md-9" id="content-section">
    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-warning">
          <div class="panel-heading">Form Input Mahasiswa</div>
          <div class="panel-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">
                  NIM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="NIM">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">
                    Nama Lengkap</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">                          
                      </div>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">
                      Password</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                          <input type="password" class="form-control" id="exampleInputAmount" placeholder="Password">                          
                        </div>
                      </div>
                    </div>                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">
                        Alamat</label>
                        <div class="col-sm-10">
                          <textarea name="alamat" class="form-control"></textarea>
                        </div>
                      </div>                    
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
<?php include 'footer.php';?>