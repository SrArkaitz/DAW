<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/PersonajeDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Personaje.php');


function indexAction() {
    $personaDAO = new PersonajeDAO();
    return $personaDAO->selectAll();
}

?>