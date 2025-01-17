<?php 

require_once "data/Person.php";

$person = new Person("Alief", "Jawa Timur");
$person->name = "Alief";
$person->address = "JawaTimur";

var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Chandra", null);
$person2->name = "Chandra";
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];