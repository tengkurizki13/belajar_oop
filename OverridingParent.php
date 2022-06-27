<?php

require_once "Data/snape.php";

use Data\Child;
use Data\Snape;

$snape = new Snape();
echo $snape->declaration();

$Child = new Child();
echo $Child->getParent();