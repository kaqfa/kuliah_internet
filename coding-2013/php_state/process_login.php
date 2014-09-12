<?php session_start(); 

include "db.php";

if( isset($_POST['login']) ){
	try{
		$query = 'select * from userlogin where username = ? and active = 1';
		$ssql = $db->prepare($query);
		$ssql->execute(array($_POST['username']));
		$res = $ssql->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e){
		echo $e->getMessage();
	}	

	if( $res[0]['password'] == md5($_POST['pass']) ){
		if($_POST['remember'] == 1){
			setcookie('username', $res[0]['username'], time()+3600);
			setcookie('level', $res[0]['level'], time()+3600);
		} else {
			$_SESSION = array('username'=>$res[0]['username'], 'level'=>$res[0]['level']);				
		}

		header("Location: admin.php");
	} else {
		echo "blablabla";
		//header('Location: login.php?login=fail');
		echo '<script>location.href = "login.php?login=fail"</script>';
	}	
}