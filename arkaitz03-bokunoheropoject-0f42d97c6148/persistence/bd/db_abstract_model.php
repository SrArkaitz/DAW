<?php

abstract class DBAbstractModel {

    private static $db_host = 'localhost';
    private static $db_user = 'id3787001_bokunohero';
    private static $db_pass = 'bokunohero';
    protected $db_name = 'id3787001_bokunohero';
    protected $query;
    public $rows = array();
    private $conn;

    # métodos abstractos para CRUD de clases que hereden

    abstract public function get();

    abstract public function set();

    abstract public function edit();

    abstract protected function delete();
    # los siguientes métodos pueden definirse con exactitud
    # y no son abstractos
    # Conectar a la base de datos

    private function open_connection() {
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
    }

    # Desconectar la base de datos

    private function close_connection() {
        $this->conn->close();
    }

    # Ejecutar un query simple del tipo INSERT, DELETE, UPDATE

    protected function execute_single_query() {
        $this->open_connection();
        $this->conn->query($this->query);
        $this->close_connection();
    }

    # Traer resultados de una consulta en un Array

    protected function get_results_from_query() {
        $this->open_connection();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->close_connection();
        array_pop($this->rows);
    }

}

?>