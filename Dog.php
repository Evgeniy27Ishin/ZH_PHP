<?php
	require_once 'Pet.php';

	class Dog extends Pet {
		public function voice() {
			echo 'Gav_gav<br>';
		}
	}
	
?>