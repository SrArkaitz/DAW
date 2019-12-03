<?php
include_once ("Publicacion.php");
echo "<h1>Hola mundo</h1>";

//$pub1 = new Publicacion("Giorno", "2001", "Gara", "Vivencias de un capo", "Hola Venecia");
$pub1 = new Publicacion();
$pub1->setTexto("Hola mundo");

$pub1->leer();

$pub1->escribir("Me llamo Giorno Giovanna y tengo un sueño");
echo "<br>";
$pub1->leer();