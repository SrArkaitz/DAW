<?php
require 'vendor/autoload.php' ;
use duncan3dc\Laravel\BladeInstance;
use duncan3dc\Laravel\Blade;


/*echo Blade::render("hello", [
    "name" => "Arkaitz"
]);*/

$blade = new BladeInstance("views", "cache/views");
if (isset($_GET['nombre'])){
    echo $blade->render("hello", [
        "name" => $_GET['nombre']
    ]);
}

?>
<form action="" method="get">
    <p>Introduce tu nombre</p>
    <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>
