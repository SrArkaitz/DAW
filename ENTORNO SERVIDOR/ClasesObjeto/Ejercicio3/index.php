<?php
include_once("Models2/Poligono.php");
include_once("Models2/Cuadrado.php");
include_once("Models2/Triangulo.php");
use Models2\Poligono;
use Models2\Cuadrado;
use Models2\Triangulo;


echo "<h1>Hola mundo</h1>";

$cuadrado = new Cuadrado();

$cuadrado->setColor("verde");
$cuadrado->setAltura(2);
$cuadrado->setAnchura(2);

$cuadrado->area();
echo "<br>";
$triangulo = new Triangulo();

$triangulo->setColor("Azul");
$triangulo->setAltura(2);
$triangulo->setAnchura(2);

$triangulo->area();