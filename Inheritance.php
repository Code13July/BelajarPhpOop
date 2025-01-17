<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Alief";
$manager->sayHello("Mary");

$vp = new VicePresident();
$vp->name = "Chandra";
$vp->sayHello("Mary");