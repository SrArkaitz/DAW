<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php
function reciveNum($num){
    switch ($num){
        case 1:
            return "Hoy es Lunes";
            break;
        case 2:
            return "Hoy es Martes";
            break;
        case 3:
            return "Hoy es Miercoles";
            break;
        case 4:
            return "Hoy es Jueves";
            break;
        case 5:
            return "Hoy es Viernes";
            break;
        case 6:
            return "Hoy es Sabado";
            break;
        case 7:
            return "Hoy es Domingo";
            break;

    }
}
?>
<h1><?php echo reciveNum(6) ?></h1>

</body>
</html>