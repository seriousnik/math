<?php

if (isset($_POST['answerThree'])) { //введен ли ответ
	
	$realAnswerThree = $_POST['$realAnswerThree'];
	$denominator = $_POST['$denominator'];
	$numerator = $_POST['$numerator'];

	if ($_POST['answerThree'] == $realAnswerThree) { //проверка ответа
		$commentThree = " верный :)";
		$answerColorThree = "answerTrue";
	} else {
		$commentThree = " неверный :(";
		$answerColorThree = "answerFalse";
	}
} else {
	
	$denominator = rand(4, 30); //знаменатель
	$numerator = rand(1, $denominator-1); //числитель
	$fraction = $numerator / $denominator;
	$commentThree = ":";

	if ($fraction >= 0.1 && $fraction <= 0.2) {
		$realAnswerThree = 1;
	} elseif ($fraction >= 0.3 && $fraction <= 0.4) {
		$realAnswerThree = 2;
	} elseif ($fraction >= 0.6 && $fraction <= 0.7) {
		$realAnswerThree = 3;
	} else {
		$realAnswerThree = 4;
	}

}

?>