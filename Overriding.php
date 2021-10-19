<?php
require_once "data/Engineer.php";

$UI = new UIDesigner("Rony", "UI Designer");
$FE = new FEDev("Tema");

var_dump($FE);
$UI->sayHalo("Ahan");
$FE->sayHalo("Ahan");

 ?>
