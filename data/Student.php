<?php
class Student
{
	public string $name;
	public string $id;
	public int $value;
	private string $email;

	function setEmail($email)
	{
		$this->email = $email;
	}

	public function __clone()
	{
		unset($this->email);
	}
}
