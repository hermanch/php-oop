<?php
namespace Tahun;

class Jadul {

	public function borderRadius(){
		return 0;
	}
}

class Modern extends Jadul{
	public function borderRadius(){
		return 25;
	}
	public function getJadulBorder(){
		return parent::borderRadius();
	}
}


 ?>
