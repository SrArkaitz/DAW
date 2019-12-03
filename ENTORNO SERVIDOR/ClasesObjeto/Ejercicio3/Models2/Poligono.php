<?php
namespace Models2;

class Poligono
{
    private $color;
    private $altura;
    private $anchura;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function getAnchura()
    {
        return $this->anchura;
    }

    public function setAnchura($anchura): void
    {
        $this->anchura = $anchura;
    }



}