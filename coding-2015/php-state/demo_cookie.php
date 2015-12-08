<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demonstrasi Cookie &amp; Session</title>
</head>
<body>
    <h2>Nama yang tersimpan di Cookie <?php echo $_COOKIE['name']; ?></h2>
    <h2>Nama yang tersimpan di Cookie <?php echo $_SESSION['name']; ?></h2>
</body>
</html>
