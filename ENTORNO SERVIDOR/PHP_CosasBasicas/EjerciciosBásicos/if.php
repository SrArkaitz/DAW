<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php
$numeros = array(1,2,3,4,5);

function funcion1($array, $posicion, $num){
    if ($array[$posicion] == $num){
        return "El número de la posición ". $posicion . " es igual a " . $num;
    }else if ($array[$posicion] < $num){
        return "El número de la posición ". $posicion . " es menor a " . $num;
    }else{
        return "El número de la posición ". $posicion . " es mayor a " . $num;
    }
}
?>

<ul>
    <li><?php echo funcion1($numeros, 2, 3) ?></li>

</ul>
</body>
</html>