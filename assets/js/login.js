$(document).ready(function(){
	console.log("Iniciando Sitio");

	$("#form_login").validate({
		rules : {
			correo : {
				required : true
			},
			contraseña : {
				required : true			
			}		
	},
	submitHandler : function(form){
		form.submit();	
	},

	});


});