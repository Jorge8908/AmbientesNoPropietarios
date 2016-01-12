$(document).ready(function(){
	$("form#usuarios").validate({
		rules:{
			nombre:{
				required:true,
				minlength:2
			},
			email:{
				email:true,
				required:true
			},
			telefono:{
				required:true,
				minlength:7
			},
			usuario:{
				required:true
			},
			contrasena:{
				required:true,
				minlength: 6
			},
			conf_contrasena:{
				required:true,
				equalTo:"#contrasena"
			} 
		},
		messages:{
			nombre:{
				required:'Ingresa tu nombre',
				minlength:$.validator.format("Al menos 2 caracteres requeridos")
			},
			email:{
				required:'Ingresa el email'
			},
			telefono:{
				required:'Ingrese el telefono',
				minlength:$.validator.format("Al menos 6 caracteres requeridos")
			},
			usuario:{
				required:'Ingrese un usuario valido'
			},
			contrasena:{
				required:'Ingrese la contraseña',
				minlength: $.validator.format("Se requiere al menos 6 caracteres")
			},
			conf_contrasena:{
				
				equalTo: $.validator.format("La contraseña no coincide")
			} 
		}
	})

	$("#btn-enviar").on('click', function(event) {
		event.preventDefault();
		if ($("form#usuarios").valid()) {

			$.ajax({
				url: 'rpc/procesar.php',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {
					nombre: $('#nombre').val(),
					email: $('#email').val(),
					telefono:$('#telefono').val(),
					direccion:$('#direccion').val(),
					usuario:$('#usuario').val(),
					contrasena:$('#contrasena').val(),
					conf_contrasena:$('#conf_contrasena').val(),
				},
			})
			.done(function(msg) {
				console.log("success");
				$('#success').html(msg);
			})
			.fail(function(jqXHR,textStatus,errorThrown) {
				console.log("fail:"+textStatus+""+errorThrown);
				$("#error").html(textStatus);

			})
			.always(function() {
				console.log("complete");
				$btn.button('reset');
			});
		};
	});
})