<?php
$db = null;
$config['debug'] = true;
try{
	$db = new PDO("mysql:host=localhost;dbname=test", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
}


/*
Untuk di-extend oleh semua class yang perlu koneksi database.
Sudah tersedia attribute $db dan koneksi PDO pada constructor
*/
class DBAccess{
	protected $db;

	function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=test", 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
	}

}

/*
Penggunaan PDO untuk mengakses database:
- koneksi dengan class PDO dan connection string yang diinstantiasikan ke sebuah variabel
- variabel tersebut yang akan digunakan untuk operasi DB selanjutnya
- setAttribute() opsional untuk menampilkan pesan error jika kesalahan terjadi
- untuk mengeksekusi query statis, tanpa ada kondisi yang didapatkan dari variabel
  maka bisa lebih cepat menggunakan $db->query()
- namun untuk mengeksekusi query yang memiliki kondisi yang didapatkan dari variabel,
  terutama variabel yang dikirimkan oleh end user maka harus menggunakan
  $db->prepare() dan $db->execute() (binding variable)
- data yang dihasilkan oleh $db->query() berupa array 2 dimensi
- data yang dihasilkan oleh statement fetch / statement fetchAll() dapat dikonfigurasi
  melalui setFetchMode() [array, object, class, lazy]
- binding variable bisa menggunakan karakter "?" atau menggunakan index ":key_index"
*/
