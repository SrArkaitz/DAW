<?php
function comprar($productos){
    $cantidadTotal = 0;
    foreach ($productos as $key => $producto){

        if ($_GET[$key] !=0){
            $cantidadTotal += $_GET[$key] * (int)$productos[$key]["precio"];
        }
    }
    echo "<p>El precio total será de {$cantidadTotal}</p>";
}

$productos = array(
    "12abc" => array(
        "nombre" => "Switch",
        "descripcion" => "Una videoconsola producida por nintendo",
        "precio" => 300,
    ),
    "21bca" => array(
        "nombre" => "Boligrafo",
        "descripcion" => "Boligrafo azul de la marca BIC",
        "precio" => 2,
    ),
    "11aaa" => array(
        "nombre" => "Esclavo",
        "descripcion" => "No sabe hacer mucho pero te ayudara en las tareas de casa",
        "precio" => 102,
    ),
    "22bbb" => array(
        "nombre" => "Botella de agua",
        "descripcion" => "Una botella de agua que ayuda en las horas mas duras de clase a mantenerte hidratado",
        "precio" => 2,
    )
);

?>
