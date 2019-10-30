<?php

?>
<html>
<head>
    <title>Hola mundo</title>
</head>
<body>
<?php

function guardarCookie($nombreCookie, $contenidoCookie){
    setcookie($nombreCookie, $contenidoCookie, time() + 60*60 +60);//en una hora y un minuto en teoria pero como ha sido el cambio de hora me pilla una hora antes
}
function mostrarCookie(){
    if (isset($_COOKIE['idioma'])){
        $idioma = $_COOKIE['idioma'];
            echo "idioma: " . $idioma;
    }else{
        echo "";
    }
}

if (isset($_GET["idioma"])){
    guardarCookie("idioma", $_GET["idioma"]);
}
?>
<p><?php mostrarCookie()?></p>
<form action="index.php" method="get">
    <label>Elige tu idioma</label>
    <select name="idioma">
        <option value="euskera">Euskera</option>
        <option value="castellano">Castellano</option>
        <option value="ingles">Inglés</option>
    </select>
    <input type="submit" value="Guardar">
</form>
<input type="button" value="Borrar Cookie" onclick="<?php borrarCookie() ?>">

</body>
</html>
