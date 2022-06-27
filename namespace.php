<?php

require_once "Data/Conflic.php";
require_once "Data/Helper.php";

$conflic_1 = new Data\one\Conflic();
$conflic_2 = new Data\two\Conflic();

echo Helper\COBA . PHP_EOL;

echo Helper\helpMe();