<?php 

require '../../recursos/php/Functions.php';
$citas = new Admin_Actions();

$arrayCita = array(

  "fecha_Dia",
  "fecha_Mes",
  "fecha_Anio",
  "nombre",
  "apellido",
  "cedula",
  "hora",
  "turno",
  "odontologo" 

);

$cedulas = $citas->selectAll("cita", $arrayCita);

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

  <h4 class="ui dividing header">Agenda</h4>

<table class="ui single line table"> 

  <thead>
    
    <tr>

      <th>Cédula</th>
      <th>Día</th>
      <th>Mes</th>
      <th>Año</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>hora</th>
      <th>turno</th>
      <th>odontologo</th>
      <th>Eliminar</th>
      <th>Modificar</th>
     
    </tr>

  </thead>

  <tbody>  
    
    <?php foreach($cedulas as $cedula): ?> 

     <tr>

      <td style="color: #212F3D;" >

      <a href="verHistoria?ci=<?=$cedula['cedula'];?>">

      </a><?php echo $cedula['cedula'];?> 

      </td>

      <td style="color: #212F3D;" ><?php echo $cedula['fecha_Dia']; ?></td>
      <td style="color: #212F3D;" ><?php echo $cedula['fecha_Mes']; ?></td>
      <td style="color: #212F3D;" ><?php echo $cedula['fecha_Anio']; ?></td>
      <td style="color: #212F3D;" ><?php echo $cedula['nombre']; ?></td>
      <td style="color: #212F3D;" ><?php echo $cedula['apellido']; ?></td>  
      <td style="color: #212F3D;" ><?php echo $cedula['hora']; ?></td>
      <td style="color: #212F3D;" ><?php echo $cedula['turno']; ?></td>
      <td style="color: #212F3D;" ><?php echo $cedula['odontologo']; ?></td>

      <td><span onclick="eliminarHistoria(id)" id="eli-<?=$cedula['cedula'];?>"><i class="fas fa-times" style="color: #FF0000; cursor: pointer;" title="Eliminar Agenda"></td> 

      <td>

        <a href="modificarAgenda?ci=<?=$cedula['cedula'];?>">

        <i class="fas fa-edit" style="color: #0174DF; cursor: pointer;" title="Modificar Agenda">
          
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
  <script src="recursos/js/cita.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>
  <script src="recursos/css/framework/fontawesome/js/all.js"></script>

</body>
</html>