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


$estudiantes = array(
    "Polnareff" => array(3,5,4,6,2),
    "Jotaro" => array(9,9,8,10,9),
    "Josuke" => array(7,6,5,8,7),
    "Okuyasu" => array(2,4,5,5,3),
    "Narancia" => array(1,2,1,3,2),
    "Giorno" => array(6,7,7,6,7)
);
function notasEstudiantes($array){

    foreach ($array as $key =>$value){
        $notamedia = 0;
        foreach ($array[$key] as $value2){
            $notamedia += $value2;
        }
        $notamedia = $notamedia/count($array[$key]);
        echo "<li>La nota media de {$key} es de: {$notamedia} </li>";
    }
}



?>

<ul>
    <?php notasEstudiantes($estudiantes); ?>
</ul>

</body>
</html>