<?php

$idDays[0] = 'Minggu';
$idDays[1] = 'Senin';
$idDays[2] = 'Selasa';
$idDays[3] = 'Rabu';
$idDays[4] = 'Kamis';
$idDays[5] = 'Jumat';
$idDays[6] = 'Sabtu';

$idMonths = array( 'Januari', 'Februari', 'Maret', 'April', 'Mei',
										'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
										'November', 'Desember' );

$matkul = array('kode'=>'A11.4506', 'nama'=>'Pemrograman Internet', 
								'sks'=>3, 'jenis'=>'T');

/* 
  multi level array untuk menyimpan data mahasiswa
  meliputi NIM, Nama, Telepon, nilai_uts, nilai_uas, nilai_tugas
*/


$listMhs = array(
          array( 'nim' => "A11.09876",'nama' => "Arif", 'telp' => "088234876", 'tugas' => 80,'uts'=> 90,'uas' => 74),
          array( 'nim' => "A11.08765",'nama' => "Andi",  'telp' =>"0892345873", 'tugas' => 60,'uts'=> 75,'uas' => 60),
          array( 'nim' => "A11.07654",'nama' => "Batavi",  'telp' =>"0811987234", 'tugas' => 70,'uts'=> 95,'uas' => 90),
          array( 'nim' => "A11.06543",'nama' => "Guntur", 'telp' => "085987765", 'tugas' => 90,'uts'=> 75,'uas' => 30),
        );
$listMhs[4] = array( 'nim' => "A11.01234",'nama' => "Saifuddin", 'telp' => "081234567", 'tugas' => 80,'uts'=> 95,'uas' => 70);
$listMhs[5] = array( 'nim' => "A11.02345",'nama' => "Ali", 'telp' => "082345678", 'tugas' => 50,'uts'=> 80,'uas' => 40);
$listMhs[] = array( 'nim' => "A11.03456",'nama' => "Henrik", 'telp' => "083456789", 'tugas' => 70,'uts'=> 95,'uas' => 90);
$listMhs[] = array( 'nim' => "A11.04567",'nama' => "Ardi", 'telp' => "084567890", 'tugas' => 80,'uts'=> 95,'uas' => 70);
