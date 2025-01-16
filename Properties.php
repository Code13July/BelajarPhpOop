<?php 

require_once "data/Person.php";

$person = new Person();
$person->name = "Alief";
$person->address = "JawaTimur";

var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Alief";
$person2->address = "JawaTimur";

var_dump($person2);

// error
// $person2->name = [];