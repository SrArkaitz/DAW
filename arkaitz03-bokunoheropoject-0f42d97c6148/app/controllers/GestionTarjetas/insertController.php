<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/PersonajeDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Personaje.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Llamo a la función en cuanto se redirija el action a esta página
    createAction();
}

function createAction() {
    $nombre = ValidationsRules::test_input($_POST["nombre"]);
    $particularidad = ValidationsRules::test_input($_POST["particularidad"]);
    $avatar = ValidationsRules::test_input($_POST["avatar"]);
    // TODOD hacer uso de los valores validados 
    $personaje = new Personaje();
    $personaje->setNombre($_POST["nombre"]);
    $personaje->setParticularidad($_POST["particularidad"]);
    $personaje->setAvatar($_POST["avatar"]);

    //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
    $personajeDAO = new PersonajeDAO();
    $personajeDAO->insert($personaje);
    
    header('Location: ../../../index.php');
    
}
?>

