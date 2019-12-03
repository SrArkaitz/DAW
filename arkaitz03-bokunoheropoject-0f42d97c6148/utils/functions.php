<?php
$mysqli = new mysqli('127.0.0.1', 'id3787001_bokunohero','bokunohero', 'id3787001_bokunohero');
if ($mysqli->connect_errno) {
 // La conexión falló.
// Mostramos mensaje al usuario
 echo "Lo sentimos, este sitio web está experimentando problemas.";
// No se debe revelar información delicada
// de todas formas, la información de errores se podría registrar
echo "Error: Fallo al conectarse a MySQL debido a: \n";
echo "Errno: " . $mysqli->connect_errno . "\n";
echo "Error: " . $mysqli->connect_error . "\n";
 // salimos
 exit;
}

function mysqliQuery($sql){
    global $mysqli;
    $result = $mysqli->query($sql);
    return $result;
    
}


?>

