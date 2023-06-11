<?php

namespace Test;

// include_once __DIR__ . '/Greeting.php';
// include_once __DIR__ . '/Global.php';
// include_once __DIR__ . '/Jawwal.php';
         //     =     //
include __DIR__ . '/../vendor/autoload.php'; //best and faster to auto include files

use kmatar\test\Employee;
use Symfony\Composer\Intl\Currencies;

$em = new Employee('Khaled');
// $em = new Employee('Ahmed');
$em->hello();

print_r(Currencies::getName('ar'));