<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">						
			<form class="form-horizontal" method="post" 
					action="basic-form.php?page=table1">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Nama Lengkap</label>
					<div class="controls">
					  <input class="input-xlarge focused" name="fullname" id="focusedInput" type="text">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Gender</label>
					<div class="controls">
					  <select name="gender">
					  	<option value="L">Laki-laki</option>
					  	<option value="P">Perempuan</option>
					  </select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Alamat</label>
					<div class="controls">
					  <input class="input-xlarge focused" name="address" id="focusedInput" type="text">
					</div>
				  </div>
				  <div class="form-actions">
					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
					<button class="btn">Cancel</button>
				  </div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->

</div><!--/row-->
