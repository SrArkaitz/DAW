<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/PersonajeDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Personaje.php');

$personajeDAO = new PersonajeDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
//Llamo que hace la edición contra BD
    deleteAction();
}

function deleteAction() {
    $id = $_GET["id"];

    $personajeDAO = new PersonajeDAO();
    $personajeDAO->delete($id);

    header('Location: ../../../index.php');
}
?>

