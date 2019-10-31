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
    session_unset();
    header("Location: index.php");
}

?>

<p><?php echo $_SESSION["mensaje"] ?></p>


</body>
</html>
