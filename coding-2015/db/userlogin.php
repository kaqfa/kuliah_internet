<?php
include 'connect.php';

class Userlogin extends DBConnect{
    function loginAuth($username, $password){
        $stmt = $this->db->prepare('select * from userlogin where username=? and password=?');
        $stmt->execute(array($username, $password));
        $user = $stmt->fetch();
        return $user;
    }
}

$user = new Userlogin();
