<?php

$a = 102;
$b = 98;

$c = ($a > 100) ? $a - 100 : 100 - $a;
$d = ($b > 100) ? $b - 100 : 100 - $b;

if ($c == $d) {
    echo "0";
} elseif ($c < $d) {
    echo $a;
} else {
    echo $b;
}
