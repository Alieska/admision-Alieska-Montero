$(document).ready(function(){
	
baseUrl = "http://localhost/sistema_de_tesis/";

// AQUI SE CARGA EL EVENTO, 
//Y QUEDA ESCUCHAND A Q SE PRESIONE EL BOTON CON ESA CLASE	
$('.btnAgregarOdontologo').on("click", btnOnClickAgregarOdontologo);

setEditarOdontologo();

$('.btnGuardarOdontologo').on("click", btnOnClickGuardarOdontologo);

}); // FIN - DOCUMENT READY

function setEditarOdontologo()
{
	//console.log($("#fecha-dia-hidden").val());
	var genero, especialidad;

	genero = $("#genero-hidden").val();
	especialidad = $("#especialidad-hidden").val();

	$("#genero-edit").val(genero);
	$("#especialidad-edit").val(especialidad);

}

function btnOnClickAgregarOdontologo()
{
	var nombre, apellido, cedula, celular, genero, especialidad;

	nombre = $('.textNombre').val().trim();
	apellido = $('.textApellido').val().trim();
	cedula = $('.textCedula').val().trim();
	celular = $('.textCelular').val().trim();
	genero = $("[name='genero']").val();
	especialidad = $("[name='especialidad']").val();
	
		self = this;

		$.ajax({

			type: "POST",
			url: baseUrl + "recursos/php/admin_actions/agregar_Odontologo.php",
			
			data: { 
				action: "save",
				nombre: nombre,
				apellido: apellido,
				cedula: cedula,
				celular: celular,
				genero: genero,
				especialidad: especialidad

			},

			beforeSend: function (){

				$(self).addClass("loading");

			},

			
			success: function(data){

				$(self).removeClass("loading");

				console.log(data);

				window.location.href = "http://localhost/sistema_de_tesis/agregarOdontologo";

				
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
		url: baseUrl + "recursos/php/admin_actions/agregar_Odontologo.php",
		
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

function btnOnClickGuardarOdontologo()
{
	var nombre, apellido, cedula, celular, genero, especialidad;

	nombre = $('.textNombre').val().trim();
	apellido = $('.textApellido').val().trim();
	cedula = $('.textCedula').val().trim();
	celular = $('.textCelular').val().trim();
	genero = $("[name='genero']").val();
	especialidad = $("[name='especialidad']").val();
		
		self = this;

		$.ajax({

			type: "POST",
			url: baseUrl + "recursos/php/admin_actions/agregar_Odontologo.php",
			
			data: { 
				action: "update",
				nombre: nombre,
				apellido: apellido,
				cedula: cedula,
				celular: celular,
				genero: genero,
				especialidad: especialidad

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