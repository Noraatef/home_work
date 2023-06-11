<?php
$number = 10;

if ($number > 0 && $number % 3 == 0 || $number > 0 && $number % 7 == 0) {
    echo "The number is right";
} else {
    echo "Wrong";
}
