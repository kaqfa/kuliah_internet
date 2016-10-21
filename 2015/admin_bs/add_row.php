<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="col-sm-5 placeholder">
		<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Input Label</label>
		    <textarea class="form-control" id="label_input"></textarea>				    
		  </div>				  
		  <button class="btn btn-default" onclick="extractLabel()">Submit</button>
		</form>
    </div>

    <div class="">
        <table class="" id="label_table" width="500" border="1">
          <thead>
            <tr>
              <th>No.</th>
              <th>Label</th>	                  
            </tr>
          </thead>
          <tbody>
          	<tr id="row1">
              <td>1.</td>
              <td>First Label</td>
            </tr>
          </tbody>
      	</table>
      </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>	
	
</body>
</html>