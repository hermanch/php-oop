<?php
require 'data/Product.php';

$apel = new Product("Apel", 3000);
var_dump($apel);
$apel->getProduct();

$sandal = new Item("sandal", 12000);
var_dump($sandal);
// $anggur = new Product();
// $anggur->name = "Anggur";
// $anggur->price = 12000;
// var_dump($anggur);
 ?>
