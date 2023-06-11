<?php
trait A
{
    public function hello()
    {
        echo 'Hello A';
    }
}
trait B
{
    public function hello()
    {
        echo 'Hello B';
    }
}

class hello
{
    use A, B {
        A::hello insteadof B;
        B::hello as helloB;
    }
}
class world
{
    use A, B {
        A::hello insteadof B;
        B::hello as helloB;
    }
}

$h =  new Hello;
$h->hello();
$h->helloB();
