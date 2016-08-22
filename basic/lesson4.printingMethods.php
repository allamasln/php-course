<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LESSON 4: Printing methods in screen</title>
</head>
<body>
	<?php

			$name = "María";
			$age = 18;

			print $name;
			print "<br>";

			print "The user name is " . $name . "<br>";

			/*
				NOTE:
					- (.) is the concatenation operator in PHP.
			*/

			print "The user name is $name <br>";
			
			print 'The user name is $name';

			echo "<br>";
			echo "The user name is " . $name . "<br>";
			echo "The user name is $name <br>";
			echo 'The user name is $name';
			echo '<br> The user name is ' . $name . ' and the user age is ' . $age . ' years old' . '<br>';
			
			/*
				NOTES:

				- You can concatenate different types of value typing the expression in double quotes. (eg: Line 23, 29)
				- With single quotes is printed literaly the indicated string. (eg: Line 25, 30)
				- Up to now, print and echo work the same way.
			*/

			// Main diferences between print and echo

			echo $name, $age; // Echo can print a succession of variables in this way and not with print.
			echo "<br>"
			echo print $name . "<br>"; // Print is a function that always return 1, not an expression like echo. Print takes longer to return the result because it has to make internal processes more. Echo consumes less resources machine and it has a more professional use.
	?>
</body>
</html>

