<?php 
session_start(); include('koneksi.php');
include('controllers/admin.php');
include('controllers/instructor.php');
include('controllers/student.php');

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS Sederhana</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">                
                <a class="navbar-brand" href="#">LMS Sederhana</a>
            </div>            
        </div>
    </nav>

    <div id="main-content" style="margin-top: 60px;">
        <div class="row" style="padding: 10px 20px;">
            <div class="col-md-3">
                <?php include "menu.php"; ?>
            </div>
            <div class="col-md-9">                
                <?php
                    dashboard();
                ?>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
} else {
    header('location:login.php');
}