<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
<?php
crearLista();
function crearLista(){
    echo "<ul>";
    connect();
    echo "</ul>";
}


function connect()
{
    $dbname = "tienda";
    $host = "localhost";
    $user = "root";
    $pass = "";
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        ejecutarSentencia($dbh);
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function ejecutarSentencia($dbh){
    $stmt = $dbh->prepare("SELECT * FROM productos");
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    foreach ($resultado as $row){
        echo $row["nombre"]." ".$row["id"].PHP_EOL;
    }
}
/*function ejecutarSentencia($dbh){
    $stmt = $dbh->prepare("SELECT nombre FROM productos");
    $stmt->setFetchMode (PDO::FETCH_OBJ);
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo "<li><a href='index.php?id={$row->id}'>{$row->nombre}</a></li>";
    }
}*/
if (isset($_GET["id"])){
    borrar($_GET["id"]);
}

function borrar($id){
    $dbname = "tienda";
    $host = "localhost";
    $user = "root";
    $pass = "";
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $data = array(
          "id" => $id
        );
        $stmt = $dbh->prepare("DELETE * FROM productos WHERE id = :id");
        $stmt->setFetchMode (PDO::FETCH_OBJ);
        $stmt->execute($data);

        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

</body>
</html>