<?php

?>
<html>
<head>
    <title>Hola mundo</title>
</head>
<body>
<?php

function guardarCookie($contenidoCookie){
    setcookie("usuario", $contenidoCookie);
}
function mostrarCookie(){
    if (isset($_COOKIE['usuario'])){
        $usuario = $_COOKIE['usuario'];
            echo $usuario;
    }else{
        echo "No hay ningún usuario almacenado";
    }
}
if (isset($_GET["texto"])){
    guardarCookie($_GET["texto"]);
}
?>
<p><?php mostrarCookie()?></p>
<form action="index.php" method="get">
    <label>Introduce el texto que desee almacenar</label>
    <input type="text" name="texto" value="">
    <input type="submit" value="Guardar">
</form>

</body>
</html>
