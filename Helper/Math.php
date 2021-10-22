<?php
namespace Helper;

class MathHelper
{
	static public string $name;
	static public function sum(int ...$numbers) :int
	{
		$total = 0;
		foreach ($numbers as $n)
		{
			$total += $n;
		}
		return $total;
	}
}
