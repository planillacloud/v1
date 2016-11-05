$(document).ready(function () {
	//Inicio de validacion del formulario de registro de empleado
	$('#empleado_form').validate({
		rules: {
			nombre: {
				required : true,
			},
			apellido: {
				required : true,
			},
			cedula: {
				required : true,
			},
			fecha_nacimiento: {
				required : true,
			},
			nacionalidad: {
				required : true,
			},
			correo: {
				required : true,
				email: true
			},
			tel_local: {
				required : true,
			},
			tel_personal: {
				required : true,
			},
			cargo: {
				required : true,
			},
			salario: {
				required : true,
				number: true
			},
		},
		messages: {
			nombre: {
				required : "Debe llenar este campo",
			},
			apellido: {
				required : "Debe llenar este campo",
			},
			cedula: {
				required : "Debe llenar este campo",
			},
			fecha_nacimiento: {
				required : "Debe llenar este campo",
			},
			nacionalidad: {
				required : "Debe llenar este campo",
			},
			correo: {
				required : "Debe llenar este campo",
				email : "Introduzca un correo valido",
			},
			tel_local: {
				required : "Debe llenar este campo",
			},
			tel_personal: {
				required : "Debe llenar este campo",
			},
			cargo: {
				required : "Debe llenar este campo",
			},
			salario: {
				required : "Debe llenar este campo",
				number : "Solo se permiten numeros",
			},
		},
		submitHandler: function (form) {
			$.ajax({
				type: $(form).attr('method'),
				url: $(form).attr('action'),
				data: $(form).serialize(),
				// dataType : 'json'
			})
			.done(function (response ,responseText, textStatus, jQxhr) {
				// alert(responseText);
				//console.log(textStatus);
				//console.log(response);
				if(responseText == 'success') {
					alert = "<div class='alert alert-success text-center'><button class='close' data-close='alert'></button><strong>"+response+"</strong> ha sido registrado</div>";
					$('#respuestas').html(alert);
					$(form).trigger('reset'); // Se resetea el formulario
				}
				else{
					alert = "<div class='alert alert-danger text-center'><button class='close' data-close='alert'></button>Error al registrar - "+response+"</div>";
					$('#respuestas').html(alert);
				}
			});
			return false; // necesario para bloquear el submit normal
		}
	});
	// FIN de la validacion del registro de empleado
});