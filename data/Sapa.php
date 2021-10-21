<?php
namespace Sapa;

trait GoodBye
{
	public function goodBye(?string $name) :void
	{
		echo is_null($name) ? "Good Bye Manusia" .PHP_EOL : "Good Bye $name" .PHP_EOL;
	}
}

trait Hello
{
	public function hello(?string $name) :void
	{
		echo  is_null($name) ? "Hello Manusia" .PHP_EOL :  "Hello $name" .PHP_EOL;
	}
}

trait HasName
{
	public string $name;
}

class Manusia
{
	use GoodBye, Hello, HasName;
}
