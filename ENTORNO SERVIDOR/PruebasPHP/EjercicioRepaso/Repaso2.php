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
//Ejercicio 21
include_once "funciones.php";


function suma100($number){

    for ($i=$number;$i>0; $i--){
        if (sonPrimos($i) == 1){
            echo "<li> {$i} </li>";
        }
    }
}

?>
<p>Primos?</p>
<ul>
    <?php suma100(23); ?>
</ul>

</body>
</html>