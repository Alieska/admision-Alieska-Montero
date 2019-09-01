<?php 

	session_start();

	session_destroy();

	header("Location: http://localhost/sistema_de_tesis/admin/");

 ?>