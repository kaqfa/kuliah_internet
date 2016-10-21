<?php
include "../matakuliah.php";

$res = $matkul->getAllMatkul();
?>
<h1 class="page-header">
List Mata Kuliah
</h1>
 <table class="table table-striped">
  <tr>
      <th>Nama Mata Kuliah</th>
      <th>SKS</th>
      <th>Semester</th>
      <th>Status</th>
      <th>Aksi</th>
  </tr>
  <?php
     foreach($res as $data){
     ?>
  <tr>
      <td><?php echo $data['nama_matkul'] ?></td>
      <td><?php echo $data['sks'] ?></td>
      <td><?php echo $data['semester'] ?></td>
      <td><?php echo $matkul->getStatus($data['status']); ?></td>
      <td>
          <a href="index.php?page=edit_matkul&id=<?php echo $data['id'] ?>"
                  class="btn btn-warning btn-xs">Edit</a>
          <a href="action_matkul.php?action=delete&id=<?php echo $data['id'] ?>"
                  class="btn btn-danger btn-xs">Hapus</a>
      </td>
  </tr>
  <?php } ?>
</table>
