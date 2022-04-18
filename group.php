<?php
header('Content-Type: text/html; charset=uft-8');

class Group {
	private $id;
	private $title;
	private $students = array();
	private $disciplines = array();

	public function __construct($i, $t) {
		$this->id = $i;
		$this->title = $t;
	}

	public function getTitle() {
		return $this->title;
	}

	public function addStudent($s) {
		array_push($this->students, $s);
	}

	public function addDiscipline($d) {
		array_push($this->disciplines, $d);
	}

	public function show() {
		echo '<h1>Группа ' .$this->title.'</h1>';
		echo '<h2>Группа Список студентов</h2>';
		foreach ($this->students as $student)
		foreach ($this->disciplines as $discipline) {
			$student->display();
		}
	}
}
?>