<?php

class Category{
	private string $name;
	private bool $expensive;

	public function setName( string $name) :void{
		if (trim($name) != ""){
			$this->name = $name;
		}
	}
	public function getName() :string {
		return $this->name;
	}

	public function setExpensive( bool $expensive) :void {
		$this->expensive = $expensive;
	}
	public function isExpensive() :bool {
		return $this->expensive;
	}

}
