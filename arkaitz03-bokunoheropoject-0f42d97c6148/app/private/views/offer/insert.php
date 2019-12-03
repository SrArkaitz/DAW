<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gestión de Personaje</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../../../assets/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-light navbar-fixed-top navbar-toggleable-md bg-faded" role="navigation" style="background-color: #93F590;">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <a class="navbar-brand" href="../../../../index.php"> <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Boku_no_Hero_Academia_Logo.png" width="120px" height="65px" alt="" ></a>
              </nav>
        <!-- Page Content -->
         <div class="container">
             <form class="form-horizontal" method="post" action="../../../controllers/GestionTarjetas/insertController.php">
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" id="title" placeholder="Nombre" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="abilities" class="col-sm-2 control-label">Particularidad</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="abilities" name="particularidad" placeholder="Particularidad" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="url" class="form-control" id="cover" name="avatar" placeholder="Avatar" value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Insertar</button>
                    </div>
                </div>
            </form>

            <!-- Footer -->
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
        <script src="../../../../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../../../assets/js/bootstrap.min.js"></script>
    </body>

</html>


