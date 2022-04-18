<?php
	require_once 'human.php';

	class Discipline extends group {
		private $group;

		public function __construct($i, $t) {
			$this->group = $g;
			$this->group->addDiscipline($this);
		}

		public function display() {
			parent::display();
			echo sprintf('%d<br>', $this->group->getTitle());
		}
	}
?>