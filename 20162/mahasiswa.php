<?php
class Mahasiswa extends Model {

  public $status = array('a'=>'Aktif', 'l'=>'Lulus', 'm'=>'Mangkir');

  function getAllMhs(){
    $q = 'select * from mahasiswa where status = "a"';
    $stmt = $this->db->prepare($q);
    $stmt->execute();

    return $stmt->fetchAll();
  }

  function inputMhs($data){
    $q = 'insert into mahasiswa values (?, ?, ?, ?, ?)';
    $prep = $this->db->prepare($q);
    $prep->execute(array($data['nim'], $data['nama'],
                   $data['email'], $data['ipk'], $data['status']));
  }

  function getStatus($status){
    return $this->status[$status];
  }
}

$mhs = new Mahasiswa();
