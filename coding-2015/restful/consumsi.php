<?php
$curlHandle = curl_init('http://localhost/internet/coding-2015/restful/produce.php');
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curlHandle);
$decoded = json_decode($output,TRUE);

var_dump($decoded);
?>
<table width='500' border="1">
    <tr>
        <th>Nama Matkul</th>
        <th>SKS</th>
        <th>Semester</th>
    </tr>
    <?php foreach($decoded as $data){ ?>
    <tr>
        <td><?php echo $data['nama_matkul']; ?></td>
        <td><?php echo $data['sks']; ?></td>
        <td><?php echo $data['semester']; ?></td>
    </tr>
    <?php } ?>
</table>
