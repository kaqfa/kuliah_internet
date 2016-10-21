<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>State Demo</title>
</head>
<body>
    <h1><?php echo $_COOKIE['name']; ?></h1>
    <h1><?php echo $_SESSION['name']; ?></h1>
    <ul>
        <li><?php echo $_SESSION['group'] ?></li>
        <li><?php echo $_SESSION['status'] ?></li>
    </ul>
</body>
</html>
