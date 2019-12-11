<?php

namespace Clases;
class Zapato
{

    private $marca, $modelo, $tipo, $precio, $id;
    private static $cantidad = 0;
    public function __construct($marca, $modelo, $tipo, $precio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->id = self::$cantidad;
        self::$cantidad++;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getId(): int
    {
        return $this->id;
    }
}