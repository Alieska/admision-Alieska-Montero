<?php 
require '../Functions.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {

	$agregarCita = new AgregarCita();

    $action = $_POST['action'];

    switch($action) {

        case 'save': $agregarCita->save();
        	break;

        case 'delete' : 
        	$agregarCita->deleteCita($_POST['ci']);
        	break;

        case 'update' : 
        	$agregarCita->updateCita();
        	break;	
    }
}

class AgregarCita{

	
	public function save()
	{

		$fechaDia = $_POST['fecha_Dia'];
		$fechaMes = $_POST['fecha_Mes'];
		$fechaAnio = $_POST['fecha_Anio'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$hora = $_POST['hora'];
		$turno = $_POST['turno'];
		$odontologo = $_POST['odontologo'];

		// aqui se crea el arreglo
		$arrayCita= array(

			"fecha_Dia" => $fechaDia,
			"fecha_Mes" => $fechaMes,
			"fecha_Anio" => $fechaAnio,
			"nombre" => $nombre,
			"apellido" => $apellido,
			"cedula" => $cedula,
			"hora" => $hora,
			"turno" => $turno,
			"odontologo" => $odontologo

		);
		// LLAMADA AL METODO GENERICO DE INSERTAR
		$cita = new Admin_Actions();

		$saveCita = $cita->insert("cita", $arrayCita);

	}

	public function deleteCita($id)
	{
		$cita = new Admin_Actions();
		$ci = array("cedula" => $id);
		$cedulas = $cita->delete("cita", $ci);
		
	}


	public function updateCita()
	{

		$fechaDia = $_POST['fecha_Dia'];
		$fechaMes = $_POST['fecha_Mes'];
		$fechaAnio = $_POST['fecha_Anio'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$hora = $_POST['hora'];
		$turno = $_POST['turno'];
		$odontologo = $_POST['odontologo'];

		// aqui se crea el arreglo
			$arrayCita= array(

			"fecha_Dia" => $fechaDia,
			"fecha_Mes" => $fechaMes,
			"fecha_Anio" => $fechaAnio,
			"nombre" => $nombre,
			"apellido" => $apellido,
			"cedula" => $cedula,
			"hora" => $hora,
			"turno" => $turno,
			"odontologo" => $odontologo

		);
		
		$updateAgenda = new Admin_Actions();

		$updateAgenda = $updateAgenda->update("cita", $arrayCita);

	}

}

?>