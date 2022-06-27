<?php

require_once "./Data/Person.php";

$rizki = new Person("rizki", 20);
$rizki = new Person("budi", 30);

$rizki->name = "tukar";

echo "<pre>" . print_r([
    "destructor.php - 10",
    $rizki,
], 1) . "</pre>";