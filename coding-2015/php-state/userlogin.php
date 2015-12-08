<?php
include "../db/koneksi.php";

$stmt = $db->prepare('select * from userlogin where username = ?');
$stmt->execute(array($_POST['username']));
$user = $stmt->fetch(PDO::FETCH_OBJ);
$salt = 'dfasdsd<>:IIUY7868756293(*^&^$^%*^*&';

if($user != null && md5($_POST['password'].$salt) == $user->password){
    header('location:index.php');
    // $_SESSION['userlogin'] = 'login';

    if($_POST['remember'] == '1'){
        setcookie('userlogin', 'login', time()+(3600));
    } else {
        setcookie('userlogin', 'login');
    }
} else {
    echo "<h1>Kombinasi Username &amp; Password tidak tepat</h1>";
}
