<?php


class User{

    private $userid;
    private $nombre;
    private $email;
    private $password;
    private $apellido;
    private $descripcion;

//Getters and setters of User Class.

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    function getApellido() {
        return $this->apellido;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }



}

?>
