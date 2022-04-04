<?php
	require_once 'Pet.php';

	class Cat extends Pet {
		public function voice() {
			echo 'Meo_meo<br>';
		}
	}
	
?>