<?php
class Pet {
	private $name;
	private $poroda;
	public function __construct($n, $p){
		$this->name = $n;
		$this->poroda = $p;
	}
	public function display() {
		echo sprintf('Name %s, poroda %s', $this->name,$this->poroda);
	}
}
?>