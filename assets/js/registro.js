$(document).ready(function(){
	console.log("Iniciando Sitio");

	$("#form_registro").validate({
		rules : {
			tipo : {
				required : true
			},
			nombres : {
				required: true,
				nombres : true,
				minlength: 4,
				maxlength : 50
			},
			correo : {
				required : true,
				email : true,
				remote: {
					url: "http://localhost/codeignitervacio/index.php/beallin/verificar_correo",
					type: "post",
					data: {
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
				remote: 'Éste correo ya está siendo utilizado'
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

	jQuery.validator.addMethod("contraseña", function(value, element) {
	return this.optional( element ) || /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ0-9.!#$%&'*+\/=?^_`{|}~-]+$/.test( value );
	}, 'Información no válida. Ingrésala de nuevo'); 

});