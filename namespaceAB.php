<?php

namespace A\B;

const VERSION = 'AB';

class Person 
{
    function __construct()
    {
        echo __NAMESPACE__;
    }
}

class Emp
{
    function __construct()
    {
        echo __NAMESPACE__;
    }
}

function hello()
{
    echo 'hello from A\B Namespace!';
}