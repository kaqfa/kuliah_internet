<?php
include '../student.php';

if($_GET['page'] == 'student_edit')
    $data = $student->getStudent($_GET['nim']);
else
    $data = array('nim'=>'', 'fullname'=>'', 'address'=>'', 'gpa'=>'', 'status'=>'');
// print_r($data);
?>

<h1 class="page-header">
    Student Form
</h1>
<form method="post" action="student_action.php">

  <div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control"
            value="<?php echo $data['nim'] ?>" placeholder="Student NIM">
  </div>
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="fullname" class="form-control"
            value="<?php echo $data['fullname'] ?>" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label>Address</label>
    <textarea name="address" class="form-control"><?php echo $data['address'] ?></textarea>
  </div>
  <div class="form-group">
    <label>GPA</label>
    <input type="text" name="gpa" class="form-control"
            value="<?php echo $data['gpa'] ?>" placeholder="GPA">
  </div>
  <div class="form-group">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="1">Active</option>
        <option value="0">Non Active</option>
        <option value="2">Graduated</option>
    </select>
  </div>
  <?php
    if ($_GET['page'] == 'student_input')
        echo  '<input type="hidden" name="action" value="input">';
    else
        echo '<input type="hidden" name="action" value="edit">';
    ?>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
