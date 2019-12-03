<?php

require_once('db_abstract_model.php');

class Usuario extends DBAbstractModel {

    public $nombre;
    public $apellido;
    public $email;
    private $descripcion;
    protected $id;

    function __construct() {
        $this->db_name = 'dbproyuno';
    }

    public function get($user_email = '') {
        if ($user_email != ''):
            $this->query = "
 SELECT id, name, surname, email, description
 FROM profiles
 WHERE email = '$user_email'
 ";
            $this->get_results_from_query();
        endif;
        if (count($this->rows) == 1):
//            $this->nombre = $this->rows[0]['name'];
//        $this->apellido = $this->rows[0]['surname'];
//        $this->email = $this->rows[0]['email'];
//        $this->descripcion = $this->rows[0]['description'];
            foreach ($this->rows as $propiedad => $valor):
                $this->$propiedad = $valor;
            endforeach;
        endif;
        return $this->rows;
    }

    public function set($user_data = array()) {
        if (array_key_exists('email', $user_data)):
            $this->get($user_data['email']);
            if ($user_data['email'] != $this->email):
                foreach ($user_data as $campo => $valor):
                    $$campo = $valor;
                endforeach;
                $this->query = "
 INSERT INTO profiles
 (name, surname, email, description)
 VALUES
 ('$nombre', '$apellido', '$email', '$descripcion')
 ";
                $this->execute_single_query();
            endif;
        endif;
    }

    public function edit($user_data = array()) {
        foreach ($user_data as $campo => $valor):
            $$campo = $valor;
        endforeach;
        $this->query = "
 UPDATE profiles
 SET name='$nombre',
 surname='$apellido',
 email='$email',
 description='$descripcion'
 WHERE email = '$email'
 ";
        $this->execute_single_query();
    }

    public function delete($user_email = '') {
        $this->query = "
 DELETE FROM profiles
 WHERE email = '$user_email'
 ";
        $this->execute_single_query();
    }

}

?>