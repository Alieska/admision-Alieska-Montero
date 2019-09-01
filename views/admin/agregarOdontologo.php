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

  <h4 class="ui dividing header">Registro de Odontólogo</h4>

  <div class="twenty wide field">      

<div class="twenty wide field">
   <div class="two fields">

        <div class="field">
          <label>Nombre</label>
          <input type="text" class="textNombre" maxlength="20">
        </div>

         <div class="field">
          <label>Apellido</label>
          <input type="text" class="textApellido" maxlength="20">
        </div>

   </div>
</div>

<div class="two fields">

  <div class="field">
       <label>Cédula</label>
       <input type="text" class="textCedula" maxlength="8" placeholder="12345678">
  </div>

  <div class="field">
      <label>Celular</label>
      <input type="text" class="textCelular" maxlength="11" placeholder="12345678900">
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

  <div class="field">
  <label>Especialidad</label>
    <div class="twenty wide field">
      <select class="ui fluid search dropdown" name="especialidad">
            <option value="0" disabled="true" selected="true">Seleccione</option>
            <option value="Odontologia General">Odontología General</option>
            <option value="Periodoncia">Periodoncia</option>
            <option value="Odontopediatria">Odontopediatría</option>
            <option value="Ortodoncia">Ortodoncia</option>
            <option value="Endodoncia">Endodoncia</option>
            <option value="Implantes Dentales">Implantes Dentales</option>
      </select> 
    </div>         
  </div>
 

<div style="text-align: center;">
  <button class="ui basic blue button btnAgregarOdontologo" >Agregar</button>
</div>

</div>

</div>

</div>

  <script src="recursos/js/jquery/jquery-3.2.1.min.js"></script>
  <script src="recursos/js/odontologo.js"></script>
  <script src="recursos/css/framework/semantic/semantic.min.js"></script>

</body>
</html>
