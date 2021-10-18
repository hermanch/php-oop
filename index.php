<?php 
echo "hello php oop <br>" . PHP_EOL;

require_once "data/person.php";
$hanasa = new Person();

$hanasa->nama = "hanasa";
$hanasa->alamat = null;
// $hanasa->negara = "Indonesia";
var_dump($hanasa);
echo "Asal negara : {$hanasa->negara}" .PHP_EOL;
 ?>