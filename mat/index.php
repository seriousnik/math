<?php
//$ranOne = rand(0, 1);
include (__DIR__ . '/exercise1.php');
include (__DIR__ . '/exercise2.php'); 
include (__DIR__ . '/exercise3.php'); 
include (__DIR__ . '/exercise4.php'); 
//include (__DIR__ . '/exercise' . "$ranOne.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ОГЭ Математика</title>	
	<link href="styles.css" rel="stylesheet" />
</head>
<body bgcolor="lavender">
	<form  method="POST">
	<h2>Задание №1</h2>
	<font>Найдите значение выражения:<br/><br/>
		
		<table border="0" celpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td align="center"><?=$a . " * " . $b ?><hr color="black"></td>
				</tr>
				<tr>
					<td align="center"><?=$c . " - " . $d ?></td>
				</tr>
			</tbody>	
		</table>
	</font><br />
	<!--<form method="POST">-->
		<input type="hidden" value="<?= $a ?>" name="$a" >
		<input type="hidden" value="<?= $b ?>" name="$b" >
		<input type="hidden" value="<?= $c ?>" name="$c" >
		<input type="hidden" value="<?= $d ?>" name="$d" >
		<input type="hidden" value="<?= $realAnswer ?>" name="$realAnswer" >	
		<div class="<?=$answerColorOne ?>"><?= "Ответ" . "$comment" ?></div>
		<input type="text" name="answer" /><br />
	<!--<input type="submit" value='Ответить' />-->
	<!--</form>-->
	<hr border="none" color="indigo" height="2px">

	<h2>Задание №2</h2>
	<font>В таблице указаны цены (в рублях) на некоторые товары в разных магазинах:<br/><br/>
		<table border="1px" cellspacing="0" width="300" height="300" cellpadding="20" bgcolor="peachpuff">
			<tr>
				<td align="center">Магазин</td>
				<td align="center">Зефир</td>
				<td align="center">Шоколад</td>
				<td align="center">Конфеты</td>
			</tr>
			<tr>
				<td align="center">"Машенька"</td>
				<td align="center"><?=$marshmallowsOne ?></td>
				<td align="center"><?=$chocolateOne ?></td>
				<td align="center"><?=$candiesOne ?></td>
			</tr>
			<tr> 
				<td align="center">"Василёк"</td>
				<td align="center"><?=$marshmallowsTwo ?></td>
				<td align="center"><?=$chocolateTwo ?></td>
				<td align="center"><?=$candiesTwo ?></td>
			</tr>	
			<tr> 
				<td align="center">"Фасолинка"</td>
				<td align="center"><?=$marshmallowsThree ?></td>
				<td align="center"><?=$chocolateThree ?></td>
				<td align="center"><?=$candiesThree ?></td>
			</tr>	
		</table>
	</font>	
	<font>Василий Никитич хочет купить <?=$massMarshmallow ?> кг зефира, <?=$numberChocolate ?> шоколадки и <?=$massCandies ?> кг конфет. <br /> В каком магазине это сделать выгоднее?<br/><div class="comment">В ответе укажите номер выбранного варианта ответа</div><br />1) "Машенька";<br/>2) "Василёк"; <br /> 3) "Фасолинка"; <br />4) В нескольких сразу.</font> <br />
	<!--<form method="POST">-->
		<input type="hidden" value="<?= $marshmallowsOne ?>" name="$marshmallowsOne" >
		<input type="hidden" value="<?= $chocolateOne ?>" name="$chocolateOne" >
		<input type="hidden" value="<?= $candiesOne ?>" name="$candiesOne" >
		<input type="hidden" value="<?= $marshmallowsTwo ?>" name="$marshmallowsTwo" >
		<input type="hidden" value="<?= $chocolateTwo ?>" name="$chocolateTwo" >
		<input type="hidden" value="<?= $candiesTwo ?>" name="$candiesTwo" >
		<input type="hidden" value="<?= $marshmallowsThree ?>" name="$marshmallowsThree" >
		<input type="hidden" value="<?= $chocolateThree ?>" name="$chocolateThree" >
		<input type="hidden" value="<?= $candiesThree ?>" name="$candiesThree" >
		<input type="hidden" value="<?= $massMarshmallow ?>" name="$massMarshmallow" >
		<input type="hidden" value="<?= $numberChocolate ?>" name="$numberChocolate" >
		<input type="hidden" value="<?= $massCandies ?>" name="$massCandies" >		
		<input type="hidden" value="<?= $realAnswerTwo ?>" name="$realAnswerTwo" >
		<br />	
		<div class="<?=$answerColorTwo ?>"><?= "Ответ " . "$commentTwo" ?></div>
		<input type="text" name="answerTwo" /><br />
	<!--<input type="submit" value='Ответить' />-->
	<!--</form>-->
	<hr border="none" color="indigo" height="2px">

	<h2>Задание №3</h2>
	<!--<form method="POST">-->
		<input type="hidden" value="<?= $denominator ?>" name="$denominator" >		
		<input type="hidden" value="<?= $numerator ?>" name="$numerator" >
		<input type="hidden" value="<?= $realAnswerThree ?>" name="$realAnswerThree" >
	<font>К какому из указанных промежутков принадлежит данная дробь?</font>
	<br /><br />
		<table border="0" celpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td align="center"><?= $numerator?><hr color="black"></td>
				</tr>
				<tr>
					<td align="center"><?= $denominator ?></td>
				</tr>
			</tbody>	
		</table>
	<br/>	
	<font>1) [0,1; 0,2];&emsp;2) [0,3; 0,4;];&emsp;3) [0,6; 0,7]; &emsp;4) Ни одному из указанных</font>
	<br /><br />
		<div class="<?=$answerColorThree ?>"><?= "Ответ " . "$commentThree" ?></div>
		<input type="text" name="answerThree" /><br />
		<!--</form>-->	
	<hr border="none" color="indigo" height="2px">	
	
	<h2>Задание №4</h2>	
		<input type="hidden" value="<?= $FirstNumber ?>" name="$FirstNumber" >		
		<input type="hidden" value="<?= $SecondNumber ?>" name="$SecondNumber" >
		<input type="hidden" value="<?= $ThirdNumber ?>" name="$ThirdNumber" >
		<input type="hidden" value="<?= $realAnswerFour ?>" name="$realAnswerFour" >
		
	<font>
		Квадртаный корень какого из чисел: <?=$SecondNumber . ', ' . $FirstNumber . ', '  . $ThirdNumber ?> является рациональным?<br /><br />
		1) <?=$SecondNumber?>;&emsp;2) <?=$ThirdNumber?>;&emsp;3) <?=$FirstNumber?>; &emsp;4) Нет верного ответа.<br />
	</font><br />
	<div class="<?=$answerColorFour ?>"><?= "Ответ " . "$commentFour" ?></div>
		<input type="text" name="answerFour" />
		<!--</form>-->	
	<hr border="none" color="indigo" height="2px">

	<h2>Задание №5</h2>
		<svg>
			<line x1="0" y1="0" x2="0" y2="150" />
			<line x1="0" y1="150" x2="1000" y2="150" />
		</svg>	
	<br />	
	<hr border="none" color="indigo" height="2px"/>
	<input type="submit" value='Сдать работу' class="button" />
	</form>
</body>
</html>

