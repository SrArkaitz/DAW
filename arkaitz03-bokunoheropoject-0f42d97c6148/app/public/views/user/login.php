<?php
require_once '../../../controllers/User/loginController.php';
?>
<html lang="es">
    <head>
        <script src="https://apis.google.com/js/api:client.js"></script>
        <meta charset="utf-8">
        <meta name="google-signin-client_id"
              content="46020130094-kfdg5i9cq3gbf4tfkoa66johpffoc0hj.apps.googleusercontent.com">

        <title><?php echo "Boku no Hero Academia" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Bootstrap core CSS -->
        <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../../assets/css/mystyle.css" rel="stylesheet">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!--Boton de Google-->
        <meta name="google-signin-client_id"
              content="222040661385-39ep9i0i5eada6opq7ch2kuk96vu1hf7.apps.googleusercontent.com">
        <script>
            var googleUser = {};
            var startApp = function () {
                gapi.load('auth2', function () {
                    // Retrieve the singleton for the GoogleAuth library and set up the client.
                    auth2 = gapi.auth2.init({
                        client_id: '222040661385-39ep9i0i5eada6opq7ch2kuk96vu1hf7.apps.googleusercontent.com',
                        cookiepolicy: 'single_host_origin',
                        // Request scopes in addition to 'profile' and 'email'
                        //scope: 'additional_scope'
                    });
                    attachSignin(document.getElementById('customBtn'));
                });
            };

            function attachSignin(element) {
                console.log(element.id);
                auth2.attachClickHandler(element, {},
                        function (googleUser) {
                            $.redirect('http://localhost:8000/index.php', {'user': googleUser.getBasicProfile().getEmail()});
                            document.getElementById('name').innerText = "Signed in: " +
                                    googleUser.getBasicProfile().getName();
                        }, function (error) {
                    alert(JSON.stringify(error, undefined, 2));

                });
            }
        </script>
        <!--Final Boton de Google-->

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
                        <a class="nav-link" href="#">Personajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informacón adicional</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Entrar</a>
                        </li>

                    </ul>
                </form>
            </div>
        </nav>
        <div class="container">
            <form class="form-horizontal" role="form" method="POST" action="../../../controllers/User/loginController.php">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2>Introduzca detalles del acceso</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group has-danger">
                            <label class="sr-only" for="email">Email:</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"></div>
                                <!--
                                2.4.3 TODO Corrige el BUG
                                -->
                                <input type="text" name="user" id="email" class="form-control"
                                       placeholder="tunombre@gmail.com" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <i class="fa fa-close"></i> <?php //TODO Muestra el mensaje de error        ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="sr-only" for="pass">Contraseña:</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"></div>
                                <input type="password" name="password" class="form-control" id="password"
                                       placeholder="*******" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <?php // 2.4.5 TODO Muestra el mensaje de error  ?> 
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Acceder</button>

                        <div id="customBtn">
                            <a type="button" class="btn">Iniciar sesión con Google</a>
                        </div>
                        <script>startApp();</script>

                    </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdn.rawgit.com/mgalante/jquery.redirect/master/jquery.redirect.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>

    </body>
</html>
