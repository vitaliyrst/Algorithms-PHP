<?php

//Быстрая сортировка
function quick($arr)
{
    $size = count($arr);
    if ($size <= 1) {
        return $arr;
    }

    $middle = $arr[0]; //Опорное число
    $left_arr = []; // Левый массив - числа меньше опорного
    $right_arr = []; // Правый массив - числа больше опорного

    for ($i = 1; $i < $size; $i++) {
        if ($arr[$i] <= $middle) {
            $left_arr[] = $arr[$i]; //складываем числа меньше опорного
        } else {
            $right_arr[] = $arr[$i]; //складываем числа больше опорного
        }
    }
    $left_arr = quick($left_arr); // применяем рекурсию для сортировки левого массива

    $right_arr = quick($right_arr); // применяем рекурсию для сортировки правого массива
    return array_merge($left_arr, array($middle), $right_arr);
}

$arr = [150, 5, 1, 32, 43, 65, 46, 765, 1123, 2, 3, 6, 8, 9, 0];
$res = quick($arr);
foreach ($res as $item) {
    echo $item . "<br>";
}