<?php
$curlHandle = curl_init('http://localhost/internet/coding-2015/restful/basic.php');
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curlHandle);
$decoded = json_decode($output,TRUE);

//print_r($decoded);
?>
<table width="500" border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>IPK</th>
    </tr>
    <?php foreach($decoded as $data){ ?>
    <tr>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['ipk']; ?></td>
    </tr>
    <?php } ?>
</table>
