$(document).ready(function(){
	var root = "http://localhost/sistema_de_tesis/";
	//Log In
	$(".btnAdminLogIn").on("click", function(){

		var email = $(".textEmailLogin").val().trim();
			pass = $(".textPassLogin").val().trim();

		$.ajax({

			type: "POST",
			url: root + "recursos/php/admin_actions/login.php",

			data: {

				email: email,
				pass: pass

			},

			success: function(data){

				if(data == "true"){

					window.location.href = "http://localhost/sistema_de_tesis/";

				}else if(data == "false"){
					alert("Sus credenciales no coinciden, por favor intente de nuevo");
				}

			}

		});	

	});

});