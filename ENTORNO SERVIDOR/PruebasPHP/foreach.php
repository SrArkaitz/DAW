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
    "giogio" => array(
        "nombre" => "Giorno",
        "apellido" => "Giovanna",
        "telefono" => "678954321",
        "email" => "giorno.giovanna@gmail.com"
    ),
    "crusader" => array(
        "nombre" => "Jotaro",
        "apellido" => "Kujo",
        "telefono" => "675434343",
        "email" => "jotaro.kujo@gmail.com"
    ),
    "okuyasu" => array(
        "nombre" => "Josuke",
        "apellido" => "Higashikata",
        "telefono" => "67896454",
        "email" => "higashikata.josuke@gmail.com"
    )
);

function tablaForEach($array){

    foreach ($array as $key => $value){

        echo "<tr>";
       foreach ($array[$key] as $key2 => $value2){
            echo "<td> {$value2} </td>";
       }
        echo "</tr>";
    }
}


$stands = array("Killer Queen","Sex pistols", "The Fool", "Crazy diamond", "Hierophanto green", "Stray cart", "Za warudo");
function cochesLista($array)
{

    foreach ($array as $value) {
        echo "<li>{$value}</li>";
    }
}


$musica = array("Dio", "Queen", "Iggy pop", "ACDC", "Red hot chilli peppers", "King Crimson", "Oingo Boingo", "Santana");
function jojoMusica($array)
{
    foreach ($array as $value) {
        echo "<p>{$value}</p>";
    }
}


?>

<table>
    <?php tablaForEach($contactos); ?>
</table>

<ul>
    <?php cochesLista($stands); ?>
</ul>

<?php jojoMusica($musica); ?>


</body>
</html>