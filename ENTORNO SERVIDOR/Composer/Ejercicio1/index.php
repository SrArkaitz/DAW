<?php
require 'vendor/autoload.php';
use SebastianBergmann\Timer\Timer;

function numeros(){
    Timer::start();

    for ($i= 0; $i<101; $i++){
        $num = rand(0,100);
        echo $num;
    }

    $time = Timer::stop();
    echo "<br>";

    print Timer::secondsToTimeString($time);
}


echo "<h1>Hola mundo</h1>";

numeros();