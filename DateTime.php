<?php 

$date = new DateTime();
$date->setDate(1999,1,12);
$date->setTime(10,13,10,0);

$date->add(new DateInterval("P2Y"));

$date_year = new DateInterval("P1M");
$date_year->invert = true;
$date->add($date_year);


// var_dump($date);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("asia/tokyo"));

$string = $now->format("Y:m:d H:i:s");

$date_now = DateTime::createFromFormat("Y:m:d H:i:s",$string , new DateTimeZone("asia/tokyo"));


var_dump($date_now);