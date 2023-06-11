<?php

class Employee
{
    use kmatar\test\Greeting;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}


