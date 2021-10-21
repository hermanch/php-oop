<?php

require_once 'data/Sapa.php';
use Sapa\{Manusia, GoodBye, Hello, HasName};

$man = new Manusia();
$man->goodBye("Rina");
$man->hello("Roni");
$man->name = "Rama";

var_dump($man);
