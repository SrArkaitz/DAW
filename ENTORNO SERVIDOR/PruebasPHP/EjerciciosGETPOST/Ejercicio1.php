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
//Ejercicio 1

function elegir($num, $tipo){
    if ($tipo == "Celsius"){
        return celToFaren($num);
    }else{
        return farenToCel($num);
    }
}
function farenToCel($num){
    $respuesta = ($num-32)/1.8;
    return "Los grados farenheit ({$_GET["temperatura"]}) convertidos en Celsius son: {$respuesta}";
}
function celToFaren($num){
    $respuesta = $num * 1.8 + 32;
    return "Los grados Celsius ({$_GET["temperatura"]}) convertidos en Farenheit son: {$respuesta}";
}

if (isset($_GET["temperatura"])) {
    echo "<p><strong>" .  elegir($_GET["temperatura"], $_GET["grados"]) . "</strong></p>";
}

?>
<form action="Ejercicio1.php" method="get">
    <label>Introduce la temperatura</label>
    <input type="text" name="temperatura">
    <br/>
    <br/>
    <select name="grados">
        <option value="Celsius">Celsius</option>
        <option value="Farenheit">Farenheit</option>
    </select>
    <br/>
    <br/>
    <input type="submit" value="enviar">
</form>

</body>
</html>