$(document).ready(function(){

	$("#form_login").validate({
		rules : {
			correo : {
				required : true,
				remote: {
					url: "http://localhost/codeignitervacio/index.php/beallin/verificar_correo_login",
					type: "post",
					data: {
						correo: function(){ 
							return $("#correo").val(); 
						}
					}
				}		
			},
			contraseña : {
				required : true
			}		
	},
	messages: {
			correo: {
				remote: 'Éste correo no está registrado.'
			}
	},		
	submitHandler : function(form){
		form.submit();	
	},

	});


});