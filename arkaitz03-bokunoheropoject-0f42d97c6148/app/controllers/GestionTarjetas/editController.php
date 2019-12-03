<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/PersonajeDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Personaje.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editAction();
}

function editAction() {
    
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $avatar = $_POST["avatar"];
    $particularidad = $_POST["particularidad"];

    $persona = new Personaje();
    $persona->setIdPersonaje($id);
    $persona->setNombre($nombre);
    $persona->setAvatar($avatar);
    $persona->setParticularidad($particularidad);

    $personaDAO = new PersonajeDAO();
    $personaDAO->update($persona);

    header('Location: ../../../index.php');
}

?>

