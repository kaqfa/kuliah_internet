<?php 
include "arrays.php";
?>
<html>
<head>
  <title>Tampilkan Data Mahasiswa</title>
</head>
<body>
  <table border="1" width="500">
    <tr>
      <th rowspan="2">No.</th>
      <th rowspan="2">NIM</th>
      <th rowspan="2">Nama</th>
      <th rowspan="2">Telepon</th>
      <th colspan="4">Nilai</th>
    </tr>
    <tr>
      <th>Tugas</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Total</th>      
      <th>Huruf</th>      
    </tr>
    <?php 
     $counter = 0;
     foreach($listMhs as $mhs) {
      $total=$mhs['tugas']*0.3+$mhs['uts']*0.3+$mhs['uas']*0.4;

      if ($total >= 85 )
      {
        $huruf="A";
      }
      else if ($total >= 70)
      {
        $huruf="B";
      }
      else if ($total >= 60)
      {
        $huruf="C";
      }
      else if ($total >=50)
        $huruf="D";
      else 
        $huruf="E";      
      echo '<tr>
            <td>'.($counter+1).'</td>
            <td>'.$mhs['nim'].'</td>
            <td>'.$mhs['nama'].'</td>
            <td>'.$mhs['telp'].'</td>
            <td>'.$mhs['tugas'].'</td>
            <td>'.$mhs['uts'].'</td>
            <td>'.$mhs['uas'].'</td>
            <td>'.$total.'</td>
            <td>'.$huruf.'</td>
          </tr>'; 
      $counter++;
      }
    ?>
  </table>
</body>
</html>