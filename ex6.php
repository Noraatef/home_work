<?php

$num1 = 30;
$num2 = 25;

if ($num1 >= 20 && $num1 <= 30 && $num2 >= 20 && $num2 <= 30) 
 {
    if ($num1 > $num2) {
        echo $num1;
    } else {
        echo $num2;
    }
    
 }
 else {
    echo 0;
}