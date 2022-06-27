<?php 

require_once "Data/Helpher.php";

use Helpher\MathHelpher;


MathHelpher::$name = "rizki";



$help = MathHelpher::sum(3,4,5,6,6);

echo $help;