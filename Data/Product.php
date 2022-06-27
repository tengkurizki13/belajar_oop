<?php

class Product
{

    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getNAme()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

class Bawahan extends Product
{

    public function Info()
    {

        echo "name : $this->name";
    }

}