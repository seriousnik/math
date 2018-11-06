<?php

$marshmallowsOne = rand(40, 60);
$marshmallowsTwo = rand(40, 60);
$marshmallowsThree = rand(40, 60);
$chocolateOne = rand(30, 45);
$chocolateTwo = rand(30, 45);
$chocolateThree = rand(30, 45);
$candiesOne = rand(80, 100);
$candiesTwo = rand(80, 100);
$candiesThree = rand(80, 100);
$massMarshmallow = rand(10, 20) / 10;
$numberChocolate = rand(2, 4);
$massCandies = rand(10, 20) / 10;

if (isset($_POST['answerTwo'])) {
	
	$realAnswerTwo = $_POST['$realAnswerTwo'];
	$marshmallowsOne = $_POST['$marshmallowsOne'];
	$marshmallowsTwo = $_POST['$marshmallowsTwo'];
	$marshmallowsThree = $_POST['$marshmallowsThree'];
	$chocolateOne = $_POST['$chocolateOne'];
	$chocolateTwo = $_POST['$chocolateTwo'];
	$chocolateThree = $_POST['$chocolateThree'];
	$candiesOne = $_POST['$candiesOne'];
	$candiesTwo = $_POST['$candiesTwo'];
	$candiesThree = $_POST['$candiesThree'];
	$massMarshmallow = $_POST['$massMarshmallow'];
	$numberChocolate = $_POST['$numberChocolate'];
	$massCandies = $_POST['$massCandies'];

	if ($_POST['answerTwo'] == $realAnswerTwo) {
		$commentTwo = " верный :)";
		$answerColorTwo = "answerTrue";
	} else {
		$commentTwo = " неверный :(";
		$answerColorTwo = "answerFalse";
	}
} else {
	$priceInMasha = $marshmallowsOne * $massMarshmallow + $chocolateOne * $numberChocolate + $massCandies * $candiesOne;
	$priceInVasilek = $marshmallowsTwo * $massMarshmallow + $chocolateTwo * $numberChocolate + $massCandies * $candiesTwo;
	$priceInFasolinka = $marshmallowsThree * $massMarshmallow + $chocolateThree * $numberChocolate + $massCandies * $candiesThree;$realAnswer = rand(1, 10)/10;
	if ($priceInMasha > $priceInVasilek && $priceInMasha > $priceInFasolinka) {
		$realAnswerTwo = 1;
	} elseif ($priceInVasilek > $priceInMasha && $priceInVasilek > $priceInFasolinka) {
		$realAnswerTwo = 2;	
	} else {
		$realAnswerTwo = 3;
	}
	$commentTwo = ":";
}

