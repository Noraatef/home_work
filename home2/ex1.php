<?php

$string = 'My name is Samy';
$first = substr($string, 0, 2);
$last = substr($string, -2, 2);

echo '<pre>';

echo "First 2 chars are ($first)\n";
echo "last 2 chars are ($last)\n";

if (strtolower($first) === strtolower($last)) {
    echo "The first and last 2 chars are similar!";
}

echo '</pre>';
