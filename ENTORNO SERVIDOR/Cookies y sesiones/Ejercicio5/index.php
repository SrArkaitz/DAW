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
function comprobarUsuario($user, $password, $array){
    foreach ($array as $key => $value){
        if ($key == $user){
            if ($array[$key]["contraseña"] == $password){

                $_SESSION["mensaje"] = "Bienvenido ".$array[$key]["nombre"];
                header("Location: logged.php");

            }
        }
    }
}
if (isset($_GET["user"]) && isset($_GET["password"])){
    comprobarUsuario($_GET["user"], $_GET["password"], $users);
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
