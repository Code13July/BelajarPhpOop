<?php

require_once "data/Person.php";

$alief = new Person();
$alief->name = "Alief";
$alief->sayHello("Mary");

$chandra = new Person();
$chandra->name = "Chandra";
$chandra->sayHello(null);  // Ini seharusnya berhasil karena tipe parameter sudah diubah menjadi ?string

$alief->info();
$chandra->info();