<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard with Off-canvas Sidebar</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<script type="text/javascript" src="action.js"></script>
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
        
         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           
            <ul class="nav nav-sidebar">
              <li class="active"><a href="#">Overview</a></li>
              <li><a href="#">Reports</a></li>
              <li><a href="#">Analytics</a></li>
              <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="">Nav item</a></li>
              <li><a href="">Nav item again</a></li>
              <li><a href="">One more nav</a></li>
              <li><a href="">Another nav item</a></li>
              <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
              <li><a href="">Nav item again</a></li>
              <li><a href="">One more nav</a></li>
              <li><a href="">Another nav item</a></li>
            </ul>
          
        </div><!--/span-->
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
		  <h1 class="page-header">
            Dashboard
            <p class="lead">(<a href="http://www.bootply.com/128936">with off-canvas sidebar</a>)</p>
          </h1>

          <div class="row placeholders">       	

            <div class="col-md-5 col-xs-12 form-group has-feedback">
                <input class="form-control has-feedback-left" id="input1" placeholder="Input 1" type="text">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-2 col-xs-12 form-group has-feedback">
                <select class="form-control" id="operator">
                	<option value="+"> + </option>
                	<option value="-"> - </option>
                	<option value="x"> x </option>
                	<option value="/"> / </option>
                </select>
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-5 col-xs-12 form-group has-feedback">
                <input class="form-control" id="input2" placeholder="Input 2" type="text">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button type="submit" class="btn btn-success" onclick="jqHitung()">Submit</button>
                </div>
            </div>            

            <div class="col-md-12 col-xs-12 form-group has-feedback">
                <input class="form-control" id="hasil" placeholder="Hasil" readonly="readonly" type="text">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

        
          </div>
          	
          <hr>

          <h2 class="sub-header">Section title</h2>
          <div class="col-md-6">
          	<div class="form-group has-feedback">
                <textarea id="input_tags" class="form-control"></textarea>
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="form-group">                                
                <button type="submit" class="btn btn-success" onclick="extractTags()">Submit</button>                
            </div>  
          </div>

          <div class="col-md-6">
          	<table class="table table-striped" id="table_tags">
          		<thead>
          			<tr>
          				<th>Tags</th>
          			</tr>
          		</thead>
          		<tbody>
          			<tr>
          				<td>Tag Pertama</td>
          			</tr>
          		</tbody>
          	</table>
          </div>

          <div class="col-md-12">
          	<table class="table table-striped" id="table_barang">
          		<thead>
          			<tr>
          				<th>Nama Barang</th>
          				<th>Harga</th>
          			</tr>
          		</thead>
          		<tbody>
          			<tr>
          				<td>Komputer</td>
          				<td class="harga">8000000</td>
          			</tr>
          			<tr>
          				<td>Laptop</td>
          				<td class="harga">12000000</td>
          			</tr>
          			<tr>
          				<td>Printer</td>
          				<td class="harga">2000000</td>
          			</tr>
          			<tr>
          				<td>Scanner</td>
          				<td class="harga">1200000</td>
          			</tr>
          			<tr>
          				<td><button type="submit" class="btn btn-success" onclick="jqTotal()">Total</button></td>
          				<td id="total">0</td>
          			</tr>
          		</tbody>
          	</table>
          </div>


          <a href="http://www.bootply.com/128936">Get the Source Code</a>
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2014 Company</p>
</footer>
        
	<!-- script references -->		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>