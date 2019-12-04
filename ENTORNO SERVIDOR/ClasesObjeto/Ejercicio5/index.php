<?php
include_once("Clases/Persona.php");

echo "<h1>Hola mundo</h1>";

echo Persona::cuantasPersonass();

$persona = new Persona();

$persona2 = new Persona();

$persona3 = new Persona();

$persona4 = new Persona();

$persona5 = new Persona();

$persona5->cuantasPersonas();

echo Persona::cuantasPersonass();