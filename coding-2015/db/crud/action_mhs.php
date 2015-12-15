<?php
/*
    File yang berfungsi untuk menangani aksi-aksi penting untuk mahasisa
*/

include "../mahasiswa.php";

if($_POST['action'] == 'input'){
    $mhs->addMhs($_POST['nim'], $_POST['nama'], $_POST['alamat'], $_POST['ipk']);
    echo "Penambahan Mahasiswa Berhasil...!!!";
} elseif ($_POST['action'] == 'update') {
    echo $mhs->updateMhs($_POST['nim'], $_POST);
} elseif ($_GET['action'] == 'delete'){
    $mhs->delMhs($_GET['nim']);
}

// redirect
header('location:admin.php?page=list_mhs');
