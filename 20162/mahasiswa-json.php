<?php
include "koneksi_db.php";
include "mahasiswa.php";

header("Access-Control-Allow-Origin: *");
header("content-type:application/json");

echo json_encode($mhs->getAllMhs());
