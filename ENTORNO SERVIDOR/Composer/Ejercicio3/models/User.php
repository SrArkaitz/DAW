<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$this->log = new Logger('Paciente');
$this->log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
abstract class User
{
    protected $username, $nombre, $apellidos, $email, $password, $ultimoAcceso, $log;

    public function __construct($username, $nombre, $apellidos, $email, $password)
    {
        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
    }

    abstract function showAction();

    function login(){
        $this->log->error('El usuario ' . $this->username . ' se está loggeando');
    }

    function logout(){
        $this->log->error('El usuario ' . $this->username . ' se está haciendo logout');
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getUltimoAcceso()
    {
        return $this->ultimoAcceso;
    }

    public function setUltimoAcceso($ultimoAcceso): void
    {
        $this->ultimoAcceso = $ultimoAcceso;
    }


}