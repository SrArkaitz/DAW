<html>
<head>
    <title>Hola Mundo PHP</title>
    <style>
        table, tr, td, th{
            border: solid;
        }
    </style>
</head>
<body>
<?php
//Ejercicio 3
function acertarNum($num, $stringArray){
    //$numerosAleatorios = array();
    $stringArray = explode(",", $stringArray);
    /*for ($i=0; $i<20; $i++){
        $numerosAleatorios[$i] = random_int(1,20);;
    }*/
    $cont=0;
    for ($i=0; $i<count($stringArray); $i++){
        if ((int)$stringArray[$i]==$num){
            $cont++;
        }

    }
    return $cont;
}

if (isset ($_GET["numero"])) {
    echo "<p> El número aparece " . acertarNum($_GET["numero"], "1,2,3,3,3,2,5,6,1,9,7,8,4,6,3,5,4,7,4,3") . " en el array.</p>";
}
?>


<form action="Ejercicio3.php" method="get">
    <label>Introduce tu número: </label>
    <input type="number" name="numero" min="1" max="10">
    <br/>
    <br/>
    <input type="submit" value="enviar">
</form>

</body>
</html>