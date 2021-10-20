<?php
require_once 'data/Car.php';

$avanza = new Avanza();
$avanza->drive();
echo "Avanaza has " .$avanza->getTire() . " Tires" .PHP_EOL;
echo "I have guarante ".$avanza->getGuarante() .PHP_EOL;
echo "The Brand is " .$avanza->nameBrand() .PHP_EOL;
echo $avanza->maintenance() .PHP_EOL;
