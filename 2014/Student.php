<?php
include_once("koneksi.php");

class Student extends DBAccess{
	static $cols = array('nim'=>'nim',
						'nama'=>'nama',
						'alamat'=>'alamat',
						'ipk'=>'ipk',
						'status'=>'status');
	static $table = 'mahasiswa';

	public $nim;
	public $nama;
	public $alamat;
	public $ipk;
    public $status;

	public $choiceStatus = array('Non Aktif', 'Aktif', 'Lulus', 'Meninggal', 'Cuti', 'Drop Out');

	// constructor Sama seperti nama class
	function __construct($nim = null, $nama = null, $alamat = null, $ipk = null){
		parent::__construct();
		if(null == $nim){
			$this->getMhs($nim);
		} else {
			$this->nim = $nim;
			$this->nama = $nama;
			$this->alamat = $alamat;
			$this->ipk = $ipk;
		}
	}

    public function insertMhsByArray($inputArr){
      $this->insertMhs($inputArr['nim'], $inputArr['nama'], $inputArr['alamat'], $inputArr['ipk']);
    }

    public function insertMhs($nim, $nama, $alamat, $ipk){
      $statement = $this->db->prepare("insert into ".Student::$table."
	  										values (?, ?, ?, ?)");
      $statement->execute(array($nim, $nama, $alamat, $ipk));
    }

	public function getAllMhs($includeNonActive = false){

		if($includeNonActive == true)
			$rs = $this->db->query("select * from ".Student::$table);
		else
			$rs = $this->db->query("select * from mahasiswa where
							".Student::$cols['status']." = 1");

        $res = $rs->fetchAll(PDO::FETCH_CLASS, 'Student');
		return $res;
	}

	public function getMhs($nim){
      $statement = $this->db->prepare("select * from mahasiswa where nim = ?");
      $statement->execute(array($nim));
      $statement->setFetchMode(PDO::FETCH_CLASS, 'Student');
      return $statement->fetch();
	}

	public function level(){
		if($this->ipk > 3.5)
			return "Cumlaude";
		else if($this->ipk > 3)
			return "Good";
		else if($this->ipk > 2.5)
			return "Enough";
		else
			return "Not Enough";
	}

    public function getStatus(){

        return $this->choiceStatus[$this->status];
    }

	public function printSelectStatus($status=0){
		echo '<select name="status" id="status" class="form-control">';
        foreach ($this->choiceStatus as $key => $choice){
	        echo '<option value="'.$key.'"';
	        if($status == $key)
				echo " selected ";
			echo '>'.$choice.'</option>';
        }
        echo '</select>';
	}

	public function showProfile(){
		echo "NIM : ".$this->nim."<br />";
		echo "Nama : ".$this->nama."<br />";
		echo "Alamat : ".$this->alamat."<br />";
		echo "IPK : ".$this->ipk."<br />";
		echo "Status: ".$this->status()."<br />";
	}

	public function editMhs($nim, $arrayData){
		$statement = $this->db->prepare("update mahasiswa set nama = :nama, alamat = :alamat,
								ipk = :ipk, status = :status where nim = :nim");
		$data = array(':nim'=>$arrayData['nim'], ':nama'=>$arrayData['nama'],
				':alamat'=>$arrayData['alamat'], ':ipk'=>$arrayData['ipk'],
				':status'=>$arrayData['status']);
      	$statement->execute($data);
	}
}

if(isset($_POST['edit'])){
	$stud = new Student();

	if(isset($_POST['edit'])){
		$stud->editMhs($_POST['nim'], $_POST);
	}

	// redirect ke list_mhs
	header("location:list_mhs.php");

	// redir javascript
	//	echo '<script type="text/javascript">window.location="list_mhs.php";</script>';
}
