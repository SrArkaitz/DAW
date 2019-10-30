<?php
//Ejercicio 4
require_once "referencias.php";
?>
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
tablaProductos($productos);
function tablaProductos($array){
    echo "<form action='resultado.php' method='get'>";
        echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>";
            foreach ($array as $key => $value){
                crearFilaProducto($key, $value);
            }
        echo "</table>";
            echo "<br/><br/><input type='submit' value='Comprar'>";
            echo "</form>";
}
function crearFilaProducto($id, $producto) {
    echo "<tr>
            <td>{$producto['nombre']}</td>
            <td>{$producto['descripcion']}</td>
            <td>{$producto['precio']}</td>
            <td><input type='number' name='{$id}' value='0' min='0' step='1' required></td>
        </tr>";
}
?>
</body>
</html>