<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php

$contactos = array(
    "giogio" => array(
        "nombre" => "Giorno",
        "apellido" => "Giovanna",
        "telefono" => "678954321",
        "Email" => "giorno.giovanna@gmail.com"
    ),
    "jojo" => array(
        "nombre" => "Jotaro",
        "apellido" => "Kujo",
        "telefono" => "675434343",
        "Email" => "jotaro.kujo@gmail.com"
),
    "josuke" => array(
        "nombre" => "Josuke",
        "apellido" => "Higashikata",
        "telefono" => "67896454",
        "Email" => "higashikata.josuke@gmail.com"
)
);


function tablaContactos($array){

    $i =0;
    $x = 0;
    while ($i < count($array)){
        echo "<tr></tr>";
        while($x < count($array[$i])){
            echo"<th> $array[$i][$x] </th>";
            $x++;
        }
        $i++;
    }

}
function tablaContactos2($array){

    $i =0;
    $x = 0;

    do{
        echo "<tr></tr>";
        do{
            echo"<th> $array[$i][$x] </th>";
            $x++;
        }while($x < count($array[$i]));
        $i++;
    }while ($i < count($array));

}

$cochessArray = array("Honda","Volvo", "Audi", "Seat");
function cochess($array){
    $i = 0;
    do{

        echo "<li>$array[$i]</li>";
        $i= $i+1;
    }while($i < $array);
}


?>


<ul>
    <?php cochess($cochessArray); ?>
</ul>

</body>
</html>