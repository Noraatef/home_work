<?php

class Person
{

    const YEAR = 2023;
    // public readonly string $name;
    public $name;
    public static $country;
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAge($age)
    {
        //...
        return $this;
    }

    public function setCity($city)
    {
        //...
        return $this;
    }

    // public function getname($x = null, $y = null, $z = null)
    public function getName()
    {
        return $this->name;
    }

    public static function name()
    {
        return self::$country;
    }
}

function change(Person $object)
{
    $object->name = 'Name Changed!';
}

$person = new Person;
$person->name = 'Mohammed';
$person::$country = 'Palestine';
echo $person::YEAR;

echo $person->getName();
echo $person::$country;

$person10 = $person;
echo $person10?->name; // ?->  =  null safe operator.



// Chain of calls سلسلة من الاستدعاءات
$person->setName('mohammed')->setAge(20)->setCity('Gaza');

$person2 = new Person;
$person2->name = 'Ahmed';
$person2::$country = 'Jordan';
echo Person::$country; // = // echo $person::$country;
echo Person::YEAR; // = // echo $person::YEAR;

$person3 = $person;
$person4 = &$person;
$person5 = clone $person;

$person5->name = 'Fatma';
$person3->name = 'Ali';
$person4->name = 'Sara';

$person = null;

change(clone $person5); //Sends clone from Object;
change($person5); // $object = $person5;




echo '<pre>';
var_dump($person, $person2, $person3, $person4, $person5);
