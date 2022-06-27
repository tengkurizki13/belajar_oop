<?php

require_once "Data/Manager.php";

$manager = new Manager();
$bawahan = new Bawahan_manager();

$manager->SayHello("rizki");
$bawahan->SayHello("rizki");