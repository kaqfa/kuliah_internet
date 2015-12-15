<?php
include "../mahasiswa.php";
if($_GET['page'] == 'edit_mhs')
    $data = $mhs->getMhs($_GET['nim']);
else
    $data = array('nim'=>'', 'nama'=>'', 'alamat'=>'', 'ipk'=>'');
?>
<h1 class="page-header">
    Form Input Mahasiswa
</h1>

 <form method="post" action="action_mhs.php">
  <div class="form-group">
    <label for="">Nomor Induk Mahasiswa</label>
    <input type="text" name="nim" value="<?php echo $data['nim']; ?>" class="form-control" placeholder="NIM">
  </div>
  <div class="form-group">
    <label for="">Nama Mahasiswa</label>
    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="">Alamat Mahasiswa</label>
    <textarea name="alamat" class="form-control"><?php echo $data['alamat']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="">IPK Mahasiswa</label>
    <input type="text" name="ipk" class="form-control" value="<?php echo $data['ipk']; ?>" placeholder="IPK">
  </div>
  <?php
     if ($_GET['page'] == 'add_mhs')
        echo '<input type="hidden" name="action" value="input">';
     else {
        echo '<input type="hidden" name="action" value="update">';
        echo '<div class="form-group">
                <label for="">Status Mahasiswa</label>
                <select name="status" class="form-control" id="status">
                    <option value="1">Aktif</option>
                    <option value="0">Non Aktif</option>
                    <option value="0">Alumni</option>
                </select>
            </div>';
     }
  ?>
  <button type="submit" class="btn btn-default">Simpan MHS</button>
</form>
