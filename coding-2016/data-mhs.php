<?php
include "koneksi_db.php";
include "mahasiswa.php";
 ?>

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
              $res = $mhs->getAllMhs();
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
