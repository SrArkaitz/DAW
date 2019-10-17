<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php
$diccionario = array(
    "SrArkaitz" => array(
        "nombre" => "Arkaitz",
        "apellido" => "Galisteo",
        "email" => "arkaitz@gmail.com"
    ),
    "jojo" => array(
        "nombre" => "Josuke",
        "apellido" => "Higashikata",
        "email" => "jojo@gmail.comm"
),
    "giorno.giovanna" => array(
        "nombre" => "Giorno",
        "apellido" => "Giovanna",
        "email" => "dream@gmail.com"
    )
);


function getDatos($array, $user, $valor){
    return $array[$user][$valor];
}


?>

<ul>
    <li><?php echo getDatos($diccionario, "jojo", "email") ?></li>
    <li><?php echo getDatos($diccionario, "SrArkaitz", "email") ?></li>
    <li><?php echo getDatos($diccionario, "giorno.giovanna", "email") ?></li>
</ul>
</body>
</html>