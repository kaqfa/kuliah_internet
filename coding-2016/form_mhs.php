<div id="tampil"></div>
<div class="panel panel-default">
    <div class="panel-heading">Form Input</div>
    <div class="panel-body">
      <form action="" method="post">
          <div class="form-group">
              <label for="exampleInputEmail1">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="nama"
                name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" id="email"
                name="email" placeholder="Email">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">IPK Mahasiswa</label>
              <input type="text" class="form-control" id="ipk"
                name="ipk" placeholder="IPK">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <select id="status" class="form-control" name="status">
                  <option value="a">Aktif</option>
                  <option value="m">Mangkir</option>
                  <option value="l">Lulus</option>
                  <option value="d">Drop Out</option>
              </select>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Tabel Mahasiswa</div>
    <div class="panel-body">
        <table id="table_hist" class="table table-striped">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>IPK</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach ($res as $data) { ?>
                <tr>
                  <td><?php echo $data['nim']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['ipk']; ?></td>
                  <td><?php echo $mhs->getStatus($data['status']); ?></td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
    </div>
</div>
