<!-- cara membuat class di oop -->

<?php

class Person
{

    const AUTHOR = "Tengku rizki dinelvi pratama";

    public $name;
    public $address;
    public $age;

    public function __construct(string $name, string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "my name is $this->name";
        } else {

            echo "Hello $name";
        }
    }

    public function info()
    {
        echo "Penulisnya :" . self::AUTHOR;
    }

    public function __destruct()
    {
        echo "ini Destructor $this->name";
    }

}