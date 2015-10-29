<?php include "library/data_table.php";?>
<h1 class="page-header">
  Dashboard
  <p class="lead">(<a href="http://www.bootply.com/128936">with off-canvas sidebar</a>)</p>
</h1>

<div class="row placeholders">
  <?php for ($i=0; $i < 4; $i++) : ?>
  <div class="col-xs-6 col-sm-3 placeholder text-center">
    <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
  <?php endfor; ?>
</div>

<hr>

<h2 class="sub-header">Section title</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>        
      </tr>
    </thead>
    <tbody>
    <?php $i = 0; foreach($tableData2 as $data) : ?>
      <tr>
        <td><?php echo ++$i; ?></td>
        <td class="big_blue" style="font-weight:bold; color:blue;"><?php echo $data["nama"]; ?></td>
        <td><?php echo $data["alamat"]; ?></td>
        <td><?php echo $data["telp"]; ?></td>
      </tr>      
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<a href="http://www.bootply.com/128936">Get the Source Code</a>