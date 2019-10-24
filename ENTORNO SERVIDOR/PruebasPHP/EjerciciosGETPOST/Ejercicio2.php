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
//Ejercicio 2

function suma($num1, $num2){

    return (int)$num1 + (int)$num2;
}
function resta($num1, $num2){
    return (int)$num1 - (int)$num2;
}
function multiplicar($num1, $num2){
    return (int)$num1 * (int)$num2;
}
function dividir($num1, $num2){
    if ((int)$num2 == 0)
        return "Error, no se puede dividir entre 0";
    return (int)$num1 / (int)$num2;
}

function elegir($operacion, $num1, $num2){
    if ($operacion == "sumar")
        return suma($num1,$num2);
    if ($operacion == "restar")
        return resta($num1,$num2);
    if ($operacion == "multiplicar")
        return multiplicar($num1,$num2);
    if ($operacion == "dividir")
        return dividir($num1,$num2);
}

?>

<p><strong>Calculadora:</strong></p>

<?php
if (isset ($_GET["primerNumero"]) && isset($_GET["segundoNumero"])) {
    echo "<p> Último resultado: " .  elegir($_GET["operacion"], $_GET["primerNumero"], $_GET["segundoNumero"]) . "</p>";
}
?>
<form action="Ejercicio2.php" method="get">
    <label>Primer número</label>
    <input type="text" name="primerNumero">
    <br/>
    <br/>
    <label>Segundo número</label>
    <input type="text" name="segundoNumero">
    <br/>
    <br/>
    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <br/>
    <br/>
    <input type="submit" value="enviar">
</form>

</body>
</html>