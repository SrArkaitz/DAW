<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '/../conf/PersistentManager.php');

class PersonajeDAO {

    //Se define una constante con el nombre de la tabla
    const PERSONAJE_TABLE = 'personajes';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . PersonajeDAO::PERSONAJE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $personajes = array();
        while ($personajeBD = mysqli_fetch_array($result)) {

            $personaje = new Personaje();
            $personaje->setIdPersonaje($personajeBD["idPersonaje"]);
            $personaje->setNombre($personajeBD["name"]);
            $personaje->setParticularidad($personajeBD["particularidad"]);
            $personaje->setAvatar($personajeBD["avatar"]);
            
            array_push($personajes, $personaje);
        }
        return $personajes;
    }

    public function insert($personaje) {
        $query = "INSERT INTO " . PersonajeDAO::PERSONAJE_TABLE .
                " (name, particularidad, avatar) VALUES(?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $nombre = $personaje->getNombre();
        $particularidad = $personaje->getParticularidad();
        $avatar = $personaje->getAvatar();
        
        mysqli_stmt_bind_param($stmt, 'sss', $nombre, $particularidad, $avatar);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT name, particularidad, avatar FROM " . PersonajeDAO::PERSONAJE_TABLE . " WHERE idPersonaje=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $nombre, $particularidad, $avatar);

        $personaje = new Personaje();
        while (mysqli_stmt_fetch($stmt)) {
            $personaje->setIdPersonaje($id);
            $personaje->setNombre($nombre);
            $personaje->setParticularidad($particularidad);
            $personaje->setAvatar($avatar);
       }

        return $personaje;
    }

    public function update($personaje) {
        $query = "UPDATE " . PersonajeDAO::PERSONAJE_TABLE .
                " SET name=?, particularidad=?, avatar=?"
                . " WHERE idPersonaje=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $nombre = $personaje->getNombre();
        $particularidad= $personaje->getParticularidad();
        $avatar = $personaje->getAvatar();
        $id = $personaje->getIdPersonaje();
        mysqli_stmt_bind_param($stmt, 'sssi', $nombre, $particularidad, $avatar, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . PersonajeDAO::PERSONAJE_TABLE . " WHERE idPersonaje=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

        
}

?>
