<html>
<head>
    <title>Hola Mundo PHP</title>
    <style>
        table, tr, td, th{
            border: solid;
        }
    </style>
</head>
<body>
<?php
//Ejercicio 4

$usuarios = array(
    "jasperoide1" => array(
        "nombre" => "Iñaki",
        "apellido" => "Claramunt",
        "password" => "123Abc"
    ),
    "burrito" => array(
        "nombre" => "Iñigo",
        "apellido" => "Arribillaga",
        "password" => "1234"
    )
);

function validarUsuario($user, $password, $array){
    $encontrado = false;
    $nombre = "";
    $apellido = "";
    foreach ($array as $key =>$value){
        if ($key == $user && $encontrado != true){
            echo $encontrado;
            $encontrado = true;
            foreach ($value as $key => $valor) {
                if ($key == "nombre"){
                    $nombre = $valor;
                }elseif ($key == "apellido"){
                    $apellido = $valor;
                }elseif ($key == "password"){
                    if ($valor == $password){
                        return "Hola, {$nombre} {$apellido}";
                    }else{
                        return "La cotraseña es incorrecta. Pruebe de nuevo";
                    }
                }
            }
        }
    }
    if ($encontrado == false){
        return "El usuario {$user} no está registrado en nuestra base de datos. Prueba a registrarte.";
    }
}

if (isset ($_GET["user"]) && isset($_GET["password"])) {
    echo "<p>" . validarUsuario($_GET["user"], $_GET["password"], $usuarios) . "</p>";
}
?>


<form action="Ejercicio4.php" method="get">
    <label>Introduce tu usuario: </label>
    <input type="text" name="user">
    <br/>
    <br/>
    <label>Introduce la contraseña </label>
    <input type="password" name="password">
    <br/>
    <br/>
    <input type="submit" value="enviar">
</form>

</body>
</html>