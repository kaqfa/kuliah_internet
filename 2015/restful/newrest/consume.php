<?php
$curlHandle = curl_init('http://localhost/internet/coding-2015/restful/newrest/produce.php');
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curlHandle);
$decoded = json_decode($output,TRUE); // decode the json data into PHP arrays

//print_r($decoded);

?>
<table width="500" border="1">
    <tr>
        <th>Nim</th>
        <th>Name</th>
        <th>GPA</th>
        <th>Adress</th>
        <th>Status</th>
    </tr>
    <?php foreach($decoded as $data) {?>
    <tr>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['fullname']; ?></td>
        <td><?php echo $data['gpa']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td><?php echo $data['status']; ?></td>
    </tr>
    <?php } ?>
</table>
