<?php 
	require "Functions.php";

	$admin = new Admin_Actions();

	if(isset($_SESSION['admin']) &&
	 isset($_GET['section']) && 
	 $_GET['section']== 'historia'

){

	$respuestas_dias = $admin -> getDias();	

	}

?>