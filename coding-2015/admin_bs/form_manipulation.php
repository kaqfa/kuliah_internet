<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard with Off-canvas Sidebar</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/form_manipulation.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
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
            Simple Calculator            
          </h1>

          <div class="row placeholders">            

              <div class="col-md-5 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" 
                      id="input1" placeholder="First Value">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-2 form-group has-feedback">
                  <select id="operator" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value="/">/</option>
                  </select>
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-5 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" 
                    id="input2" placeholder="Second Value">
                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>              
              <div class="ln_solid"></div>
              <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-primary">Cancel</button>
                      <button type="submit" onclick="jqCalculation()" class="btn btn-success">Submit</button>
                  </div>
              </div>
              <div class="ln_solid"></div>
              <div class="col-md-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" 
                    id="result" placeholder="The Result" readonly="readonly">
                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div> 
          
          </div>
          
          <hr>

          <h2 class="sub-header">Tags Extraction</h2>
          <div class="row col-md-6 table-responsive">
            <textarea id="tags_input" class="form-control"></textarea>
            <br /><br />
            <button type="submit" onclick="jqTagsExtractor()" class="btn btn-success">Submit</button>
          </div>
          <div class="col-md-6 table-responsive">
            <table id="tags_table" class="table table-striped">
              <thead>
                <tr>                  
                  <th>Labels</th>                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Label 1</td>                  
                </tr>                
              </tbody>
            </table>
          </div>
          
          <br >

          <h2 class="sub-header">Transactions Calculator</h2>          
          <div class="col-md-12 table-responsive">
            <table id="transactions_table" class="table table-striped">
              <thead>
                <tr>                  
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Prince of Persia</td>
                  <td>Game</td>
                  <td class="price">200000</td>
                </tr>
                <tr>
                  <td>Epson Lx2100</td>
                  <td>Printer</td>
                  <td class="price">2050000</td>
                </tr>
                <tr>
                  <td>Asus ROG</td>
                  <td>Laptop</td>
                  <td class="price">14000000</td>
                </tr>
                <tr>
                  <td>Dell Voltro</td>
                  <td>Laptop</td>
                  <td class="price">7000000</td>
                </tr>
                <tr>                  
                  <td colspan="2">
                    <input type="submit" onclick="jqTotalTransaction()" value="Total" class="form-control btn btn-success" /></td>
                  <td id="result_td"> 0 </td>
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