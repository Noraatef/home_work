<?php

// class Str
// {
//     protected string $value;

//     public function __construct(string $string)
//     {
//         $this->value = $string;
//     }

//     public function length()
//     {
//         return strlen($this->value);
//     }

//     public function equal($String)
//     {
//         return $this->value == $String;
    // }

    // public static function getString()
    // {
    //     return $this->value;
    // }

//     public static function getStringValue($strObject)
//     {
//         return $strObject->string;
//     }
// }
// $string1 = new Str("Hello");
// echo "Length: " . $string1->length() . "\n";

// $string2 = new Str("Hello");
// var_dump($string1->equal($string2->getStringValue($string2)));

// $string3 = new Str("World");
// var_dump($string1->equal($string3->getStringValue($string3)));

//?>
<?php

class Str
{
    protected string $value;

    public function __construct(string $string)
    {
        $this->value = $string;
    }

    public function length()
    {
        return strlen($this->value);
    }

    public function equal($string)
    {
        return $this->value == $string;
    }

    public static function getString()
    {
        return $this->value; // this won't work because using this inside a static method
    }
}

$str = new Str('Mohammed');
echo $str->length();
var_dump($str->equal('Mohammed'));
echo $str::getString();
exit;