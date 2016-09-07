<title>Busca trabajadores, publica ofertas y empleate</title> <!-- Solamente cambiar el título para cada vista-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button> 
                <a class="navbar-brand" href="<?php echo base_url("index.php/beallin"); ?>">Be All In</a>
            </div>

            <form class="navbar-form navbar-left" role="search">
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                 </div>
            </form>     

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url("assets/img/home-bg.jpg"); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>Todos Dentro.Todos Conectados.</h2>
                        <a href="<?php echo base_url("index.php/beallin/registroJobber"); ?>" class="myButton">Registrarse como Jobber</a>
                        <a href="#" class="myButton">Registrarse como Adder</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

