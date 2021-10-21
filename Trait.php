<?php

require_once 'data/Sapa.php';
use Sapa\{Manusia, ManusiaSuper, GoodBye, Hello, HasName};

$man = new Manusia();
$man->goodBye("hoki");
$man->hello("hoki");

$superman = new ManusiaSuper();
$superman->goodBye("Leo");
$superman->hello("John");
$superman->fly();

// var_dump($man);
