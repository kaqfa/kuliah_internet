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
		<script type="text/javascript" src="jsscript.js"></script>
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
          	<div class="form-inline">
			  <div class="form-group">			    
			    <input type="text" class="form-control" id="inp1" placeholder="Input 1">
			  </div>
			  <div class="form-group">			    
			    <select class="form-control" id="op">
			    	<option value="+"> + </option>
			    	<option value="-"> - </option>
			    	<option value="x"> x </option>
			    	<option value="/"> / </option>
			    </select>
			  </div>
			  <div class="form-group">			    
			    <input type="text" class="form-control" id="inp2" placeholder="Input 2">
			  </div>
			 </div>
			 <hr>
			 <div>
			 	<button type="submit" class="btn btn btn-primary btn-lg btn-block" onclick="jqHitung()">Hitung</button>	
			 	<br><br>
			 	<div class="form-group">			    
				    <input type="text" class="form-control" id="hasil" placeholder="Hasil" readonly="readonly">
				  </div>
			 </div>
			  
          </div>
          
          <hr>

          <h2 class="sub-header">Section title</h2>
          <div class="">
			<div class="row">
			  <div class="col-md-6">
			  <div class="form-group">			    
			    <textarea class="form-control" id="input_tags"></textarea>
			    <button type="submit" class="btn btn btn-primary btn-lg btn-block" 
			    	onclick="jqExtractTags()">Submit</button>
			  </div>
			  </div>
			  <div class="col-md-6 table-responsive">
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
			</div>        
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="">
			<div class="row">
				<table class="table table-striped" id="table_barang">
				  <thead>
				  	<tr>
				  		<th>Barang</th>
				  		<th>Harga</th>
				  	</tr>
				  </thead>
				  <tbody>
				  	<tr>
				  		<td>Laptop</td>
				  		<td class="harga">8000000</td>
				  	</tr>
				  	<tr>
				  		<td>Printer</td>
				  		<td class="harga">1000000</td>
				  	</tr>
				  	<tr>
				  		<td>Monitor</td>
				  		<td class="harga">1200000</td>
				  	</tr>
				  	<tr>
				  		<td>Hardisk</td>
				  		<td class="harga">1100000</td>
				  	</tr>
				  	<tr>
				  		<td><button class="btn btn btn-primary btn-lg btn-block" onclick="jqTotal()">Hitung</button></td>
				  		<td id="total"></td>
				  	</tr>
				  </tbody>
				</table>
			</div>
			</div>

          <a href="http://www.bootply.com/128936">Get the Source Code</a>
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2014 Company</p>
</footer>
        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>