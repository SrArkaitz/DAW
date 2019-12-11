<?php
require 'vendor/autoload.php';
require 'Clases/Zapato.php';
use duncan3dc\Laravel\BladeInstance;
use Clases\Zapato;

$zapatos = new Zapato('Adidas', 'MARQUEE BOOST', "Zapatilla de volleyball", "140$");

$blade = new BladeInstance("views", "cache/views");

echo $blade->render("zapatos", [
     "zapatos" => $zapatos->getArray()
]);