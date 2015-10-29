<?php require_once "library/fungsi.php"; ?>
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
<?php printCopyRight(); ?>
</div>