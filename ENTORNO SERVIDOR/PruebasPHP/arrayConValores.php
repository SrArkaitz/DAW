<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php
$hablar = [
    "Casa" => "House",
    "Perro" => "Dog",
    "Gato" => "Cat",
    "Vaca" => "Cow",
    "Ballena" => "Whale"
];
?>

<ul>
    <li><?php echo "Casa => " .$hablar['Casa'] ?></li>
    <li><?php echo "Perro => " .$hablar['Perro'] ?></li>
    <li><?php echo "Gato => " .$hablar['Gato'] ?></li>
</ul>
</body>
</html>