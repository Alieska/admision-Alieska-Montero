<?php require '../recursos/php/app_top.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>sistema_de_tesis</title>

	<link rel="stylesheet" href="../recursos/css/framework/semantic/semantic.min.css">
	<link rel="stylesheet" href="../recursos/css/main.css">



</head>

<body>

	<?php 

	if (isset($_SESSION['admin'])) {

		require "../views/nav/main_nav.php"; 

	}

	?>

	<?php 

	if (!isset($_SESSION['admin'])) {
		require '../views/admin/home.php';
	}

	else if(isset($_SESSION['admin']) && !isset($_GET['section'])){

		require "../views/nav/main_nav.php"; 

	}

	else if (isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section']=='historia'){

		require "../views/admin/historia.php"; 

	}

	else if (isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section']=='pacientes'){

		require "../views/admin/pacientes.php"; 

	}

	?>

	<script src="../recursos/js/jquery/jquery-3.2.1.min.js"></script>
	<script src="../recursos/js/admin.js"></script>
	<script src="../recursos/js/historia.js"></script>
	<script src="../recursos/css/framework/semantic/semantic.min.js"></script>
	

</body>
</html>