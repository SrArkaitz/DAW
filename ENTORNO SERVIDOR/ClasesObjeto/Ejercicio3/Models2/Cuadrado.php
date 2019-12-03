<?php


namespace Models2;


class Cuadrado extends Poligono
{

    public function area() {
        echo $this->getAnchura() * $this->getAltura();
    }

}