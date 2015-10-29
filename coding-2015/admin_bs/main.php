<?php 
if(!isset($_REQUEST['p'])){
  $_REQUEST['p'] = null;
}
require "header.php"; 
?>
<div class="container-fluid">   
      <?php include "menu.php"; ?>
		  
      <?php 
      if($_REQUEST['p'] == 'dashboard'){
        include "dashboard.php";
      } else if($_REQUEST['p'] == 'form'){
        require_once "form_admin.php";
        require_once "form_admin.php";      
      } else {
        include "dashboard.php";
      }
      
      ?>
          
      </div><!--/row-->
	</div>
  
</div><!--/.container-->

<?php include "footer.php"; ?>