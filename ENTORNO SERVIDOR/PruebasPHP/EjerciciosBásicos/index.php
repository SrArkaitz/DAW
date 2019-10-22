<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php

$adios = "Hola mundo!";
echo "<p>$adios</p>";

$nombre = "Giorno";
$edad = 15;
echo "<p>Mi amigo " .$nombre ." tiene {$edad}</p>";
function esMayor($num1, $num2){

        return $num1 > $num2;

}
echo var_export(esMayor(4,3));
echo "<br/>";
$ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];

function getValor($array, $posicion){
    return $array[$posicion];
}
function setValor($array, $posicion, $valor){
    $array[$posicion] = $valor;
    return $array;
}

echo getValor(setValor($ciudades, 0, "Roma"), 0);






 ?>
</body>
</html>