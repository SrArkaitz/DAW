<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php

$paises = array("Islandia", "Francia", "Italia", "Japón", "Egipto", "Reino Ubido");

function verPais($paises ,$pais){
for ($i = 0; $i < count($paises); $i++){
    if ($paises[$i] == $pais){
        return $i;
    }
}
return -1;
}


?>
<h1>La posición es: <?php echo  verPais($paises, "Italia")?></h1>

</body>
</html>