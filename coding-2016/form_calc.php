<?php    
$hasil = 0;
if(isset($_REQUEST['operator'])){
    if($_REQUEST['operator'] == "+"){
        $hasil = $_REQUEST['angka1'] + $_REQUEST['angka2'];        
    } else if($_REQUEST['operator'] == "-"){
        $hasil = $_REQUEST['angka1'] - $_REQUEST['angka2'];        
    }
} else {
    $_REQUEST['angka1'] = $_REQUEST['angka2'] = 0;    
}
?>
   

<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Angka 1</label>
        <input type="text" class="form-control" id="angka1" name="angka1" value="<?php echo $_REQUEST['angka1']; ?>" placeholder="Angka 1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Angka 2</label>
        <input type="text" class="form-control" id="angka2" value="<?php echo $_REQUEST['angka2']; ?>" name="angka2" placeholder="Angka 2">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Operator</label>
        <select id="operator" class="form-control" name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <h3 id="hasil">
        <?php echo $hasil; ?>
    </h3>
</form>