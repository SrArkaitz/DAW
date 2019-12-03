<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../controllers/User/indexController.php');

//Recupero de la BD todas las criaturas a través del controlador
$personajes = indexAction();
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
                <link href="../../../assets/css/mystyle.css" rel="stylesheet">
            </head>
            <body>
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"> <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Boku_no_Hero_Academia_Logo.png" class="imgMini" alt="" ></a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                            <li class="nav-item">

                                <a type="button" class="btn btn-info " href="offer/insert.php">Crear personaje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="candidate/editProfile.php">Editar Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="candidate/contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="candidate/logout.php">Salir</a>
                            </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../paginas/Personajes.html">Personajes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../paginas/Galeria.html">Galeria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../paginas/Informacion.html">Informacón adicional</a>
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
</div>
<div id="bienvenida" class="img-fluid" alt="Responsive image"> 
    <div class="row">
        <div class="offset-md-3 col-md-6">

            <img src="http://i0.kym-cdn.com/photos/images/original/001/219/188/21b.jpg" class="imgGrande" alt="" title=""/>
            <p class="lead">El 80% de la población mundial ha desarrollado superpoderes. Como consecuencia, han surgido tantos superhéroes como supervillanos. Izuku Midoriya es parte de ese 20% sin ningún poder sobrenatural. Sin embargo, su mayor deseo es poder estudiar en la U.A. una academia para superhéroes y convertirse en un héroe como su ídolo All Might.</p>   
        </div>
    </div>                
</div>
<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive img-rounded imgGrande" src="http://i0.kym-cdn.com/entries/icons/original/000/017/282/wp1874080.png"  alt="">
        </div>
        <!-- /.col-md-8 -->
        <div class="col-md-4">
            <h1>Boku no Hero Academia</h1>
            <p>El maratón de la serie comienza ya!</p>
            <a class="btn btn-primary btn-lg" href="http://animemovil.com/?s=boku+no+hero">Mirala ahora!</a> 
        </div>
    </div>
</div>
<!-- /.row -->

<hr>



<!-- Content Row -->
<?php for ($i = 0; $i < sizeof($personajes); $i += 3) { ?>
    <!--   <div class="card-group">   -->
    <div class="row"> 
        <?php
        for ($j = $i; $j < ($i + 3); $j++) {
            if (isset($personajes[$j])) {

                echo $personajes[$j]->personaje2HTML();
            }
        }
        ?>
    </div> 
    <!-- /.row -->
<?php } ?>

<!-- Footer -->
<br/>
<br/>
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; A. F. 2017</p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="../../../assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../../assets/js/bootstrap.min.js"></script>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Kōhei Horikoshi</span>
    </div>
</footer>
</body> 
</html>
