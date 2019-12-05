<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class Paciente
{
    private $nombre, $apellidos, $edad;
    private $log;

    public function __construct($nombre, $apellidos, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->log = new Logger('Paciente');
        $this->log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
    }

    public function enfermar(){
        $this->log->error('Me he enfermado');
    }

    public function curar(){
        $this->log->warning('Me he curado');
    }
}