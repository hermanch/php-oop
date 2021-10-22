<?php

$array = [
	"first" => "Ade",
	"middle" => "Hanasa",
	"last" => "Sofari"
];

$obj = (object) $array;
var_dump($obj);
echo "My name is $obj->middle" .PHP_EOL;
$newArr = (array) $obj;
var_dump($newArr);
