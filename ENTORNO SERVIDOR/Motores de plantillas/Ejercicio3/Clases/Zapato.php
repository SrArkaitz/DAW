<?php

namespace Clases;
class Zapato
{

    private $marca, $modelo, $tipo, $precio;

    public function __construct($marca, $modelo, $tipo, $precio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->precio = $precio;
    }

    public function getArray(){
        return array(
          'Marca' => $this->marca,
          'Modelo' => $this->modelo,
           'Tipo' => $this->tipo,
            'Precio' => $this->precio
        );
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

}