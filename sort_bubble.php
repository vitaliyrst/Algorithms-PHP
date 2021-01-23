<?php

//Сортировка пузырьком
function bubbleSort(array $arr) {
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
// [4,2,1,5,8]
    for ($i = 0; $i < $count; $i++) {
        for ($j = $count - 1; $j > $i; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
    }

    return $arr;
}