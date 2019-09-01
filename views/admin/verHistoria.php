<?php 
//include '../../recursos/php/admin_actions/Agregar_Historia.php';
require '../../recursos/php/Functions.php';

if(isset($_GET['ci']) && !empty($_GET['ci'])) {

  $mostrarHistoria = new Admin_Actions();

  $condicion = array("cedula" => $_GET['ci']);  
  $arrayTodo = array(

    "fecha_Dia",
    "fecha_Mes",
    "fecha_Anio",
    "nombre",
    "apellido",
    "cedula",
    "fecha_N_Dia", 
    "fecha_N_Mes",
    "fecha_N_Anio",
    "genero",
    "telefono_Habitacion",
    "celular",
    "correo",
    "pregunta_1",
    "pregunta_2",
    "pregunta_3",
    "pregunta_4",
    "pregunta_5",
    "pregunta_6",
    "pregunta_7",
    "pregunta_8",
    "pregunta_9",
    "pregunta_10",
    "pregunta_11", 
    "pregunta_12",
    "pregunta_13",
    "observaciones"
  );

  $paciente =  $mostrarHistoria->selectForId("historia", $arrayTodo, $condicion);

  //$todo = $mostrar->selectForId("historia", $arrayTodos, $cedula);

  //$agregarHistoria = new AgregarHistoria();
  //$agregarHistoria->getHistoria($_GET['ci']);

}


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



  <div class="ui form">

  <div style="width: 90%; margin: 100px auto; border: 1px solid #666; border-radius: 10px; background-color: #fff; padding: 15px;">

  <h4 class="ui dividing header">Historia</h4>

  <div class="twenty wide field">
      <label>Fecha</label>

      <div class="three fields">

        <div class="field">

           <?=$paciente[0]['fecha_Dia'] ?>

        </div>

        <div class="field">
          
          <?=$paciente[0]['fecha_Mes'] ?>

        </div>

        <div class="field">

          <?=$paciente[0]['fecha_Anio'] ?>

        </div>

      </div>
</div>

<div class="twenty wide field">
   <div class="three fields">

        <div class="field">
          <label>Nombre</label>

          <?=$paciente[0]['nombre'] ?>

        </div>

         <div class="field">
          <label>Apellido</label>

          <?=$paciente[0]['apellido'] ?>

        </div>

         <div class="field">
          <label>Cédula</label>

          <?=$paciente[0]['cedula'] ?>

        </div>
   </div>
</div>

<div class="twenty wide field">
      <label>Fecha de Nacimiento</label>

      <div class="three fields">

        <div class="field">

          <?=$paciente[0]['fecha_N_Dia'] ?>

        </div>

        <div class="field">

          <?=$paciente[0]['fecha_N_Mes'] ?>

        </div>

        <div class="field">

          <?=$paciente[0]['fecha_N_Anio'] ?>

        </div>

      </div>
</div>

<div class="field">
      <label>Género</label>

      <?=$paciente[0]['genero'] ?>  

</div>

<div class="two fields">
  <div class="field">
      <label>Teléfono de habitación</label>

      <?=$paciente[0]['telefono_Habitacion'] ?>

  </div>

  <div class="field">
      <label>Celular</label>

      <?=$paciente[0]['celular'] ?>

  </div>
</div>

<div class="field">
      <label>Correo</label>

     <?=$paciente[0]['correo'] ?>

</div>

<div class="two fields">
  <div class="field">
  <label>¿Está usted bajo tratamiento médico?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_1'] ?>

    </div>         
  </div>

  <div class="field">
    <label>¿Toma actualmente algún medicamento?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_2'] ?> 

    </div>         
  </div>
</div>

<div class="two fields">
  <div class="field">
    <label>¿Ha tenido limitaciones al abrir o cerrar la boca?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_3'] ?>

    </div>         
  </div>

  <div class="field">
    <label>¿Ha recibido alguna transfusión sanguínea?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_4'] ?>

    </div>         
  </div>
</div> 
 
<div class="two fields">
  <div class="field">
    <label>¿Sufre de herpes recurrentes?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_5'] ?>

    </div>         
  </div>

  <div class="field">
  <label>Ha presentado reacciones alérgicas a</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_6'] ?>

    </div>         
  </div>
</div>  

<div class="two fields">
  <div class="field">
    <label>¿Sangra excesivamente al cortarse?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_7'] ?>

    </div>         
  </div>

  <div class="field">
    <label>¿Es usted VIH positivo?</label>
    <div class="fifteen wide field">

     <?=$paciente[0]['pregunta_8'] ?>

    </div>         
  </div>
</div> 

<div class="two fields">
  <div class="field">
    <label>¿Está embarazada?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_9'] ?>

    </div>         
  </div>

  <div class="field">
    <label>¿Está actualmente tomando pastillas anticonceptivas?</label>
    <div class="fifteen wide field">

      <?=$paciente[0]['pregunta_10'] ?>

    </div>         
  </div>
</div> 

<h4 class="ui dividing header">Exámenes complementarios</h4>

<div class="twenty wide field">
   <div class="three fields">

        <div class="field">
          <label>Panorámica</label>

         <?=$paciente[0]['pregunta_11'] ?> 

        </div>

         <div class="field">
          <label>Periapical</label>

          <?=$paciente[0]['pregunta_12'] ?> 

        </div>

         <div class="field">
          <label>Coronal</label>

          <?=$paciente[0]['pregunta_13'] ?>  

        </div>
   </div>
</div>

<div class="field">
    <label>Observaciones</label>

    <?=$paciente[0]['observaciones'] ?>

</div>

</div>

</div>

  <script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
  <script src="recursos/js/historia.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>
  <script src="recursos/css/framework/fontawesome/js/all.js"></script>

</body>
</html>