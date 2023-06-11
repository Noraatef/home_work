<?php
$strings = [
    'Hello World',
    'Welcome',
    'Mohammed fsfs sjfhdsjjgksxgdx'
];
$max = '';
foreach ($strings as $string){
    if(strlen($string) > strlen($max)){
        $max = $string;
    }
}
echo $max;