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
//Ejercicio 4
require_once "referencias.php";
tablaProductos($productos);
function tablaProductos($array){
    echo "<form action='resultado.php' method='get'>";
        echo "<table>
                <tr>
                    <!--<th>Código</th>-->
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>";
            foreach ($array as $key => $value){

                echo "<tr>";
                //echo "<td>$key</td>";
                foreach ($array[$key] as $valor){
                    echo "<td>$valor</td>";
                }
                echo"<td><input type='number' name='{$key}' max='10' min='0' step='1' value='0'></td>";
                echo "</tr>";
            }
        echo "</table>";
            echo "<br/><br/><input type='submit' value='Comprar'>";
            echo "</form>";
}


?>


</body>
</html>