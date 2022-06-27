<?php 


namespace Data; 

require_once "Animal.php";

interface AnimalShelter {
    public function adopt(string $name):Animal;
    
}

class  dogShelter implements AnimalShelter
{
    public function adopt(string $name):Dog
    {
        $dog = new Dog();
        $dog->name = "anjing";
        return $dog;
    }
}
