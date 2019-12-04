<?php
namespace Models;

abstract class Poligono
{
    protected $color;
    protected $altura;
    protected $anchura;

    public function getColor(){
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

    abstract public function area();
}