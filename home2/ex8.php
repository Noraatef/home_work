<?php
function sumOfDigits($number)
{
    $sum = 0;
    $digits = str_split($number); // Convert number to an array of digits

    foreach ($digits as $digit) {
        $sum += $digit;
    }

    return $sum;
}

// Testing the function
$number = 12345;
$sum = sumOfDigits($number);
echo "The sum of the digits of the number $number is: " . $sum;
?>

