<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Hanasa");
var_dump($company);

$company->programmer = new BackendProgrammer("Tya");
var_dump($company);

sayHelloProgrammer(new FrontendProgrammer("Ahan"));

 ?>
