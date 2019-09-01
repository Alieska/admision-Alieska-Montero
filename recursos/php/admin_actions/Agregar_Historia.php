<?php 
require '../Functions.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {

	$agregarHistoria = new AgregarHistoria();

    $action = $_POST['action'];

    switch($action) {

        case 'save': $agregarHistoria->save();
        	break;

        case 'delete' : 
        	$agregarHistoria->deleteHistoria($_POST['ci']);
        	break;

        case 'update' : 
        	$agregarHistoria->updateHistoria();
        	break;	
    }
}

class AgregarHistoria{

	
	public function save()
	{

		$fechaDia = $_POST['fecha_Dia'];
		$fechaMes = $_POST['fecha_Mes'];
		$fechaAnio = $_POST['fecha_Anio'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$fechaNDia = $_POST['fecha_N_Dia'];
		$fechaNMes = $_POST['fecha_N_Mes'];
		$fechaNAnio = $_POST['fecha_N_Anio'];
		$genero = $_POST['genero'];
		$telefono = $_POST['telefono_Habitacion'];
		$celular = $_POST['celular'];
		$correo = $_POST['correo'];
		$pregunta1 = $_POST['pregunta_1'];
		$pregunta2 = $_POST['pregunta_2'];
		$pregunta3 = $_POST['pregunta_3'];
		$pregunta4 = $_POST['pregunta_4'];
		$pregunta5 = $_POST['pregunta_5'];
		$pregunta6 = $_POST['pregunta_6'];
		$pregunta7 = $_POST['pregunta_7'];
		$pregunta8 = $_POST['pregunta_8'];
		$pregunta9 = $_POST['pregunta_9'];
		$pregunta10 = $_POST['pregunta_10'];
		$pregunta11 = $_POST['pregunta_11'];
		$pregunta12 = $_POST['pregunta_12'];
		$pregunta13 = $_POST['pregunta_13'];
		$observaciones = $_POST['observaciones'];

		// aqui se crea el arreglo
		$arrayHistoria= array(

			"fecha_Dia" => $fechaDia,
			"fecha_Mes" => $fechaMes,
			"fecha_Anio" => $fechaAnio,
			"nombre" => $nombre,
			"apellido" => $apellido,
			"cedula" => $cedula,
			"fecha_N_Dia" => $fechaNDia, 
			"fecha_N_Mes" => $fechaNMes,
			"fecha_N_Anio" => $fechaNAnio,
			"genero" => $genero,
			"telefono_Habitacion" => $telefono,
			"celular" => $celular,
			"correo" => $correo,
			"pregunta_1" => $pregunta1,
		    "pregunta_2" => $pregunta2,
			"pregunta_3" => $pregunta3,
			"pregunta_4" => $pregunta4,
			"pregunta_5" => $pregunta5,
			"pregunta_6" => $pregunta6,
			"pregunta_7" => $pregunta7,
			"pregunta_8" => $pregunta8,
			"pregunta_9" => $pregunta9,
			"pregunta_10" => $pregunta10,
			"pregunta_11" => $pregunta11, 
			"pregunta_12" =>  $pregunta12,
			"pregunta_13" => $pregunta13,
			"observaciones" => $observaciones

		);
		// LLAMADA AL METODO GENERICO DE INSERTAR
		$historia = new Admin_Actions();

		$saveHistoria = $historia->insert("historia", $arrayHistoria);

	}

	public function deleteHistoria($id)
	{
		$paciente = new Admin_Actions();
		$ci = array("cedula" => $id);
		$cedulas = $paciente->delete("historia", $ci);
		
	}


	public function updateHistoria()
	{

		$fechaDia = $_POST['fecha_Dia'];
		$fechaMes = $_POST['fecha_Mes'];
		$fechaAnio = $_POST['fecha_Anio'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$fechaNDia = $_POST['fecha_N_Dia'];
		$fechaNMes = $_POST['fecha_N_Mes'];
		$fechaNAnio = $_POST['fecha_N_Anio'];
		$genero = $_POST['genero'];
		$telefono = $_POST['telefono_Habitacion'];
		$celular = $_POST['celular'];
		$correo = $_POST['correo'];
		$pregunta1 = $_POST['pregunta_1'];
		$pregunta2 = $_POST['pregunta_2'];
		$pregunta3 = $_POST['pregunta_3'];
		$pregunta4 = $_POST['pregunta_4'];
		$pregunta5 = $_POST['pregunta_5'];
		$pregunta6 = $_POST['pregunta_6'];
		$pregunta7 = $_POST['pregunta_7'];
		$pregunta8 = $_POST['pregunta_8'];
		$pregunta9 = $_POST['pregunta_9'];
		$pregunta10 = $_POST['pregunta_10'];
		$pregunta11 = $_POST['pregunta_11'];
		$pregunta12 = $_POST['pregunta_12'];
		$pregunta13 = $_POST['pregunta_13'];
		$observaciones = $_POST['observaciones'];

		// aqui se crea el arreglo
		$arrayHistoria= array(

			"fecha_Dia" => $fechaDia,
			"fecha_Mes" => $fechaMes,
			"fecha_Anio" => $fechaAnio,
			"nombre" => $nombre,
			"apellido" => $apellido,
			"cedula" => $cedula,
			"fecha_N_Dia" => $fechaNDia, 
			"fecha_N_Mes" => $fechaNMes,
			"fecha_N_Anio" => $fechaNAnio,
			"genero" => $genero,
			"telefono_Habitacion" => $telefono,
			"celular" => $celular,
			"correo" => $correo,
			"pregunta_1" => $pregunta1,
		    "pregunta_2" => $pregunta2,
			"pregunta_3" => $pregunta3,
			"pregunta_4" => $pregunta4,
			"pregunta_5" => $pregunta5,
			"pregunta_6" => $pregunta6,
			"pregunta_7" => $pregunta7,
			"pregunta_8" => $pregunta8,
			"pregunta_9" => $pregunta9,
			"pregunta_10" => $pregunta10,
			"pregunta_11" => $pregunta11, 
			"pregunta_12" =>  $pregunta12,
			"pregunta_13" => $pregunta13,
			"observaciones" => $observaciones

		);
		
		$updateHistoria = new Admin_Actions();

		$updateHistoria = $updateHistoria->update("historia", $arrayHistoria);


	}



	/*public function getAll()
	{
		$pacientes = new Admin_Actions();
		$arrayPacientes = array("cedula");
		$cedulas = $pacientes->selectAll("historia", $arrayPacientes);
		return $cedulas;
	}*/

}



// Aqui es mas resumido pero hay q hacer algho en el js
//$arrayHistoria = json_decode($_POST['data']);


/*
// ejemplo de un update
$saveHistoria = $historia->update("historia", $arrayHistoria, 
				["nombre[=]" => $tuvariable]);*/

?>