<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lesson One</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

	<div id="container">

		<h1>PHP Lesson 1</h1>

		<h2>Variables</h2>

		<?php

		$friday = "Friday"; //assigned value of string friday

		$todaysDate = date("Y.m.d"); //assigned value of a function

		$friday = "Monday" //same variable given a different value

		?>

		<h2>Strings</h2>

		<?php

		$stringTest = "I am assigning \"this\" string to a variable named $stringTest"; //this sentence is a string

		$stringTest3 = "a 1 ewj... 1/2 fofiernfw 238ijefq;o;fe5165165"; //also a string

		echo "this is also a string - no variable needed";

		?>

		<h2>Arrays</h2>

		<?php 

		$dogs = array( "shetland", "golden" );
		$animals = array( $dogs, "frog", "elephant", "cat", "wolf" );

		$stringTest2 = "string"; //a string can just be a word, doesn't need to be a sentence

		/*
		key: 0
		value: dog,

		key: 1
		value: frog,

		key: 2
		value: elephant,

		key: 3
		value: cat,
		*/

		?>

		<h2>Superglobals</h2>

		<h2>Booleans</h2>

		<?php

		$areWeHavingFun = true; //boolean
		$seriously = "false"; //string

		?>

		<h2>NULL</h2>

		<?php

		$var1 = $var2; //var1 is null because the value of var2 has not been set

		$var1 = "null"; //var1 in NOT equal to null because it has the value of a string

		$var1 = NULL; //var1 is again equal to null;

		?>

		<h2>Constants</h2>

		<?php
		define("FAVORITE_ANIMAL", "Dogs");

		?>

		<h2>Numbers</h2>

		<?php
		$int1 = 56;

		$float1 = 4.5;

		?>

		<h2>Conditional Statements</h2>

		<?php

		if ($var1 = $var2) {
			echo "these variables are the same";
		}
		
		if ($sky = "blue") {
			echo "Sunny";
		} else {
			echo "Cloudy";
		}

		?>

		<?php
		$number = 1; //base val of variable

		while ($number <= 10) { //boolean comparison to see if number is less than 10
			echo $number; //echo value of variable number
			$number++; //increment the variable number by 1
		}

		?>

		<h2>Functions</h2>

		<?php

		//Single Line Comment
		/* Multiline
		Still a comment
		Yup... still a comment */

		?>

		<!-- OUTSIDE OF PHP TAGS -->
	</div>

</body>
</html>