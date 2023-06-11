<?php
$arr = [1, 12, 13, 2, 3, 5];
foreach($arr as $num ){
    if ($num % 2 !==0) {
        $sum []= $num;
    } 
}

// var_dump($sum);
// exit;
print_r($sum);
// foreach ($sum as $value) {
//     echo $value . " ";
// }
