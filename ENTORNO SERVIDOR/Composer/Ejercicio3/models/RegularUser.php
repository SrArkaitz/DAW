<?php
namespace models;
class RegularUser extends User
{
    private $twitter, $instagram;

    public function __construct($username, $nombre, $apellidos, $email, $password, $instagram, $twitter)
    {
        parent::__construct($username, $nombre, $apellidos, $email, $password);
        $this->instagram = $instagram;
        $this->twitter = $twitter;
        parent::setUltimoAcceso();
        parent::login();
    }

    function showAction()
    {
        $this->log->warning('El usuario regular ' . $this->username . ' está llamando a la función showAction');
    }


    function editarPerfil($twitter, $instagram){
        $this->twitter = $twitter;
        $this->instagram = $instagram;
    }
}