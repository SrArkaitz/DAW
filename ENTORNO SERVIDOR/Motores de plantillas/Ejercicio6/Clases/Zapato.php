<?php

namespace Clases;
class Zapato
{

    public $marca, $modelo, $tipo, $precio, $id;
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
    public function getArray(){
        return array(
          'Marca' => $this->marca,
          'Modelo' => $this->modelo,
           'Tipo' => $this->tipo,
            'Precio' => $this->precio
        );
    }

}