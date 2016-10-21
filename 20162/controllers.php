<?php
include "mahasiswa.php";

function formMhs(){
  $mhs = new Mahasiswa();

  if(isset($_POST['nim'])){
    $mhs->inputMhs($_POST);
  }
  $res = $mhs->getAllMhs();
  
  include "form_mhs.php";
}
