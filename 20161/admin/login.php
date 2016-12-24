<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Login Page</title>
    <link href="../bootstrap_demo/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{ padding-top: 80px; }
      .widget {background-color: #444; color: white; 
              text-align: center; font-weight: bold;}
      .widget p{font-size: 17px;}
    </style>       
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">          
          <a class="navbar-brand" href="login.php">Proyek Aplikasi Bootstrap Pertama</a>
        </div>        
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-7" id="menu-section">
          &nbsp;
        </div>
        <div class="col-md-5" id="content-section">
          <div class="row">
            <div class="col-md-12">
            	<?php
            		if(isset($_SESSION['message']))
            			echo '<div class="alert alert-warning" role="alert">'.$_SESSION['message'].'</div>';
            	?>
              <div class="panel panel-primary">
                <div class="panel-heading">Login Form</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="process.php" method="post">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                      </div>
                    </div>                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                          <input type="password" name="password" class="form-control" id="exampleInputAmount" placeholder="Password">
                        </div>
                      </div>
                    </div>                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container -->

    <script src="../bootstrap_demo/js/jquery.js"></script>
    <script src="../bootstrap_demo/js/bootstrap.min.js"></script>
  </body>
</html>
<?php session_destroy(); ?>