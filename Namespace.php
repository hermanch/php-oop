<?php
require_once "data/Employers.php";
use Emp\NonCode\UIDesigner;
use function Emp\Code\ability as EmpAbility;

$UI = new UIDesigner();
$UI->sayHello();

// var_dump(Emp\Code\EMP_CODE);
EmpAbility();
 ?>
