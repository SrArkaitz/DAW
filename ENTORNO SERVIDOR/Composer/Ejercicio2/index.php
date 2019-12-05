<?php
require 'vendor/autoload.php';
require_once 'clases/Paciente.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//$log = new Logger('name');
//$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

function nuevoPacienteEnfermo(){
    $paciente = new Paciente("Arkaitz", "Galisteo", 22);

    $paciente->enfermar();
}
function nuevoPacienteCurado(){
    $paciente = new Paciente("Arkaitz", "Galisteo", 22);

    $paciente->curar();
}
?>

<h1><button onclick="<?php nuevoPacienteEnfermo(); ?>">Me he enfermado</button></h1>
<h1><button onclick="<?php nuevoPacienteCurado(); ?>">Me he curado</button></h1>