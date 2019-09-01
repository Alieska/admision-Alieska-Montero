<?php 

//

/*require '../../recursos/php/admin_actions/Agregar_Historia.php';
$pacientes = new AgregarHistoria();

$seePacientes = $pacientes->getAll();*/

require '../../recursos/php/Functions.php';
$pacientes = new Admin_Actions();

$arrayPacientes = array("cedula");

$cedulas = $pacientes->selectAll("historia", $arrayPacientes);
//print_r($cedulas);
//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>sistema_de_tesis</title>

  <link rel="stylesheet" href="recursos/css/framework/semantic/semantic.min.css">
  <link rel="stylesheet" href="recursos/css/framework/fontawesome/css/all.css">
  <link rel="stylesheet" href="recursos/css/main.css">

</head>

<body>
 
  <div class="ui secondary menu" style="margin-bottom: 0px; background-color: #FA8258; ">
 
  <a href= "inicio" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    Inicio
  </a>

  <a href= "agenda" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    Agenda
  </a>

  <a href= "citas" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    Citas
  </a>
  <a href= "pacientes" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    Pacientes
  </a>
   <a href= "historia" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    Historia
  </a>
  <a href= "Odontologo" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    Odontólogos
  </a>
  <a href= "agregarOdontologo" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
    A­ñadir Odontólogos
  </a>

  <div class="right menu">

    <a href= "http://localhost/sistema_de_tesis/log-out" style="color: #FFFFFF; border-left: 1px solid #FFFFFF; font-weight: bold; " class="item">
      Salir
    </a>

  </div>

</div>

<div style="width: 90%; margin: 100px auto; border: 1px solid #666; border-radius: 10px; background-color: #fff; padding: 15px;">

  <h4 class="ui dividing header">Pacientes</h4>

<table class="ui single line table"> 

  <thead>
    
    <tr>

      <th>Cédula</th>
      <th>Eliminar</th>
      <th>Modificar</th>
     
    </tr>

  </thead>

  <tbody>  
    
    <?php foreach($cedulas as $cedula): ?> 

     <tr>

      <td style="color: #212F3D;" >

      <a href="verHistoria?ci=<?=$cedula['cedula'];?>">

      <i class="far fa-address-book" 

      style="cursor: pointer; color: #424949;" title="Ver Historia">
          
      </i>

      </a><?php echo $cedula['cedula'];?> 

      </td>

      <td><span onclick="eliminarHistoria(id)" id="eli-<?=$cedula['cedula'];?>"><i class="fas fa-times" style="color: #FF0000; cursor: pointer;" title="Eliminar Historia"></td> 

      <td>

        <a href="modificarHistoria?ci=<?=$cedula['cedula'];?>">

        <i class="fas fa-edit" style="color: #0174DF; cursor: pointer;" title="Modificar Historia">
          
        </i>

        </a>

       </span>

      </td>  

     </tr>

    <?php endforeach; ?> 

  </tbody>

</table>

</div>

  <script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
  <script src="recursos/js/historia.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>
  <script src="recursos/css/framework/fontawesome/js/all.js"></script>

</body>
</html>