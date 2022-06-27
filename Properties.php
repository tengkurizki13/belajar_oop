<?php

require_once "./Data/Person.php";

$person = new Person("rizki", 21);

$person->name = "rizki";
$person->address = "riau";
$person->age = 21;

// echo "nama saya $person->name" . "<br>";
// echo "alamat saya $person->address" . PHP_EOL;
// echo "umur saya $person->name" . PHP_EOL;

$person2 = new Person("budi", 20);

$person2->name = "budi";
$person2->address = "jambi";
$person2->age = 40;

echo "nama saya $person2->name" . "<br>";
echo "alamat saya $person2->address" . PHP_EOL;
echo "umur saya $person2->age" . PHP_EOL;