<?php

//1
function getReverseString($someString)
{
    $getArray = str_split($someString);
    return implode(array_reverse($getArray));
}

//2
function getReverseStringFor($someString)
{
    for ($i = 1; $i <= strlen($someString); $i++) {
        echo substr($someString, $i * -1, 1);
    }
}

//3
$str = 'Turn me baby';
for ($i = strlen($str); $i >= 0; $i--) {
    $rev[] = $str[$i];
    $revstr = implode('', $rev);
}
echo $revstr;

//4
function myRev($src)
{
    $length = strlen($src);
    for ($i = 0; $i < $length / 2; $i++) {
        $a = $src[$i];
        $src[$i] = $src[$length - $i - 1];
        $src[$length - $i - 1] = $a;
    }
    return $src;
}

echo myRev($str);
