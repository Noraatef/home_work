<?php

// namespace A;
// class MyClass
// {
//     function __construct()
//     {
//         echo __NAMESPACE__;
//     }
// }
// function myFunc()
// {

// }

// Global namespace

const VERSION = 'Global';

class Person
{
    function __construct()
    {
        echo __NAMESPACE__;
    }
}

function hello()
{
    echo ' Hello from Global Namespace!';
}
