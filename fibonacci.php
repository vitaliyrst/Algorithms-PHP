<?php

// Числа фибоначчи через for
function fibonacci($position, $a = 0, $b = 1)
{
    $row = [$a, $b];
    for ($i = 2; $i <= $position; $i++) {
        $row[] = $row[$i - 1] + $row[$i - 2];
    }
    return $row;
}

foreach (fibonacci(5000) as $value) {
    echo $value . PHP_EOL;
}

// Числа фибоначчи с рекурсией
function fibonacciRecursion($n)
{
    if ($n < 3) {
        return 1;
    } else {
        return fibonacciRecursion($n - 1) + fibonacciRecursion($n - 2);
    }
}

for ($n = 1; $n <= 36; $n++) {
    echo(fibonacciRecursion($n) . PHP_EOL);
}