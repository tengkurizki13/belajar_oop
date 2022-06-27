<?php

use Data\dogShelter;

require_once "Data/Animal.php";
require_once "Data/AnimalShelcer.php";

$catShelter = new dogShelter();

$catShelter->adopt("boji");