<?php 


require_once "Data/SayGoodbye.php";

use Data\traits\{SayGoodBye,SayHello,Person};

$person = new Person();
$person->goodBye("rizki");
$person->Hello("tengku");
$person->name = "dinelvi";
$person->Ab();

var_dump($person);