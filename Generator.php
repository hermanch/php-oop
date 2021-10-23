<?php

function genap(int $max) :Iterator {
	$arr = [];
	for ($i =1; $i <= $max ; $i++){
		if ($i % 2 == 0){
			$arr [] = $i;
		}
	}
	return new ArrayIterator($arr);
}

// foreach(genap(10) as $g) {
// 	echo "Genap : $g" .PHP_EOL;
// }

function ganjil(int $max) :Iterator {
	for ($i =1; $i <= $max ; $i++){
		if ($i % 2 == 1){
			yield $i;
		}
	}
}

foreach(ganjil(10) as $g) {
	echo "Ganjil : $g" .PHP_EOL;
}
