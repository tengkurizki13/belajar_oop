<?php


require_once "Data/programmer.php";
require_once "Data/Manager.php";

$company = new Company();
$company->programmer= new Programmer("eko");
var_dump($company);
$company->programmer= new Backend("rizki");
var_dump($company);
$company->programmer= new Frontend("dinelvi");
var_dump($company);

Say(new Programmer("agus"));
Say(new Backend("rizki"));
Say(new Frontend("dinelvi"));