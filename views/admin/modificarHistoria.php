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
  //print_r($paciente);
  //exit();
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
           <input type="hidden" id="fecha-dia-hidden" value="<?=$paciente[0]['fecha_Dia'];?>">
           <select id="fecha-dia-edit" class="ui fluid search dropdown" name="fecha-Dia">
            <option value="0" disabled="true" selected="true">Dia</option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
            <option value="6">06</option>
            <option value="7">07</option>
            <option value="8">08</option>
            <option value="9">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
        </div>

        <div class="field">
          <input type="hidden" id="fecha-mes-hidden" value="<?=$paciente[0]['fecha_Mes'];?>">
          <select id="fecha-mes-edit" class="ui fluid search dropdown" name="fecha-Mes">
            <option value="0" disabled="true" selected="true">Mes</option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
          </select>
        </div>

        <div class="field">
          <input type="text" class="textFecha-Año" maxlength="4" placeholder="A&ntilde;o" value="<?=$paciente[0]['fecha_Anio'] ?>">
        </div>

      </div>
</div>

<div class="twenty wide field">
   <div class="three fields">

        <div class="field">
          <label>Nombre</label>
          <input type="text" class="textNombre" maxlength="20" value="<?=$paciente[0]['nombre'];?>">
        </div>

         <div class="field">
          <label>Apellido</label>
          <input type="text" class="textApellido" maxlength="20" value="<?=$paciente[0]['apellido'];?>">
        </div>

         <div class="field">
          <label>Cédula</label>           
          <input type="text" class="textCedula" maxlength="8" placeholder="12345678" value="<?=$paciente[0]['cedula'];?>">
        </div>
   </div>
</div>

<div class="twenty wide field">
      <label>Fecha de Nacimiento</label>

      <div class="three fields">

        <div class="field">
          <input type="hidden" id="naci-dia-hidden" value="<?=$paciente[0]['fecha_N_Dia'];?>">
           <select id="naci-dia-edit" class="ui fluid search dropdown" name="fecha-N-Dia">
            <option value="0" disabled="true" selected="true">Día</option>
            <option value="1">01</option>
            <option value="2">02</option>
            <option value="3">03</option>
            <option value="4">04</option>
            <option value="5">05</option>
            <option value="6">06</option>
            <option value="7">07</option>
            <option value="8">08</option>
            <option value="9">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
        </div>

        <div class="field">
           <input type="hidden" id="naci-mes-hidden" value="<?=$paciente[0]['fecha_N_Mes'];?>">
          <select id="naci-mes-edit" class="ui fluid search dropdown" name="fecha-N-Mes">
            <option value="0" disabled="true" selected="true">Mes</option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
          </select>
        </div>

        <div class="field">
          <input type="text" class="textFecha-N-Año" maxlength="4" placeholder="A&ntilde;o" value="<?=$paciente[0]['fecha_N_Anio'];?>">
        </div>

      </div>
</div>

<div class="field">
      <label>Género</label>
      <input type="hidden" id="genero-hidden" value="<?=$paciente[0]['genero'];?>">
      <select id="genero-edit" class="ui fluid search dropdown" name="genero">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
      </select>      
</div>

<div class="two fields">
  <div class="field">
      <label>Teléfono de habitación</label>
      <input type="text" class="textTelefono-Habitacion" maxlength="11" placeholder="12345678900" value="<?=$paciente[0]['telefono_Habitacion'];?>">
  </div>

  <div class="field">
      <label>Celular</label>
      <input type="text" class="textCelular" maxlength="11" placeholder="12345678900" value="<?=$paciente[0]['celular'];?>">
  </div>
</div>

<div class="field">
      <label>Correo</label>
      <input type="text" class="textCorreo" maxlength="50" placeholder="Ejemplo@Ejemplo.com" value="<?=$paciente[0]['correo'];?>">
</div>

<div class="two fields">
  <div class="field">
  <label>¿Está usted bajo tratamiento médico?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-1-hidden" value="<?=$paciente[0]['pregunta_1'];?>">
      <select id="pregunta-1-edit" class="ui fluid search dropdown" name="pregunta-1">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option> 
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Toma actualmente algún medicamento?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-2-hidden" value="<?=$paciente[0]['pregunta_2'];?>">
      <select id="pregunta-2-edit" class="ui fluid search dropdown" name="pregunta-2">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>
</div>

<div class="two fields">
  <div class="field">
    <label>¿Ha tenido limitaciones al abrir o cerrar la boca?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-3-hidden" value="<?=$paciente[0]['pregunta_3'];?>">
      <select id="pregunta-3-edit" class="ui fluid search dropdown" name="pregunta-3">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Ha recibido alguna transfusión sanguínea?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-4-hidden" value="<?=$paciente[0]['pregunta_4'];?>">
      <select id="pregunta-4-edit" class="ui fluid search dropdown" name="pregunta-4">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>
</div> 
 
<div class="two fields">
  <div class="field">
    <label>¿Sufre de herpes recurrentes?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-5-hidden" value="<?=$paciente[0]['pregunta_5'];?>">
      <select id="pregunta-5-edit" class="ui fluid search dropdown" name="pregunta-5">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
  <label>Ha presentado reacciones alérgicas a</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-6-hidden" value="<?=$paciente[0]['pregunta_6'];?>">
      <select id="pregunta-6-edit" class="ui fluid search dropdown" name="pregunta-6">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Procaína">Procaína</option>
            <option value="Dibucaína">Dibucaína</option>
            <option value="Tetracaína">Tetracaína</option>
            <option value="Látex">Látex</option>
            <option value="Metales">Metales</option>
            <option value="Resinas">Resinas</option>
            <option value="Ninguno">Ninguno</option>
      </select> 
    </div>         
  </div>
</div>  

<div class="two fields">
  <div class="field">
    <label>¿Sangra excesivamente al cortarse?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-7-hidden" value="<?=$paciente[0]['pregunta_7'];?>">
      <select id="pregunta-7-edit" class="ui fluid search dropdown" name="pregunta-7">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Es usted VIH positivo?</label>
    <div class="fifteen wide field">
       <input type="hidden" id="pregunta-8-hidden" value="<?=$paciente[0]['pregunta_8'];?>">
      <select id="pregunta-8-edit" class="ui fluid search dropdown" name="pregunta-8">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>
</div> 

<div class="two fields">
  <div class="field">
    <label>¿Está embarazada?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-9-hidden" value="<?=$paciente[0]['pregunta_9'];?>">
      <select id="pregunta-9-edit" class="ui fluid search dropdown" name="pregunta-9">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Está actualmente tomando pastillas anticonceptivas?</label>
    <div class="fifteen wide field">
      <input type="hidden" id="pregunta-10-hidden" value="<?=$paciente[0]['pregunta_10'];?>">
      <select id="pregunta-10-edit" class="ui fluid search dropdown" name="pregunta-10">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>
</div> 

<h4 class="ui dividing header">Exámenes complementarios</h4>

<div class="twenty wide field">
   <div class="three fields">

        <div class="field">
          <label>Panorámica</label>
          <input type="hidden" id="pregunta-11-hidden" value="<?=$paciente[0]['pregunta_11'];?>">
          <select id="pregunta-11-edit" class="ui fluid search dropdown" name="pregunta-11">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select> 
        </div>

         <div class="field">
          <label>Periapical</label>
           <input type="hidden" id="pregunta-12-hidden" value="<?=$paciente[0]['pregunta_12'];?>">
          <select id="pregunta-12-edit" class="ui fluid search dropdown" name="pregunta-12">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>   
        </div>

         <div class="field">
          <label>Coronal</label>
          <input type="hidden" id="pregunta-13-hidden" value="<?=$paciente[0]['pregunta_13'];?>">
          <select  id="pregunta-13-edit" class="ui fluid search dropdown" name="pregunta-13">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>  
        </div>
   </div>
</div>

<div class="field">
    <label>Observaciones</label>
    <input type="text" class="textObservaciones" maxlength="100" value="<?=$paciente[0]['observaciones'];?>" >
</div>

<div style="text-align: center;">
  <button class="ui basic blue button btnGuardarHistoria" >Guardar</button>
</div>

</div>

</div>

  <script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
  <script src="recursos/js/historia.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>
  <script src="recursos/css/framework/fontawesome/js/all.js"></script>

</body>
</html>