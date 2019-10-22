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

$contactos = array(
     array(
        "Giorno",
        "Giovanna",
        "678954321",
        "giorno.giovanna@gmail.com"
    ),
     array(
        "Jotaro",
        "Kujo",
        "675434343",
        "jotaro.kujo@gmail.com"
),
     array(
        "Josuke",
        "Higashikata",
        "67896454",
        "higashikata.josuke@gmail.com"
)
);

//13
function tablaContactos($array){
    $i=0;
    while ($i < count($array)){
        echo "<tr>";
        $x = 0;
        while($x < count($array[$i]))
        {
            echo "<td>" . $array[$i][$x] . "</td>";
            $x++;
        }
        echo "</tr>";
        $i++;
    }
}

function tablaContactos2($array){

    $i =0;

    do{
        echo "<tr>";
        $x=0;
        do{
            echo "<td>" . $array[$i][$x] . "</td>";
            $x++;
        }while($x < count($array[$i]));
        $i++;
        echo "</tr>";
    }while ($i < count($array));

}

$cochesListaArray = array("Honda","Volvo", "Audi", "Seat");
function cochesLista($array){
    $i = 0;
    do{

        echo "<li>$array[$i]</li>";
        $i++;
    }while($i < count($array));
}


?>

<table>
    <?php tablaContactos($contactos); ?>
</table>


<table>
    <?php tablaContactos2($contactos); ?>
</table>




<ul>
    <?php cochesLista($cochesListaArray); ?>
</ul>

</body>
</html>