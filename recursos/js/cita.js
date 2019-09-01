$(document).ready(function(){
	
baseUrl = "http://localhost/sistema_de_tesis/";

// AQUI SE CARGA EL EVENTO, 
//Y QUEDA ESCUCHAND A Q SE PRESIONE EL BOTON CON ESA CLASE	
$('.btnAgregarCita').on("click", btnOnClickAgregarCita);

setEditarAgenda();

$('.btnGuardarCita').on("click", btnOnClickGuardarCita);

}); // FIN - DOCUMENT READY

function setEditarAgenda()
{
	//console.log($("#fecha-dia-hidden").val());
	var fechaDia, fechaMes, turno, odontologo;

	fechaDia = $("#fecha-dia-hidden").val();
	fechaMes = $("#fecha-mes-hidden").val();
	turno = $("#turno-hidden").val();
	odontologo = $("#odontologo-hidden").val();

	$("#fecha-dia-edit").val(fechaDia);
	$("#fecha-mes-edit").val(fechaMes);
	$("#turno-edit").val(turno);
	$("#odontologo-edit").val(odontologo);

}

function btnOnClickAgregarCita()
{
	var fechaDia, fechaMes, fechaAnio, nombre, apellido, cedula, hora,
	turno, odontologo;

	fechaDia = $("[name='fecha-Dia']").val();
	fechaMes = $("[name='fecha-Mes']").val();
	fechaAnio = $('.textFecha-Año').val().trim();
	nombre = $('.textNombre').val().trim();
	apellido = $('.textApellido').val().trim();
	cedula = $('.textCedula').val().trim();
	hora = $('.textHora').val().trim();	
	turno = $("[name='turno']").val();
	odontologo = $("[name='odontologo']").val();
	
		self = this;

		$.ajax({

			type: "POST",
			url: baseUrl + "recursos/php/admin_actions/agregar_Cita.php",
			
			data: { 
				action: "save",
				fecha_Dia: fechaDia,
				fecha_Mes: fechaMes, 
				fecha_Anio: fechaAnio,
				nombre: nombre,
				apellido: apellido,
				cedula: cedula,
				hora: hora,
				turno: turno,
				odontologo: odontologo

			},

			beforeSend: function (){

				$(self).addClass("loading");

			},

			
			success: function(data){

				$(self).removeClass("loading");

				console.log(data);

				window.location.href = "http://localhost/sistema_de_tesis/citas";

				
			},

			error: function(){
				//alert("Error");
				console.log("ERROR");
			}

		});
}

function eliminarHistoria(id)
{
	var cedula;
	cedula = id.split("-");
	
	$.ajax({
		type: "POST",
		url: baseUrl + "recursos/php/admin_actions/agregar_Cita.php",
		
		data: { 
			action: "delete",
			ci : cedula[1]
		},

			
		success: function(data){

			location.reload();
			
		},
		error: function(){
			//alert("Error");
			console.log("ERROR");
		}

	});

}

function btnOnClickGuardarCita()
{
	var fechaDia, fechaMes, fechaAnio, nombre, apellido, cedula, hora,
	turno, odontologo;

	fechaDia = $("[name='fecha-Dia']").val();
	fechaMes = $("[name='fecha-Mes']").val();
	fechaAnio = $('.textFecha-Año').val().trim();
	nombre = $('.textNombre').val().trim();
	apellido = $('.textApellido').val().trim();
	cedula = $('.textCedula').val().trim();
	hora = $('.textHora').val().trim();	
	turno = $("[name='turno']").val();
	odontologo = $("[name='odontologo']").val();
		
		self = this;

		$.ajax({

			type: "POST",
			url: baseUrl + "recursos/php/admin_actions/agregar_Cita.php",
			
			data: { 
				action: "update",
				fecha_Dia: fechaDia,
				fecha_Mes: fechaMes, 
				fecha_Anio: fechaAnio,
				nombre: nombre,
				apellido: apellido,
				cedula: cedula,
				hora: hora,
				turno: turno,
				odontologo: odontologo

			},

			beforeSend: function (){

				$(self).addClass("loading");

			},

			
			success: function(data){

				$(self).removeClass("loading");

				console.log(data);

				//location.reload();

				
			},

			error: function(){
				//alert("Error");
				console.log("ERROR");
			}

		});
}