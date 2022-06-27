<?php 


namespace Data;

require_once "food.php";

abstract class Animal{

    public string $name;

     abstract public function run();
     abstract public function eat(AnimalFood $food);

}


class Dog extends Animal
{
    public function run():void
    {
        echo "$this->name";
    }
    public function eat(Food $food):void
    {
        echo "dog eating";
    }

}