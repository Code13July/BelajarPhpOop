<?php 

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Alief");
var_dump($company);

$company->programmer = new BackendProgrammer("Chandra");
var_dump($company);

$company->programmer = new FrontendProgrammer("Darmawan");
var_dump($company);

sayHelloProgrammer(new Programmer("Alief"));
sayHelloProgrammer(new BackendProgrammer("Chandra"));
sayHelloProgrammer(new FrontendProgrammer("Darmawan"));