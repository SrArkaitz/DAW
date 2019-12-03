<?php
include '../../../controllers/User/editProfileController.php';

?>

<div class="jumbotron jumbotron-fluid">
    <div id="bienvenida" class="container">

        <html lang="es">
            <head>
                <meta charset="utf-8">

                <title>Boku no Hero Academia</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <!-- Bootstrap core CSS -->
                <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
                <link href="../../../../assets/css/mystyle.css" rel="stylesheet">
            </head>
            <body>
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="../../../../index.php"> <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Boku_no_Hero_Academia_Logo.png" class="imgMini" alt="" ></a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                            <li class="nav-item">

                                <a type="button" class="btn btn-info " href="../offer/insert.php">Crear personaje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="editProfile.php">Editar Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Salir</a>
                            </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../../paginas/Personajes.html">Personajes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../../paginas/Galeria.html">Galeria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../../paginas/Informacion.html">Informacón adicional</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </nav>
                <br/>
                <h1>BOKU NO HERO ACADEMIA</h1>
                <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div id="bienvenida" class="container">

            <div class="container">
                <div class="row">
                    <div class=" col-3"></div>
                    <div class=" col-6">



                        <div class="card ">
                            <div class="card-header">
                                <h1 class="card-title">Editar perfil</h1>
                            </div>
                            <div class="card-body">




                                <form class="form-horizontal" method="POST" action="editProfile.php">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="textinput">Nombre</label>  
                                            <div class="col-md-6">
                                                <input id="textinput" name="nombre" type="text" placeholder="Tu nombre" class="form-control input-md" required="" value=<?php
                                                if ($nombre != NULL) {
                                                    echo $nombre;
                                                } else {
                                                    echo "";
                                                }
                                                ?>>

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="apellido">Apellido</label>  
                                            <div class="col-md-6">
                                                <input id="apellido" name="apellido" type="text" placeholder="Tu apellido" class="form-control input-md" required="" value=<?php
                                                if ($apellido != NULL) {
                                                    echo $apellido;
                                                } else {
                                                    echo "";
                                                }
                                                ?>>

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="email">Email</label>  
                                            <div class="col-md-6">
                                                <input id="email" name="email" type="text" class="form-control input-md" value=<?php
                                                if (isset($usuario))
                                                    echo $usuario;
                                                ?> >

                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="descripcion">Descripción</label>
                                            <div class="col-md-6">                     
                                                <textarea class="form-control" id="descripcion" name="descripcion" required=""><?php
                                                    if ($descripcion != NULL) {
                                                        echo $descripcion;
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-6 control-label" for="cambiar"></label>
                                            <div class="col-md-6">
                                                <button id="cambiar" name="cambiar" class="btn btn-primary">Cambiar</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>                    

                            </div>
                        </div>

                    </div>
                    <div class=" col-3"></div>
                </div>
            </div>

            </body>
            </html>

        </div>
    </div>




