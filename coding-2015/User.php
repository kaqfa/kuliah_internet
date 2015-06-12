<?php
include_once "koneksi.php";

class User extends DBAccess{

    public $username;
    public $password;
    public $fullname;

    function __construct(){
        parent::__construct();
    }


    public function login($username, $password){
        $password = md5($password);

        $stmt = $this->db->prepare("select * from user where username = ?");
        $stmt->execute(array($username));
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $userData = $stmt->fetch();
        print_r($userData);

        if($userData->password == $password){
            return true;
        } else {
            return false;
        }
    }
}

$user = new User();
if(isset($_POST['username'])){
    if($user->login($_POST['username'], $_POST['password'])){
        setcookie("username", $_POST['username'], time()+3600);
        header("location: list_mhs.php");
    } else {
        echo "Login Gagal";
    }
}
