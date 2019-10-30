<html>
<head>
    <title>Hola Mundo PHP</title>
    <style>
        table, tr, td{
            border: solid;
        }
    </style>
</head>
<body>
<?php
//Ejercicio 22
function aleatorio(){
    $numerosAleatorios = array();
    $max=1;
    $min=999;
    for ($i=0; $i<20; $i++){
        $numerosAleatorios[$i] = random_int(1,999);
    }
    foreach ($numerosAleatorios as $valor) {
        if ($valor>$max)
            $max=$valor;
        if ($valor<$min)
            $min=$valor;
    }
    return "El número más grande generado es {$max} y el más pequeño es {$min}";
}

?>
<p><?php echo aleatorio() ?></p>

</body>
</html>