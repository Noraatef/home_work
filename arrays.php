<?php
// Arrays Example

$arr = [
    'A',
    1.5 => 'B',
    1 => 'C',
    null => 'D',
    '' => 'E',
    '1' => 'F',
    false => 'G',
    'name' => 'Mohammed',
    'PHP'
];

$arr[] = 'NAWA';

// echo count($arr);// لمعرفة عدد عناصر المصفوفة

// [$a, $b] = $arr;
[,,, $b] = $arr;
echo $b;

ksort($arr); // Pass By reference  // الk تستخدم للترتيب حسب الkey
array_push($arr, 'A', 'B');
$last_elm = array_pop($arr);

// echo $last_elm;
// $arr[] = 'C';
echo '<pre>';
var_dump($arr);
array_unshift($arr, 'first');

$x = $arr[2];
unset($arr[2]);
array_unshift($arr, $x);
$first = array_unshift($arr);
echo $first;

echo '<pre>';
var_dump($arr);
