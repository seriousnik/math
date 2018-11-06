<?php

if (isset($_POST['answer'])) { //введен ли ответ
	$realAnswer = $_POST['$realAnswer'];
	$a = $_POST['$a'];
	$b = $_POST['$b'];
	$c = $_POST['$c'];
	$d = $_POST['$d'];
;
	if ($_POST['answer'] == $realAnswer) { //проверка ответа
		$comment = " верный :)";
		$answerColorOne = "answerTrue";
	} else {
		$comment = " неверный :(";
		$answerColorOne = "answerFalse";
	}
} else {
	$realAnswer = rand(1, 10)/10;
	$a = $realAnswer * rand(1, 100) / 100;
	$b = rand(1, 100) / 100;
	$d = rand(1, 100) / 100;
	$c = $a * $b / $realAnswer + $d;
	$comment = ":";
}

?>