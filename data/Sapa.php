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

trait CanFly
{
	abstract public function fly() :void;
}

trait All
{
	use GoodBye, Hello, HasName, CanFly;
}

class Manusia
{
	use GoodBye, Hello;
	public function goodBye(string $name) :void
	{
		echo "goodBye $name Manusia" .PHP_EOL;
	}
	public function hello(string $name) :void
	{
		echo "hello $name Manusia" .PHP_EOL;
	}
}


class ManusiaSuper extends Manusia
{
	use All;

	public function fly()
	{
		echo "I can Fly" .PHP_EOL;
	}
}
