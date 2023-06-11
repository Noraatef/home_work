<?php
trait HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World!';
    }
}
class TheWorldIsNotEnough
{
    use HelloWorld;
    public function sayHello() // doing overrite to the function in trait
    {
        echo 'Hello Universe!';
    }
}
$o = new TheWorldIsNotEnough();
$o->sayHello();
?>
