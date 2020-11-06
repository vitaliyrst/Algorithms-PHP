<?php

//Рекурсия
//Факториал
function fact($x)
{
    if ($x == 1) {
        return 1;
    } else {
        return $x * fact($x - 1);
    }
}

echo fact(3);
