<?php
$a = [1, 2, 3];
$b = [2, 4, 6, 8];
$loop = count($a ) > count($b)? $a : $b;
foreach($loop as $key =>$value)
{
    $multi[] = ($a[$key] ?? 0)* ($b[$key] ?? 0);
}

var_dump($multi);