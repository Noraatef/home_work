<?php

$string = "djszxhjd5665456sdzghd";

$count = 0;
for ($i=0; $i<strlen($string); $i++ )
{
    $char = substr($string, $i ,1);
if($char >= 0 && $char <=9){
    $count++;
    }
}
echo $count;
