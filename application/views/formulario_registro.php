<title>Be All In - Registro</title> <!-- Solamente cambiar el título para cada vista-->

</head>

<body>

<div class = "container">
	<div class = "row">
	
	<h1> Registro </h1>
	<br>
	<form class="form-horizontal" role="form" id="form_registro" name="form_registro" action="" method="POST" >    
       <div class="form-group">
        <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="Empresa">Empresa</label>
        <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="Persona">Persona</label>
       </div>  
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingresa tus nombres y apellidos"> 
                 </div>  
                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" >
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group">
                    <label for="confirmar_contraseña">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña" placeholder="Confirma tu contraseña">
                </div>
                <div class="form-group">
                    <input type="submit" id="registrar" class="btn btn-default" value="Registrar">
                </div>
           
           </form>   


	</div> <!-- Cierra el row -->
</div> <!-- Cierra el container -->

		
		