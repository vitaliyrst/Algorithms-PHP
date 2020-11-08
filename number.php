<?php

$arrayDelFive = [3, 8, 15, 25, 16, 11, 10, 5, 7, 30];

// Числа которые делятся на 5
foreach ($arrayDelFive as $value) {
    if ($value % 5 == 0) {
        echo $value . PHP_EOL;
    }
}

// Простые числа до 100
$numbers = [];
$flag = true;
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) == 0) {
            $flag = false;
        }
    }
    if ($flag == true) {
        $numbers[] = $i;
    } else {
        $flag = true;
    }
}
foreach ($numbers as $number) {
    echo $number . PHP_EOL;
}