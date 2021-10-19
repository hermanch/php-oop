<?php
require_once './data/Engineer.php';

$maya = new UIDesigner();
$maya->name = "Maya";
$maya->skill = "UI Designer";
$maya->sayHalo("Ahan");


$ahan = new FEDev();
$ahan->name= "Ahan";
$ahan->skill = "Front-end Developer";
$ahan->sayHalo("Maya");

 ?>
