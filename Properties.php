<?php 

require_once "data/Person.php";

$person = new Person();
$person->name = "Alief";
$person->address = "JawaTimur";
$person->country = "Indonesia";

var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;