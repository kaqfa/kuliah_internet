<?php
include "../matakuliah.php";
if($_GET['page'] == 'edit_matkul'){
    $data = $matkul->getMatkul($_GET['id']);
} else {
    $data = array('nama_matkul'=>'', 'sks'=>'', 'semester'=>'');
}
?>
<h1 class="page-header">
Form Mata Kuliah
</h1>
 <form method="post" action="action_matkul.php">

  <div class="form-group">
    <label for="">Nama Mata Kuliah</label>
    <input type="text" name="nama_matkul" value="<?php echo $data['nama_matkul'] ?>" class="form-control" placeholder="Mata Kuliah">
  </div>
  <div class="form-group">
    <label for="">Jumlah SKS</label>
    <input type="text" name="sks" value="<?php echo $data['sks'] ?>" class="form-control" placeholder="SKS">
  </div>
  <div class="form-group">
    <label for="">Semester</label>
    <input type="text" name="semester"
    value="<?php echo $data['semester'] ?>" class="form-control" placeholder="Semester">
  </div>
  <?php
     if ($_GET['page'] == 'input_matkul')
        echo '<input type="hidden" name="action" value="input">';
    else{
        echo '<input type="hidden" name="action" value="edit">';
        echo '<input type="hidden" name="id" value="'.$data['id'].'">';
        echo '<div class="form-group">
                <label for="">Status Mata Kuliah</label>
                <select name="status" class="form-control">
                    <option value="1">Aktif</option>
                    <option value="2">Non Aktif</option>
                </select>
              </div>';
    }
     ?>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
