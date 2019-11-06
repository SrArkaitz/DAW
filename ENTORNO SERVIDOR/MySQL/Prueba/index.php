<?php

connect();

function connect()
{
    $dbname = "alumnos";
    $host = "localhost";
    $user = "root";
    $pass = "";


    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        ejecutarSentancia($dbh);
        //ejecutarInsert($dbh);
        //ejecutarInsertDirecta($dbh);
        //borrar($dbh);
        //update($dbh);
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function ejecutarSentancia($dbh){

    $data = array(
        'edad' => 21
    );

    $stmt = $dbh->prepare("SELECT nombre FROM alumno where edad < :edad" );

    $stmt->setFetchMode (PDO::FETCH_OBJ);
    $stmt->execute($data);

    while($row = $stmt->fetch()){
        echo $row->nombre;
    }
}
function ejecutarInsert($dbh){

    $data = array(
        'nombre' => 'Arkaitz',
        'apellidos' => 'Galisteo',
        'email' => 'arkaitz@gmail.com',
        'edad' => 21
    );

    $stmt = $dbh->prepare("INSERT INTO alumno(nombre, apellidos, email, edad) VALUES (:nombre, :apellidos, :email, :edad)" );

    $stmt->setFetchMode (PDO::FETCH_OBJ);
    $stmt->execute($data);
}
function ejecutarInsertDirecta($dbh){
    $stmt = $dbh->prepare("INSERT INTO alumno(nombre, apellidos, email, edad) VALUES ('Dania', 'Castañon', 'dania@gmail.com', 20)" );

    $stmt->setFetchMode (PDO::FETCH_OBJ);
    $stmt->execute();
}

function borrar($dbh){
    $data = array(
        'nombre' => 'Arkaitz'
    );

    $stmt = $dbh->prepare("DELETE FROM alumno where nombre = :$data" );
    $stmt->setFetchMode (PDO::FETCH_OBJ);
    $stmt->execute($data);
}
function update($dbh){
    $data = array(
        'nombre' => 'Dania',
        'apellidos' => 'Castanon'
    );
    $stmt = $dbh->prepare("UPDATE alumno SET apellidos = :apellidos WHERE nombre = :nombre" );
    $stmt->setFetchMode (PDO::FETCH_OBJ);
    $stmt->execute($data);
}
?>