<?php 

require_once "Data/student.php";

$student_1 = new Student();

$student_1->id = "1";
$student_1->name = "rizki";
$student_1->value = 100;

$student_2 = new Student();

$student_2->id = "1";
$student_2->name = "rizki";
$student_2->value = 100;


var_dump($student_1 === $student_2);
