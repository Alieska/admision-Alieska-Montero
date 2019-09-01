$(document).ready(function(){
	
baseUrl = "http://localhost/sistema_de_tesis/";

// AQUI SE CARGA EL EVENTO, 
//Y QUEDA ESCUCHAND A Q SE PRESIONE EL BOTON CON ESA CLASE	
$('.btnAgregarHistoria').on("click", btnOnClickAgregarHistoria);

setFechasEditarHistoria();

$('.btnGuardarHistoria').on("click", btnOnClickGuardarHistoria);

}); // FIN - DOCUMENT READY

function setFechasEditarHistoria()
{
	//console.log($("#fecha-dia-hidden").val());
	var dia, mes, diaN, mesN, genero, pregunta1, pregunta2, pregunta3, 
	pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, 
	pregunta10, pregunta11, pregunta12, pregunta13;

	dia = $("#fecha-dia-hidden").val();
	mes = $("#fecha-mes-hidden").val();
	diaN = $("#naci-dia-hidden").val();
	mesN = $("#naci-mes-hidden").val();
	genero = $("#genero-hidden").val();
	pregunta1 = $("#pregunta-1-hidden").val();
	pregunta2 = $("#pregunta-2-hidden").val();
	pregunta3 = $("#pregunta-3-hidden").val();
	pregunta4 = $("#pregunta-4-hidden").val();
	pregunta5 = $("#pregunta-5-hidden").val();
	pregunta6 = $("#pregunta-6-hidden").val();
	pregunta7 = $("#pregunta-7-hidden").val();
	pregunta8 = $("#pregunta-8-hidden").val();
	pregunta9 = $("#pregunta-9-hidden").val();
	pregunta10 = $("#pregunta-10-hidden").val();
	pregunta11 = $("#pregunta-11-hidden").val();
	pregunta12 = $("#pregunta-12-hidden").val();
	pregunta13 = $("#pregunta-13-hidden").val();

	$("#fecha-dia-edit").val(dia);
	$("#fecha-mes-edit").val(mes);
	$("#naci-dia-edit").val(diaN);
	$("#naci-mes-edit").val(mesN);
	$("#genero-edit").val(genero);
	$("#pregunta-1-edit").val(pregunta1);
	$("#pregunta-2-edit").val(pregunta2);
	$("#pregunta-3-edit").val(pregunta3);
	$("#pregunta-4-edit").val(pregunta4);
	$("#pregunta-5-edit").val(pregunta5);
	$("#pregunta-6-edit").val(pregunta6);
	$("#pregunta-7-edit").val(pregunta7);
	$("#pregunta-8-edit").val(pregunta8);
	$("#pregunta-9-edit").val(pregunta9);
	$("#pregunta-10-edit").val(pregunta10);
	$("#pregunta-11-edit").val(pregunta11);
	$("#pregunta-12-edit").val(pregunta12);
	$("#pregunta-13-edit").val(pregunta13);

}

function btnOnClickAgregarHistoria()
{
	var fechaDia, fechaMes, fechaAnio, nombre, apellido, cedula, fechaNDia, 
	fechaNMes, fechaNAnio, genero, telefono, celular, correo, pregunta1, 
	pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, 
	pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, observaciones;

	fechaDia = $("[name='fecha-Dia']").val();
	fechaMes = $("[name='fecha-Mes']").val();
	fechaAnio = $('.textFecha-Año').val().trim();
	nombre = $('.textNombre').val().trim();
	apellido = $('.textApellido').val().trim();
	cedula = $('.textCedula').val().trim();
	fechaNDia = $("[name='fecha-N-Dia']").val();
	fechaNMes = $("[name='fecha-N-Mes']").val();
	fechaNAnio = $('.textFecha-N-Año').val().trim();
	genero = $("[name='genero']").val();
	telefono = $('.textTelefono-Habitacion').val().trim();
	celular = $('.textCelular').val().trim();
	correo = $('.textCorreo').val().trim();
	pregunta1 = $("[name='pregunta-1']").val();
	pregunta2 = $("[name='pregunta-2']").val();
	pregunta3 = $("[name='pregunta-3']").val();
	pregunta4 = $("[name='pregunta-4']").val();
	pregunta5 = $("[name='pregunta-5']").val();
	pregunta6 = $("[name='pregunta-6']").val();
	pregunta7 = $("[name='pregunta-7']").val();
	pregunta8 = $("[name='pregunta-8']").val();
	pregunta9 = $("[name='pregunta-9']").val();
	pregunta10 = $("[name='pregunta-10']").val();
	pregunta11 = $("[name='pregunta-11']").val();
	pregunta12 = $("[name='pregunta-12']").val();
	pregunta13 = $("[name='pregunta-13']").val();
	observaciones = $('.textObservaciones').val().trim();
		
		self = this;

		$.ajax({

			type: "POST",
			url: baseUrl + "recursos/php/admin_actions/Agregar_Historia.php",
			
			data: { 
				action: "save",
				fecha_Dia: fechaDia,
				fecha_Mes: fechaMes, 
				fecha_Anio: fechaAnio,
				nombre: nombre,
				apellido: apellido,
				cedula: cedula,
				fecha_N_Dia: fechaNDia, 
				fecha_N_Mes: fechaNMes,
				fecha_N_Anio: fechaNAnio,
				genero: genero,
				telefono_Habitacion: telefono,
				celular: celular,
				correo: correo,
				pregunta_1: pregunta1,
				pregunta_2: pregunta2,
				pregunta_3: pregunta3,
				pregunta_4: pregunta4,
				pregunta_5: pregunta5,
				pregunta_6: pregunta6,
				pregunta_7: pregunta7,
				pregunta_8: pregunta8,
				pregunta_9: pregunta9,
				pregunta_10: pregunta10,
				pregunta_11: pregunta11, 
				pregunta_12: pregunta12,
				pregunta_13: pregunta13,
				observaciones: observaciones

			},

			beforeSend: function (){

				$(self).addClass("loading");

			},

			
			success: function(data){

				$(self).removeClass("loading");

				console.log(data);

				window.location.href = "http://localhost/sistema_de_tesis/historia";
				
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
		url: baseUrl + "recursos/php/admin_actions/Agregar_Historia.php",
		
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


function btnOnClickGuardarHistoria()
{
	var fechaDia, fechaMes, fechaAnio, nombre, apellido, cedula, fechaNDia, 
	fechaNMes, fechaNAnio, genero, telefono, celular, correo, pregunta1, 
	pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, 
	pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, observaciones;

	fechaDia = $("[name='fecha-Dia']").val();
	fechaMes = $("[name='fecha-Mes']").val();
	fechaAnio = $('.textFecha-Año').val().trim();
	nombre = $('.textNombre').val().trim();
	apellido = $('.textApellido').val().trim();
	cedula = $('.textCedula').val().trim();
	fechaNDia = $("[name='fecha-N-Dia']").val();
	fechaNMes = $("[name='fecha-N-Mes']").val();
	fechaNAnio = $('.textFecha-N-Año').val().trim();
	genero = $("[name='genero']").val();
	telefono = $('.textTelefono-Habitacion').val().trim();
	celular = $('.textCelular').val().trim();
	correo = $('.textCorreo').val().trim();
	pregunta1 = $("[name='pregunta-1']").val();
	pregunta2 = $("[name='pregunta-2']").val();
	pregunta3 = $("[name='pregunta-3']").val();
	pregunta4 = $("[name='pregunta-4']").val();
	pregunta5 = $("[name='pregunta-5']").val();
	pregunta6 = $("[name='pregunta-6']").val();
	pregunta7 = $("[name='pregunta-7']").val();
	pregunta8 = $("[name='pregunta-8']").val();
	pregunta9 = $("[name='pregunta-9']").val();
	pregunta10 = $("[name='pregunta-10']").val();
	pregunta11 = $("[name='pregunta-11']").val();
	pregunta12 = $("[name='pregunta-12']").val();
	pregunta13 = $("[name='pregunta-13']").val();
	observaciones = $('.textObservaciones').val().trim();
		
		self = this;

		$.ajax({

			type: "POST",
			url: baseUrl + "recursos/php/admin_actions/Agregar_Historia.php",
			
			data: { 
				action: "update",
				fecha_Dia: fechaDia,
				fecha_Mes: fechaMes, 
				fecha_Anio: fechaAnio,
				nombre: nombre,
				apellido: apellido,
				cedula: cedula,  
				fecha_N_Dia: fechaNDia, 
				fecha_N_Mes: fechaNMes,
				fecha_N_Anio: fechaNAnio,
				genero: genero,
				telefono_Habitacion: telefono,
				celular: celular,
				correo: correo,
				pregunta_1: pregunta1,
				pregunta_2: pregunta2,
				pregunta_3: pregunta3,
				pregunta_4: pregunta4,
				pregunta_5: pregunta5,
				pregunta_6: pregunta6,
				pregunta_7: pregunta7,
				pregunta_8: pregunta8,
				pregunta_9: pregunta9,
				pregunta_10: pregunta10,
				pregunta_11: pregunta11, 
				pregunta_12: pregunta12,
				pregunta_13: pregunta13,
				observaciones: observaciones

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