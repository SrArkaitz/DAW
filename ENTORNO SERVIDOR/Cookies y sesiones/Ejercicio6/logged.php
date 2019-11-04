<?php

?>
<html>
<head>
    <title>Hola mundo</title>
</head>
<body>
<?php
session_start();

function borrarSesionYVolver(){
    unset($_SESSION[ "mensaje"]);
}

?>

<p><?php echo $_SESSION["mensaje"] ?></p>


<form action="index.php" method="get">
<input type="submit" value="Volver" <?php borrarSesionYVolver(); ?>">
</form>

</body>
</html>
