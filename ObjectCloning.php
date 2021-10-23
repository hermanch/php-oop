<?php
require_once 'data/Student.php';

$riki = new Student();
$riki->name = "riki";
$riki->id = "23";
$riki->value = 98;
$riki->setEmail("riki@php.net");

var_dump($riki);

$rikiAdult = clone $riki;

var_dump($rikiAdult);
