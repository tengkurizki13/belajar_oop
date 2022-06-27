<?php 


$array = [
    "firstName" => "rizki",
    "MiddleName" => "Dinelvi",
    "LastName" => "Pratama"
];

$object = (object)$array;


$Ke_array = (array) $object;


echo $Ke_array['firstName'];
