<?php 
class Person {
	const MODULE_NAME = "Belajar Php OOP";

	var String $nama;
	var ?String $alamat;
	var String $negara = "Indonesia";

	function __construct(string $nama, string $alamat){
		$this->nama = $nama;
		$this->alamat = $alamat;
	}

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
	function info(){
		echo "Saya sedang belajar di modul: ". self::MODULE_NAME. PHP_EOL;
	}
	function __destruct(){
		echo "objek $this->nama sudah didestroy" .PHP_EOL;
	}
}



 ?>
