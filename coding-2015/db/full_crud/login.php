<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard with Off-canvas Sidebar</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../../admin_bs/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../../admin_bs/css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
</nav>

<div class="container-fluid">

      <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-sm-9 col-md-10 main">

          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>

        <form method="post" action="login_action.php">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember" value="1"> Remember Me
            </label>
          </div>
          <button type="submit" class="btn btn-default">Login</button>
        </form>

          </div><!--/row-->
	</div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2014 Company</p>
</footer>

	<!-- script references -->
		<script src="../../admin_bs/js/jquery.js"></script>
		<script src="../../admin_bs/js/bootstrap.min.js"></script>
		<script src="../../admin_bs/js/scripts.js"></script>
	</body>
</html>
