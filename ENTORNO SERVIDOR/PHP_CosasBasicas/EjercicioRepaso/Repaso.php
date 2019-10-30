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
//Ejercicio 20

function suma100($number){
    $numMax = $number+100;
    $numMostrar = $number;
    while($number < $numMax){
        $number++;
        $numMostrar = $numMostrar + ($number);

    }
    echo $numMostrar;
}

//Ejercicio 21

function($number){
    for ($i=$number;$i>0; $i--){

    }
}

?>

<ul>
    <?php suma100(15); ?>
</ul>

</body>
</html>