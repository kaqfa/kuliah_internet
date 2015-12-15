<?php
include "../matakuliah.php";

if ($_POST['action'] == 'input'){
    $matkul->insertMatkul($_POST['nama_matkul'], $_POST['sks'], $_POST['semester']);
    echo "Mata kuliah berhasil diinputkan";
} elseif($_POST['action'] == 'edit'){
    $matkul->updateMatkul($_POST['id'], $_POST['nama_matkul'],
                          $_POST['sks'], $_POST['semester']);
} elseif ($_GET['action'] == 'delete'){
    $matkul->delMatkul($_GET['id']);
}

// redirect
 header('location:index.php?page=list_matkul');
