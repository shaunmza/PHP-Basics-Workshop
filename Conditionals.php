<h1>Conditional Statements</h1>
<p>Conditional statements are used when you want different code to be executed in different circumstances</p>
<?php
// If ElseIf and Else
echo 'Simple if statement<br>';
$a = 0;
if ($a == 0) {
	echo "\$a is equal to 0<br>";
}

if ($a == 1) {
	echo "\$a is equal to 1<br>";
}

// The if else allows you to execute a block of code if a condition is true
// and execute another block if it is false
echo '<br>if else<br>';
if ($a == 1) {
	echo "\$a is equal to 1<br>";
} else {
	echo "\$a is not equal to 1<br>";
}

// elseif is useful if you want to test for more than 1 condition
echo '<br>if else elseif<br>';
if ($a == 1) {
	echo "\$a is equal to 1<br>";
} elseif ($a == 2) {
	echo "\$a is equal to 2<br>";
} else {
	echo "\$a is not equal to 1 and it is not equal to 2<br>";
}

// What happens if you have a long list of possible conditions?

// Switch statements are used to evaluate an expression against multiple cases.
// We use 'break' to stop the expression from being matched to the next case.
// If none of the cases are matched, the 'default' case is used. 
echo '<h2>Switch Statements</h2>';
$month = 'August';

switch ($month) {
	case "January":
		echo "\$month is equal to January";
		break;
	case "February":
		echo "\$month is equal to February";
		break;
	case "March":
		echo "\$month is equal to March";
		break;
	case "April":
		echo "\$month is equal to April";
		break;
	case "May":
		echo "\$month is equal to May";
		break;
	case "June":
		echo "\$month is equal to June";
		break;
	case "July":
		echo "\$month is equal to July";
		break;
	case "August":
		echo "\$month is equal to August";
		break;
	case "September":
		echo "\$month is equal to September";
		break;
	case "October":
		echo "\$month is equal to October";
		break;
	case "November":
		echo "\$month is equal to November";
		break;
	case "December":
		echo "\$month is equal to December";
		break;
	default:
		echo "Cannot match the month!";
}
?>