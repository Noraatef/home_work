<?php

function def()
{
    $y = 2;

    // $func = function($x) use($y){
    //     return $x + $y;
    // };
    $func = function ($x) use ($y) {
        // global $y; 
        return $x + $y;
    };

    $y = 3;

    echo $func(5);
}
def();
?>
<?php
// function upper($s)
// {
//     return strtoupper($s);
// }
$arr = ['aa', 'bb', 'cc'];

$new = array_map('strtoupper', $arr);
var_dump($new);

function sum(int $x = 1, int $y = 2, int $z = 3) : float {
    return $x + $y +$z;
}
// var_dump(sum(z:5, x: (int)"3s"));
$s = sum(z:5, x: (int)"3s");

// Arrow function

// $x = fn($n) => 1 + $s * $n;
$x = fn($n = 0) => 1 + $s * $n;
// echo $x(5);
echo $x();

