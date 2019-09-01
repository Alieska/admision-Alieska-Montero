<?php
	session_start();
	
	require 'medoo.php';

	use Medoo\Medoo;

	try{
		$database = new Medoo([
			//required
			'database_type' => 'mysql',
			'database_name' => 'sistema_de_tesis',
			'server' => 'localhost',
			'username' => 'root',
			'password' => '',

		]);

	}catch(PDOException $e){

		echo "Nose pudo conectar a la base de datos";

	}

?>