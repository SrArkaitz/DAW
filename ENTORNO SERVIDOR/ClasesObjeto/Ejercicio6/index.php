<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dividir($num1, $num2){
    if ($num2 == 0){
        throw new Exception("El parámetro no puede ser 0");
    }else{
        echo $num1/$num2;
    }
}
try{
    dividir(2,0);
}catch (Exception $e){
    echo $e->getMessage();
}
try{
    dividir(6,2);
}catch (Exception $e){
    echo $e->getMessage();
}
