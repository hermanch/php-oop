<?php 
class Person {
	var String $nama;
	var ?String $alamat;
	var String $negara = "Indonesia";

	function hello(string $nama){
		echo "Halo $nama" .PHP_EOL;
	}
	function hiName(?string $nama) {
		if (is_null($nama)){
			echo "Hi, My name is $this->nama" .PHP_EOL;
		} else{
			echo "Hi $nama, My name is $this->nama ". PHP_EOL;
		}
	}
}



 ?>
