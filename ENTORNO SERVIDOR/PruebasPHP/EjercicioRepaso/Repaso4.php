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
//Ejercicio 23
$estudiantes = array(
    "Jotaro" => array(9,10),
    "Josuke" => array(7,6),
    "Okuyasu" => array(2,4),
    "Giorno" => array(6,7),
    "Narancia" => array(1,2),
    "Polnareff" => array(4,6)
);

function tablaExamenes($array){

    foreach ($array as $key => $value){

        echo "<tr>";
        $media = 0;
        foreach ($array[$key] as $valor){
            $media+=$valor;
        }
        $array[$key][count($array[$key])] = $media/count($array[$key]);

        echo "<td>$key</td>";
        foreach ($array[$key] as $valor){
            if ($valor < 5){
                echo "<td style='border:solid red'>$valor</td>";
            }else{
                echo "<td>$valor</td>";
            }

        }

        echo "</tr>";

    }

}

?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Nota examen 1</th>
        <th>Nota examen 2</th>
        <th>Nota media</th>
    </tr>
    <?php tablaExamenes($estudiantes)?>
</table>

</body>
</html>