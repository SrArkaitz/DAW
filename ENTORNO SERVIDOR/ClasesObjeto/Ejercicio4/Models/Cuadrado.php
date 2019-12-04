<?php
namespace Models;

class Cuadrado extends Poligono
{

    public function area() {
        echo "El area del cuadrado es: " . $this->getAnchura() * $this->getAltura();
    }
}