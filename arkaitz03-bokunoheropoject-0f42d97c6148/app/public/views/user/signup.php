<?php
include '../../../controllers/User/signupController.php';
?>
<html lang="es">
    <head>
        <meta charset="utf-8">

        <title><?php echo "Boku no Hero Academia" ?></title>
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
            <form class="form-horizontal" role="form" method="POST" action="signup.php">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2>Por favor registrate</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group has-danger">
                            <label class="sr-only" for="email">Email:</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                <input type="text" name="email" class="form-control" id="email"
                                       placeholder="tunombre@gmail.com" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <i class="fa fa-close"></i> <?php // 2.3.3 TODO: Muestra mensaje de error   ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="sr-only" for="password">Contraseña:</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                <input type="password" name="password" class="form-control" id="password"
                                       placeholder="*******" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <?php // 2.3.4 TODO: Muestra mensaje de error      } ?> 
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Acceder</button>
                    </div>
                </div>
            </form>
        </div>
