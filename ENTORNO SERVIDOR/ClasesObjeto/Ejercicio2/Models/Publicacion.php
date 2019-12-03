<?php
namespace Models;

class Publicacion
{
    private $autores;
    private $año;
    private $editorial;
    private $titulo;
    private $texto;

    public function __construct($autores, $año, $editorial, $titulo, $texto) {
        $this->autores = $autores;
        $this->año = $año;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer() {
        echo $this->texto;
    }
    public function escribir($texto) {
        $cadena = $this->texto . " " . $texto;
        $this->texto = $cadena;
    }

    public function getAutores()
    {
        return $this->autores;
    }

    public function setAutores($autores): void
    {
        $this->autores = $autores;
    }

    public function getAño()
    {
        return $this->año;
    }

    public function setAño($año): void
    {
        $this->año = $año;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setEditorial($editorial): void
    {
        $this->editorial = $editorial;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto): void
    {
        $this->texto = $texto;
    }



}