<?php


namespace Models2;


class Triangulo extends Poligono
{
    public function area() {
        echo "El area del triángulo es: " . $this->getAnchura() * $this->getAltura()/2;
    }
}