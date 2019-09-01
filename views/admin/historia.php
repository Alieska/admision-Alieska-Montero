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
           <select id="fecha-dia" class="ui fluid search dropdown" name="fecha-Dia">
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
          <select class="ui fluid search dropdown" name="fecha-Mes">
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
          <input type="text" class="textFecha-Año" maxlength="4" placeholder="A&ntilde;o">
        </div>

      </div>
</div>

<div class="twenty wide field">
   <div class="three fields">

        <div class="field">
          <label>Nombre</label>
          <input type="text" class="textNombre" maxlength="20">
        </div>

         <div class="field">
          <label>Apellido</label>
          <input type="text" class="textApellido" maxlength="20">
        </div>

         <div class="field">
          <label>Cédula</label>
          <input type="text" class="textCedula" maxlength="8" placeholder="12345678">
        </div>
   </div>
</div>

<div class="twenty wide field">
      <label>Fecha de Nacimiento</label>

      <div class="three fields">

        <div class="field">
           <select class="ui fluid search dropdown" name="fecha-N-Dia">
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
          <select class="ui fluid search dropdown" name="fecha-N-Mes">
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
          <input type="text" class="textFecha-N-Año" maxlength="4" placeholder="A&ntilde;o">
        </div>

      </div>
</div>

<div class="field">
      <label>Género</label>
      <select class="ui fluid search dropdown" name="genero">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
      </select>      
</div>

<div class="two fields">
  <div class="field">
      <label>Teléfono de habitación</label>
      <input type="text" class="textTelefono-Habitacion" maxlength="11" placeholder="12345678900">
  </div>

  <div class="field">
      <label>Celular</label>
      <input type="text" class="textCelular" maxlength="11" placeholder="12345678900">
  </div>
</div>

<div class="field">
      <label>Correo</label>
      <input type="text" class="textCorreo" maxlength="50" placeholder="Ejemplo@Ejemplo.com">
</div>

<div class="two fields">
  <div class="field">
  <label>¿Está usted bajo tratamiento médico?</label>
    <div class="fifteen wide field">
      <select class="ui fluid search dropdown" name="pregunta-1">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option> 
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Toma actualmente algún medicamento?</label>
    <div class="fifteen wide field">
      <select class="ui fluid search dropdown" name="pregunta-2">
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
      <select class="ui fluid search dropdown" name="pregunta-3">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Ha recibido alguna transfusión sanguínea?</label>
    <div class="fifteen wide field">
      <select class="ui fluid search dropdown" name="pregunta-4">
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
      <select class="ui fluid search dropdown" name="pregunta-5">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
  <label>Ha presentado reacciones alérgicas a</label>
    <div class="fifteen wide field">
      <select class="ui fluid search dropdown" name="pregunta-6">
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
      <select class="ui fluid search dropdown" name="pregunta-7">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Es usted VIH positivo?</label>
    <div class="fifteen wide field">
      <select class="ui fluid search dropdown" name="pregunta-8">
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
      <select class="ui fluid search dropdown" name="pregunta-9">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
      </select> 
    </div>         
  </div>

  <div class="field">
    <label>¿Está actualmente tomando pastillas anticonceptivas?</label>
    <div class="fifteen wide field">
      <select class="ui fluid search dropdown" name="pregunta-10">
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
          <select class="ui fluid search dropdown" name="pregunta-11">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select> 
        </div>

         <div class="field">
          <label>Periapical</label>
          <select class="ui fluid search dropdown" name="pregunta-12">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>   
        </div>

         <div class="field">
          <label>Coronal</label>
          <select class="ui fluid search dropdown" name="pregunta-13">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>  
        </div>
   </div>
</div>

<div class="field">
    <label>Observaciones</label>
    <input type="text" class="textObservaciones" maxlength="100">
</div>

<div style="text-align: center;">
  <button class="ui basic blue button btnAgregarHistoria" >Agregar</button>
</div>

</div>

</div>

  <script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
  <script src="recursos/js/historia.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>

</body>
</html>
