<?php session_start(); include('koneksi.php'); ?>
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
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Login Anggota</div>
                    <div class="panel-body">
                        <form action="action.php" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" id="username_login" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password_login" placeholder="Password">
                          </div>                          
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="remember"> Ingat saya!
                            </label>
                          </div>
                          <input type="submit" name="login" class="btn btn-default" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrasi Anggota</div>
                    <div class="panel-body">
                        <form action="action.php" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="username" name="username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Sebagai</label>
                            <select class="form-control" name="level" id="level">
                                <option value="i">Instruktur</option>
                                <option value="s">Siswa</option>
                            </select>
                          </div>
                          <input type="submit" class="btn btn-default" name="register" value="Daftar Anggota" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>