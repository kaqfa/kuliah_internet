<?php
include '../student.php';

$students = $student->getAllStudents();
?>
<h1 class="page-header">
    List of Student
</h1>

<table class="table table-striped">
  <tr>
      <th>NIM</th>
      <th>Full Name</th>
      <th>Address</th>
      <th>GPA</th>
      <th>Status</th>
      <th>Action</th>
  </tr>
  <?php
    foreach($students as $data){
    ?>
  <tr>
      <td><?php echo $data['nim'] ?></td>
      <td><?php echo $data['fullname'] ?></td>
      <td><?php echo $data['address'] ?></td>
      <td><?php echo $data['gpa'] ?></td>
      <td><?php echo $student->showStatus($data['status']) ?></td>
      <td>
          <a href="index.php?page=student_edit&nim=<?php echo $data['nim'] ?>"
                  class="btn btn-warning btn-xs">Edit</a>
          <a href="student_action.php?action=delete&nim=<?php echo $data['nim'] ?>"
                  class="btn btn-danger btn-xs">Delete</a>
      </td>
  </tr>
  <?php } ?>
</table>
