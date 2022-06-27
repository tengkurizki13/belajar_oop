<?php 

require_once "Data/student.php";

$student = new Student();

$student->id = "1";
$student->name = "Tengku";
$student->value = 100;


$coba = (string) $student;

echo $coba;