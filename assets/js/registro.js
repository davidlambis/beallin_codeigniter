$(document).ready(function(){
	$("#form").validate({
		rules : {
			nombres : {
				required: true,
				nombres : true,
				minlength: 4,
				maxlength : 30
			},
			nombreUsuario : {
				required : true,
				minlength : 4,
				maxlength : 15,
				nombreUsuario : true
			},
			correo : {
				required : true,
				email : true,
				remote : {
					url : "http://localhost/codeigniter/index.php/beallin/verificar_correo",
					type : "post",
					data : {
						correo: function(){ 
							return $("#correo").val(); 
						}
					}
				}
			},
			contraseña : {
				required : true,
				contraseña : true,
				minlength : 6,
				maxlength : 20
			},
			confirmar_contraseña : {
				required : true,
				contraseña: true,
				minlength : 6,
				maxlength : 20,
				equalTo : contraseña
			}
		},
		messages: {
			correo: {
			remote: 'El correo ya está siendo utilizado'
			}
		},	
		submitHandler : function(form){
			form.submit();	
		},
		highlight : function(element){
			$(element).parent().removeClass('has-success').addClass('has-error');
		},
		success : function(element){
			$(element).parent().removeClass('has-error').addClass('has-success');
		}
	});

	jQuery.validator.addMethod("nombres", function(value, element) {
  	return this.optional( element ) || /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ\s]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo');

	jQuery.validator.addMethod("nombreUsuario", function(value, element) {
	return this.optional( element ) || /^[a-zA-Z0-9]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo'); 
	/*Confirmar del lado del server que sea un usuario único */

	/* La validación de correo es más importante por el lado del server, que identifique que realmente ese correo existe. */

	jQuery.validator.addMethod("contraseña", function(value, element) {
	return this.optional( element ) || /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ0-9.!#$%&'*+\/=?^_`{|}~-]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo'); 

});