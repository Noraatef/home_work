<?php

namespace kmatar\test\Jawwal;

use kmatar\test\Greeting; // import

class Employee
{
    use Greeting; //use

    public function __construct(protected $name)
    {
    }
}


