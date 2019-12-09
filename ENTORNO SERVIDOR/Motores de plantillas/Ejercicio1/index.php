<?php
require 'vendor/autoload.php' ;
use duncan3dc\Laravel\BladeInstance;
$blade = new BladeInstance("/var/www/views", "/var/www/cache/views");
echo $blade->render("hello", [
    "name" => "Arkaitz"
]);




