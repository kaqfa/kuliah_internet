<?php include "arrays.php";

$file = file_get_contents('http://localhost/internet/coding-2016/mahasiswa-json.php');
$json = json_decode($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manipulasi Array</title>
    <script type="text/javascript" src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">

    </script>
</head>
<body>
    <h3><?php echo $idDays[5]; ?></h3>
    <h3><?php echo $idMonths[5]; ?></h3>
    <h3><?php echo $matkul["nama"]; ?></h3>

    <ul>
        <?php foreach($json as $data){ ?>
        <li><?php echo $data->nim.' '.$data->nama; ?></li>
        <?php } ?>
    </ul>
    <pre><?php print_r($json); ?></pre>

</body>
</html>
