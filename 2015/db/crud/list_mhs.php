<h1 class="page-header">
    List Mahasiswa
</h1>

<?php
include_once "../mahasiswa.php";

$allMhs = $mhs->getMhsAllStatus();
?>

<table class="table table-striped">
    <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat Mahasiswa</th>
        <th>IPK Mahasiswa</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($allMhs as $data){
    ?>
    <tr>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['ipk']; ?></td>
        <td><?php echo $mhs->showStatus($data['status']); ?></td>
        <td>
            <a href="admin.php?page=edit_mhs&nim=<?php echo $data['nim']; ?>"
                    class="btn btn-warning btn-sm">Edit</a>
            <a href="action_mhs.php?action=delete&nim=<?php echo $data['nim']; ?>"
                    class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
