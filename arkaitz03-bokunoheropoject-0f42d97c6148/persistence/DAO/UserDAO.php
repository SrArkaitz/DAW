<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '..\..\conf\PersistentManager.php');

class UserDAO {

    //Se define una constante con el nombre de la tabla
    const USER_TABLE = 'members';
    const PROFILE_TABLE = 'profiles';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE;
        $result = mysqli_query($this->conn, $query);
        $users= array();
        while ($userBD = mysqli_fetch_array($result)) {

            $user = new User();
            $user->setIdUser($userBD["id"]);
            $user->setEmail($userBD["user"]);
            $user->setPassword($userBD["pass"]);
            
            array_push($users, $user);
        }
        return $users;
    }

    public function insert($user) {
        $query = "INSERT INTO " . UserDAO::USER_TABLE .
                " (user, pass) VALUES(?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $email = $user->getEmail();
        $password = $user->getPassword();
        
        mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
        return $stmt->execute();
    }

     public function check($user) {
        $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE user=? AND pass=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxEmail = $user->getEmail();
        $auxPass =  $user->getPassword();
                 
        mysqli_stmt_bind_param($stmt, 'ss', $auxEmail, $auxPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt); 
        $rows = mysqli_stmt_num_rows($stmt);
        if($rows>0)         
            return true;
        else
            return false;
    }
    
    
    public function selectById($id) {
        $query = "SELECT user, pass FROM " . UserDAO::USER_TABLE . " WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $email, $password);

        $user = new User();
        while (mysqli_stmt_fetch($stmt)) {
            $user->setIdUser($id);
            $user->setEmail($email);
            $user->setPassword($password);
       }

        return $user;
    }

    
    public function delete($id) {
        $query = "DELETE FROM " . UserDAO::USER_TABLE . " WHERE id =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }
public function update($user) {
        $query = "UPDATE " . UserDAO::PROFILE_TABLE .
                " SET name=?, surname=?, email=?, description=?"
                . " WHERE email=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $nombre = $user->getNombre();
        $surname= $user->getApellido();
        $email = $user->getEmail();
        $descripcion = $user->getDescripcion();
        
        mysqli_stmt_bind_param($stmt, 'sssss', $nombre, $surname, $email, $descripcion, $email);
         $stmt->execute();
         mysqli_stmt_store_result($stmt); 
        $rows = mysqli_stmt_num_rows($stmt);
        if($rows>0)         
            return true;
        else
            return false;
        
    }
        
}

?>
