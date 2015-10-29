<?php include_once "library/fungsi.php";?>
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
<?php printCopyRight(); ?>