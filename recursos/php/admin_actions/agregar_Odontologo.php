<?php 
require '../Functions.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {

	$agregarOdontologo = new AgregarOdontologo();

    $action = $_POST['action'];

    switch($action) {

        case 'save': $agregarOdontologo->save();
        	break;

        case 'delete' : 
        	$agregarOdontologo->deleteOdontologo($_POST['ci']);
        	break;

        case 'update' : 
        	$agregarOdontologo->updateOdontologo();
        	break;	
    }
}

class AgregarOdontologo{

	
	public function save()
	{

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$celular = $_POST['celular'];
		$genero = $_POST['genero'];
		$especialidad = $_POST['especialidad'];

		// aqui se crea el arreglo
		$arrayOdontologo= array(

			"nombre" => $nombre,
			"apellido" => $apellido,
			"cedula" => $cedula,
			"celular" => $celular,
			"genero" => $genero,
			"especialidad" => $especialidad

		);
		// LLAMADA AL METODO GENERICO DE INSERTAR
		$odontologo = new Admin_Actions();

		$saveOdontologo = $odontologo->insert("odontologo", $arrayOdontologo);

	}

	public function deleteOdontologo($id)
	{
		$odontologo = new Admin_Actions();
		$ci = array("cedula" => $id);
		$cedulas = $odontologo->delete("odontologo", $ci);
		
	}

	public function updateOdontologo()
	{

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$celular = $_POST['celular'];
		$genero = $_POST['genero'];
		$especialidad = $_POST['especialidad'];

		// aqui se crea el arreglo
			$arrayOdontologo= array(

			"nombre" => $nombre,
			"apellido" => $apellido,
			"cedula" => $cedula,
			"celular" => $celular,
			"genero" => $genero,
			"especialidad" => $especialidad

		);
		
		$updateOdontologo = new Admin_Actions();

		$updateOdontologo = $updateOdontologo->update("odontologo", $arrayOdontologo);

	}

}

?>