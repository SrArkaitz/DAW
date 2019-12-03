<?php

require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/User.php');
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');

SessionUtils::startSessionIfNotStarted();
$usuario = SessionUtils::getSession();
$nombre = $apellido = $email = $descripcion = "";
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['descripcion'])) {
    editAction();
}

function editAction() {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $descripcion = $_POST['descripcion'];

    $user = new User();
    $user->setNombre($nombre);
    $user->setApellido($apellido);
    $user->setEmail($email);
    $user->setDescripcion($descripcion);
    
    $userDAO = new UserDAO();
    $userDAO->update($user);
}

?>
