<?php

require_once "Data/Product.php";

$product = new Product("Nabati", 100);
$bawahan = new Bawahan("Nabati", 100);

echo $product->getNAme() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
echo $bawahan->Info();