<?php

?>
<html>
<head>
    <title>Hola mundo</title>
</head>
<body>
<?php
session_start();
$users = array(
    "aaa" => array(
        "nombre" => "aab",
        "contraseña" => "aaa"
    ),
    "jasperoide1" => array(
        "nombre" => "Iñaki",
        "contraseña" => "1234"
    ),
    "burrito" => array(
        "nombre" => "Iñigo",
        "contraseña" => "1234"
    ),
    "SrArkaitz" => array(
        "nombre" => "Arkaitz",
        "contraseña" => "1234"
    )
);

$_SESSION["burrito"] = "1234";
$_SESSION["jasperoide1"] = "1212";
$_SESSION["aaa"] = "aaa";


function comprobarUsuario($user, $password, $array){
    if ($_SESSION[$user] == $password){
        $_SESSION["mensaje"] = "Bienvenido ".$user;
        header("Location: logged.php");
    }
}
if (isset($_GET["user"]) && isset($_GET["password"])){
    if (isset($_SESSION["fallos"])){
        if ($_SESSION["fallos"] > 3){
            echo "<p>No se puede acceder a la página debido al número de fallo</p>";
        }else{
            comprobarUsuario($_GET["user"], $_GET["password"], $users);
            $_SESSION["fallos"] = $_SESSION[ "fallos"] + 1;
        }
    }else{
        $_SESSION["fallos"] = 0;
    }

}
?>

<form action="index.php" method="get">
    <label>Usuario</label>
    <input type="text" name="user">
    <br/>
    <label>Constraseña</label>
    <input type="password" name="password">
    <br/>
    <input type="submit" value="Guardar">
</form>

</body>
</html>
