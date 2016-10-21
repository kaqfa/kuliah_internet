<?php 
if (!isset($_REQUEST['page'])) { // default initialization
  $_REQUEST['page'] = null;
}
require "header.php"; ?>
<div class="container-fluid">
      
      <div class="row row-offcanvas row-offcanvas-left">
        
         <?php include "menu.php"; ?>
        
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
		      <?php 

          if ($_REQUEST['page'] == 'form') {
            include_once "admin_form.php";
            include_once "admin_form.php";
            include_once "admin_form.php";
            include_once "admin_form.php";
            include_once "admin_form.php";
          } else if($_REQUEST['page'] == 'dashboard') {
            include "dashboard.php";
          } else {
            include "dashboard.php";
          }

          ?>
          
      </div><!--/row-->
	</div>
</div><!--/.container-->

<?php include "footer.php"; ?>