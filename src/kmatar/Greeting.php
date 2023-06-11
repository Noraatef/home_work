<?php

namespace kmatar\test;

trait Greeting
{
    public function hello()
    {
        echo "Hello, {$this->name}";
    }
}