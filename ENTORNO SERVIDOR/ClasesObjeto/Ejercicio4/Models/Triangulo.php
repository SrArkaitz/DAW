<?php
namespace Models;

class Triangulo extends Poligono
{
    public function area() {
        echo "El area del triángulo es: " . $this->getAnchura() * $this->getAltura()/2;
    }
}