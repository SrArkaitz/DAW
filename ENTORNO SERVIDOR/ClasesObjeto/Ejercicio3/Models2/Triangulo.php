<?php


namespace Models2;


class Triangulo extends Poligono
{
    public function area() {
        echo $this->getAnchura() * $this->getAltura()/2;
    }
}