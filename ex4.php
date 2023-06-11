<?php
$a = 10;
$b = 20;
$c = 5;

if ($a > $b && $a > $c) {
    echo $a;
} elseif ($b > $a && $b > $c) {
    echo $b;
} else {
    echo $c;
}
