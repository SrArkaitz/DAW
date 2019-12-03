<?php
include_once '../../../../PHPMailer/enviarCorreo.php';

if (isset($_POST['email'])) {
    $nombre = $_POST['name'];
    $apellido = $_POST['surname'];
    $email = $_POST['email'];
    $tuEmail = $_POST['youremail'];
    $contraseña = $_POST['password'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];
    $respuesta = enviarGmail($nombre, $apellido, $email, $tuEmail, $contraseña, $asunto, $mensaje);
}
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
    <div class="container">
        <div class="row">

            <div class=" col-16">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.288373895629!2d-1.6622917848651493!3d42.82452197915842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5092855cefdac7%3A0xab7c62765f5209e2!2sCuatrovientos+Centro+Integrado!5e0!3m2!1ses!2ses!4v1510136340175" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <iframe width="600" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/streetview?location=42.8245,-1.6601&key=AIzaSyD_-M3q_YN1OrS8ZVWBzkVyiXO2AyW0PAQ" allowfullscreen></iframe>
                <form class="form-horizontal" method="POST" action="contacto.php">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name"></label>  
                            <div class="col-md-4">
                                <p>Nombre</p>
                                <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="surname"></label>  
                            <div class="col-md-4">
                                <p>Apellido</p>
                                <input id="surname" name="surname" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email"></label>  
                            <div class="col-md-4">
                                <p>Email</p>
                                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email"></label>  
                            <div class="col-md-4">
                                <p>Tu email</p>
                                <input id="youremail" name="youremail" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="subject"></label>  
                            <div class="col-md-4">
                                <p>Contraseña</p>
                                <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="subject"></label>  
                            <div class="col-md-4">
                                <p>Asunto</p>
                                <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md" required="">

                            </div>
                        </div>



                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="message"></label>
                            <div class="col-md-4">  
                                <p>Mensaje</p>
                                <textarea class="form-control" id="message" name="message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="enviar"></label>
                            <div class="col-md-4">
                                <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>