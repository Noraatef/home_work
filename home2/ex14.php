<?php
$a = 11;
for ($i = $a; $a / 2;) {
    if ($a % 2 == 0) {
        echo 'This is a prime number';
        exit();
    } elseif ($a % 2 == 1) {
        echo "Wrong enter";
        exit();
    }
}