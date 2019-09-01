<?php require 'recursos/php/app_top.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>sistema_de_tesis</title>

	<link rel="stylesheet" href="recursos/css/framework/semantic/semantic.min.css">
	<link rel="stylesheet" href="recursos/css/main.css">



</head>

<body>

	<?php require "views/nav/main_nav.php"; ?>

	<?php 

	if (!isset($_GET['section'])) {
		require 'views/home.php';
	}

	?>

	<script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
	<script src="recursos/js/admin.js"></script>
	<script src="recursos/css/framework/semantic/semantic.min.js"></script>

</body>
</html>