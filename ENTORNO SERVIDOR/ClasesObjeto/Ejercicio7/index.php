<?php

function area($num1, $num2)
{
    if ($num2 < 0 || $num1 < 0) {
        throw new Exception("No se ha podido realizar la operación, deben de ser números positivos");
    } else {
        echo $num1 * $num2;
    }
}

try {
    area(2, 2);
} catch (Exception $e) {
    echo $e->getMessage();
}
try {
    area(-2, 2);
} catch (Exception $e) {
    echo $e->getMessage();
}

