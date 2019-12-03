<?php

class Personaje {

    private $idPersona;
    private $nombre;
    private $particularidad;
    private $avatar;

    public function __construct() {
        
    }

    public function getIdPersonaje() {
        return $this->idPersona;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getParticularidad() {
        return $this->particularidad;
    }

    public  function getAvatar() {
        return $this->avatar;
    }

    public function setIdPersonaje($idPersonaje) {
        $this->idPersona = $idPersonaje;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    function setParticularidad($particularidad) {
        $this->particularidad = $particularidad;
    }

//Función para pintar cada criatura
    function personaje2HTML() {
        $result = '<div class=" col-md-4 ">';
         $result .= '<div class="card ">';
          $result .= ' <img class="card-img-top rounded mx-auto d-block avatar imgAvatar" src='.$this->getAvatar().' alt="Card image cap">';
            $result .= '<div class="card-block">';
                $result .= '<h2 class="card-title">' . $this->getNombre() . '</h2>';
                $result .= '<p class=" card-text description">'.$this->getParticularidad().'</p>';                    
             $result .= '</div>';
             $result .= ' <div  class=" btn-group card-footer" role="group">';
                $result .= '<a type="button" class="btn btn-secondary" href="offer/detail.php?id='.$this->getIdPersonaje().'">Detalles</a>';
                $result .= '<a type="button" class="btn btn-success" href="offer/edit.php?id='.$this->getIdPersonaje().'">Modificar</a> ';
                $result .= '<a type="button" class="btn btn-danger" href="../../controllers/GestionTarjetas/deleteController.php?id='.$this->getIdPersonaje().'">Borrar</a> ';
            $result .= ' </div>';
         $result .= '</div>';
     $result .= '</div>';
        
        
        return $result;
    }
        function personajeToHTML() {
        $result = '<div class=" col-md-4 ">';
         $result .= '<div class="card ">';
          $result .= ' <img class="card-img-top rounded mx-auto d-block avatar imgAvatar" src='.$this->getAvatar().' alt="Card image cap">';
            $result .= '<div class="card-block">';
                $result .= '<h2 class="card-title">' . $this->getNombre() . '</h2>';
                $result .= '<p class=" card-text description">'.$this->getParticularidad().'</p>';                    
             $result .= '</div>';
             $result .= ' <div  class=" btn-group card-footer" role="group">';
                $result .= '<a type="button" class="btn btn-secondary" href="GestionTarjetas/detail.php?id='.$this->getIdPersonaje().'">Detalles</a>';
            $result .= ' </div>';
         $result .= '</div>';
     $result .= '</div>';
        
        
        return $result;
    }
    
}
