<?php
namespace A;

require_once __DIR__ . '/namespace.php';
require_once __DIR__ . '/namespaceA.php';
require_once __DIR__ . '/namespaceAB.php';

// echo A\B\VERSION;  // Fully qualified name
// echo B\VERSION;
// B\hello();
// $p = new B\Person();

use A\B\Emp as EmpAB;
// use Person;

use function A\B\hello as helloAB;
use const A\B\VERSION as V;

class Emp{}

echo V;
helloAB();

$p = new EmpAB();
$p = new Person();