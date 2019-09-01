<?php 
	
	require '../Functions.php';
	$admin = new Admin_Actions();

	//login

	$login = $admin->logIn($_POST['email'], $_POST['pass']);

	if($login){

		$_SESSION['admin'] = $_POST['email'];
		echo "true";

	}else{
		echo "false";
	}

 ?>