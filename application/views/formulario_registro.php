<title>Be All In - Registro</title> <!-- Solamente cambiar el título para cada vista-->

</head>

<body>

<div class = "container">
	<div class = "row">
	
	<h1> Registro </h1>
	<br>
	<form class="form-horizontal" role="form" id="form_registro" name="form_registro" action="" method="POST" >    
     <div class="form-group"> <h3> ¿Qué representa? </h3> </div>
       <div class="form-group">
        <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="Empresa" checked="checked">Empresa</label>
        <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="Persona">Persona Natural</label>
       </div>  <br>
                <div class="form-group">
                    <label for="nombres">Nombre o Razón Social/ Nombre de Persona</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombre de la empresa/ Ingrese Nombre completo de la persona"> 
                 </div>  
                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico" >
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <label for="confirmar_contraseña">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña" placeholder="Confirme su contraseña">
                </div>
                <div class="form-group">
                    <input type="submit" id="registrar" class="btn btn-default" value="Registrar">
                </div>
           
           </form>   


	</div> <!-- Cierra el row -->
</div> <!-- Cierra el container -->

		
		