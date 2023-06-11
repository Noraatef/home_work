<?php
$strin = 'Hello world!';
$rev = '';
for ($i = strlen($strin) - 1; $i >= 0; $i--){
    
    $char = substr($strin, $i, 1);
    $rev.= $char;
}
echo $rev;
