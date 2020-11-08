<?php

$arr = ['h', 'e', 'l', 'l', 'o'];
$reversed = [];
for ($i = 0; $i < count($arr); $i++) {
    array_unshift($reversed, $arr[$i]);
}
for ($i = 0; $i < count($reversed); $i++) {
    echo $reversed[$i];
}