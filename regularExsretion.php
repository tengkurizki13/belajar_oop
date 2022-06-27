<?php 


$mathces= [];
$result = preg_match_all("/i/i", "tengku rizki dinelvi pratama",$mathces);




$result_2 = preg_replace("/anjing|bangsat/i" , "***" , "dasar lu anjing dan bangsat");
var_dump($result_2);


$result_3 = preg_split("/[\s,-]/","tengku rizki-dinelvi-pratama");

var_dump($result_3);