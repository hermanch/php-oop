<?php
require_once 'data/Student.php';

$student1 = new Student();
$student1->name = "Ahan";
$student1->id = "4";
$student1->value = 34;

// $student2 = clone $student1;
$student2 = new Student();
$student2->name = "Ahan";
$student2->id = "4";
$student2->value = 34;

var_dump($student1 == $student2); // dari sisi value sama
var_dump($student1 === $student2); // dari sisi memori berbeda
