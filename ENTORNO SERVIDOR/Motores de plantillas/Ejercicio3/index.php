<?php
require 'vendor/autoload.php';
require 'Clases/Zapato.php';
use duncan3dc\Laravel\BladeInstance;
use Clases\Zapato;

$arrayZapatos = array();

$zapatos = new Zapato('Adidas', 'MARQUEE BOOST', "Zapatilla de volleyball", "140$");
array_push($arrayZapatos, $zapatos);
$zapatos2 = new Zapato('Adidas', 'MARQUEE BOOST', "Zapatilla de baloncesto", "140$");
array_push($arrayZapatos, $zapatos2);
$blade = new BladeInstance("views", "cache/views");
echo $blade->render("zapatos", [
     "zapatos" => $arrayZapatos
]);