<?php
	header('Content-Type: text/html; charset=uft-8');
	require_once 'student.php';
	require_once 'group.php';

	$group1 = new Group(1, 'I-01');
	$group2 = new Group(1, 'I-01');
	$group3 = new Group(1, 'I-01');

	$s1 = new Student('Ivan', 'Ivanov', 'Ivanovbch', $group1);
	$s2 = new Student('Ivan', 'Ivanov', 'Ivanovbch', $group1);

	$s1->display();
	$s2->display();
?>