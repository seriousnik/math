<?php

if (isset($_POST['answerThree'])) { //введен ли ответ
	
	$realAnswerFour = $_POST['$realAnswerFour'];
	$FirstNumber = $_POST['$FirstNumber'];
	$SecondNumber = $_POST['$SecondNumber'];
	$ThirdNumber = $_POST['$ThirdNumber'];

	if ($_POST['answerFour'] == $realAnswerFour) { //проверка ответа
		$commentFour = " верный :)";
		$answerColorFour = "answerTrue";
	} else {
		$commentFour = " неверный :(";
		$answerColorFour = "answerFalse";
	}
} else {
	
	$FirstNumber = rand(1, 19) ** 2;
	$SecondNumber = $FirstNumber / 10;
	$ThirdNumber = $FirstNumber * 10;
	$realAnswerFour = 3;
	$commentFour = ":";

}

?>