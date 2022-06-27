<?php 

require_once "Data/Catagory.php";


$catagory = new Catagory();
$catagory->setName("a");
$catagory->setExpensive(true);

echo "name: {$catagory->getName()}" . PHP_EOL;
echo "Expensive: {$catagory->IsExpensive()} " . PHP_EOL;