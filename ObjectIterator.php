<?php

class Account {
	var string $name = "Hanasa";
	public string $city = "Ciamis";
	private string $email = "hi@hanasa.com";
	protected string $pswd = "12345678";
}

$hanasa = new Account();
foreach ($hanasa as $key => $value) {
	echo "$key : $value" .PHP_EOL;
}
