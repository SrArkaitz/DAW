<?php

function sonPrimos($num){

    for($x=2; $x<$num; $x++)
    {
        if($num %$x ==0)
        {
            return 0;
        }
    }
    return 1;
}
?>