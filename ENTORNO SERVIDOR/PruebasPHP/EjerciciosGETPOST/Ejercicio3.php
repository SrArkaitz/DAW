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


?>

<p><strong>Calculadora:</strong></p>

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