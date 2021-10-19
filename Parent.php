<?php
require_once "data/Profile.php";

$jadul = new Tahun\Jadul();
$modern = new Tahun\Modern();

echo $jadul->borderRadius() .PHP_EOL;
echo $modern->borderRadius() .PHP_EOL;
echo $modern->getJadulBorder() .PHP_EOL;

 ?>
