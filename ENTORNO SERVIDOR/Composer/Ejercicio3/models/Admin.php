<?php
namespace models;
class Admin extends User
{
    private $adminLevel;

    public function __construct($username, $nombre, $apellidos, $email, $password, $adminLevel)
    {
        parent::__construct($username, $nombre, $apellidos, $email, $password);
        $this->adminLevel = $adminLevel;
        parent::setUltimoAcceso();
        parent::login();
    }

    function showAction()
    {
        $this->log->warning('El usuario administrador ' . $this->username . ' está llamando a la función showAction');
    }

    function desactivarUsuarios($user){
        //Desactivar usuario
    }
}