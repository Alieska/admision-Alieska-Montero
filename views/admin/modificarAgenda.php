<?php 

require '../../recursos/php/Functions.php';

$odontologos = new Admin_Actions();

$arrayOdontologos = array(

  "nombre",
  "apellido" 

);

$cedulas = $odontologos->selectAll("odontologo", $arrayOdontologos);


if(isset($_GET['ci']) && !empty($_GET['ci'])) {

  $mostrarCita = new Admin_Actions();

  $condicion = array("cedula" => $_GET['ci']);  
  $arrayTodo = array(

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

  $agenda =  $mostrarCita->selectForId("cita", $arrayTodo, $condicion);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>sistema_de_tesis</title>

  <link rel="stylesheet" href="recursos/css/framework/semantic/semantic.min.css">
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
  <a  href= "agregarOdontologo" style="color: #FFFFFF; border-right: 1px solid #FFFFFF; font-weight: bold; " class="item">
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

  <h4 class="ui dividing header">Citas</h4>

  <div class="twenty wide field"> 

    <div class="twenty wide field">
      <label>Fecha</label>

      <div class="three fields">

        <div class="field">

          <input type="hidden" id="fecha-dia-hidden" value="<?=$agenda[0]['fecha_Dia'];?>">

           <select id="fecha-dia-edit" class="ui fluid search dropdown" name="fecha-Dia">
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

          <input type="hidden" id="fecha-mes-hidden" value="<?=$agenda[0]['fecha_Mes'];?>">

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
          <input type="text" class="textFecha-Año" maxlength="4" placeholder="A&ntilde;o" value="<?=$agenda[0]['fecha_Anio'];?>" >
        </div>

      </div>
</div>     

<div class="twenty wide field">
   <div class="three fields">

        <div class="field">
          <label>Nombre</label>
          <input type="text" class="textNombre" maxlength="20"
          value="<?=$agenda[0]['nombre'];?>" >
        </div>

         <div class="field">
          <label>Apellido</label>
          <input type="text" class="textApellido" maxlength="20"
          value="<?=$agenda[0]['apellido'];?>" >
        </div>

        <div class="field">
       <label>Cédula</label>
       <input type="text" class="textCedula" maxlength="8" placeholder="12345678" value="<?=$agenda[0]['cedula'];?>" >
        </div>

   </div>
</div>

<div class="twenty wide field">
   <div class="two fields">

    <div class="field">
      <label>Hora</label>
          <input type="text" class="textHora" maxlength="5" placeholder="Hora" value="<?=$agenda[0]['hora'];?>" >
    </div>

<div class="field">
  <label>Turno</label>

  <input type="hidden" id="turno-hidden" value="<?=$agenda[0]['turno'];?>">

      <select id="turno-edit" class="ui fluid search dropdown" name="turno">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="pm">pm</option>
            <option value="am">am</option>
      </select> 
    </div>         
  </div>

   </div>
</div>

  <div class="field">
  <label>Odontólogo</label>
    <div class="twenty wide field">

      <input type="hidden" id="odontologo-hidden" value="<?=$agenda[0]['odontologo'];?>">

      <select id="odontologo-edit" class="ui fluid search dropdown" name="odontologo">

        <option value="0" disabled="true" selected="true">Seleccione</option>

        <?php foreach($cedulas as $cedula): ?>

            <option value="<?php echo $cedula['nombre']; ?>
            <?php echo $cedula['apellido']; ?>">
            <?php echo $cedula['nombre']; ?>
            <?php echo $cedula['apellido']; ?></option>

        <?php endforeach; ?>     
            
      </select> 

    </div>         
  </div>
 

<div style="text-align: center;">
  <button class="ui basic blue button btnGuardarCita" >Guardar</button>
</div>

</div>

</div>

</div>

  <script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
  <script src="recursos/js/cita.js"></script>
  <script src="recursos/js/odontologo.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>

</body>
</html>