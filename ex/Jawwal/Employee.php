<?php

namespace Jawwal;

use Greeting; // import

class Employee
{
    use Greeting; //use

    public function __construct(protected $name)
    {
    }
}


