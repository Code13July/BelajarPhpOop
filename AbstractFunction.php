<?php 

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Alief";
$cat->run();

$dog = new Dog();
$dog->name = "Chandra";
$dog->run();