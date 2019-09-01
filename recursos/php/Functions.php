<?php
	require 'init.php';

	class Admin_Actions{

		public function logIn($email, $pass){			

			global $database;

			$data= $database -> select("admin", [
				"password"

			], [

				"OR" => [
					"email" => $email

				]

			]);

			$password_db = $data[0]["password"];

			if(password_verify($pass, $password_db)){

				return true;

			} else{

				return false;
			}

		}


		public function selectForId($table, $arrayData, $id)
		{
			global $database;
			$data = $database->select($table, $arrayData, $id); // aqui guarda
			return $data;
		}

		public function selectAll($table, $arrayData)
		{
			global $database;
			$data = $database->select($table, $arrayData); // aqui guarda
			return $data;
		}

		/*
		* METODO QUE INSERTA EN CUALQUIER TABLA
		* $table = NOMBRE DE LA TABLA A GUARDAR
		* $arrayData = ARREGLO DE LOS DATOS A GUARDAR
		*/

		public function insert($table, $arrayData)
		{
			global $database;

			$database->insert($table, $arrayData); // aqui guarda

		}

		
		public function update($table, $arrayData)
		{
			global $database;
			$database->update($table, $arrayData);
		}


		public function delete($table, $condition)
		{
			global $database;
			$data = $database->delete($table, $condition);
			
		}

	}

?>