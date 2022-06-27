<?php
require_once "Data/Conflic.php";
require_once "Data/Helper.php";

use const Helper\COBA as coba;
use Data\one\Conflic as conflic1;
use Data\two\Conflic as conflic2;
use function Helper\helpMe as help;

$conflic_1 = new conflic1();
$conflic_2 = new conflic2();

help();
echo coba;