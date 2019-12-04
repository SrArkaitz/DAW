<?php
include_once("Models/Poligono.php");
include_once("Models/Cuadrado.php");
include_once("Models/Triangulo.php");

use Models\Cuadrado;


echo "<h1>Hola mundo</h1>";

$cuadrado = new Cuadrado();

$cuadrado->setColor("verde");
$cuadrado->setAltura(2);
$cuadrado->setAnchura(2);

$cuadrado->area();
echo "<br>";
$triangulo = new Models\Triangulo();

$triangulo->setColor("Azul");
$triangulo->setAltura(2);
$triangulo->setAnchura(2);

$triangulo->area();