<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
<?php
$animales = array("Tucan", "Lemur", "Stray cat", "Pez gota");
$colores = array("Magenta", "Cyan", "Beige", "azul verdoso");

echo "<p>El primer array tiene ". Count($animales). " elementos y el segundo tiene ". Count($colores) ." elementos </p>";

array_push($animales, "Camaleon");
array_unshift($colores, "Narancia");

$mezcla = array_merge($animales, $colores);


$hablar = [
    "Casa" => "House",
    "Perro" => "Dog",
    "Gato" => "Cat",
    "Vaca" => "Cow",
    "Ballena" => "Whale"
];

echo "<p>La traducción de ".  $hablar[0]  ." es ". $hablar[$hablar[0]] ."</p>";

?>
</body>
</html>