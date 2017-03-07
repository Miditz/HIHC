<?php
	include_once('../db/db_connect.php');
	include_once('../db/functions.php');

	sec_session_start();//Starting php session

	if(isset($_POST['email'], $_POST['p'])){
		$email = $_POST['email'];
		$password= $_POST['p']; //hashed password

		if (login($email, $password, $mysqli) == true){
			header('Location: admin.php');

		}else{
			header('Location: index.php');
	}

} else {

	echo'invalid request';

}


?>