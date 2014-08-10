<h1>Functions</h1>
<p>Functions are blocks of code that can be run multiple times</p>

<p>PHP has a number of built in functions, and you can also write your own functions.<br>
These are called user defined functions.<br>
The code inside a function will only be executed when the function is called.</p>
<?php

// Define a function as below
function someFunction() {
	echo "You called some function<br>";
}

// and call the function using its name
someFunction();

// You can also pass data to a function
// These are referred to as arguments 

// A function that takes arguments is defined as below
function hasArguments($lanuage, $adjective) {
	echo "Programming in $language is $adjective!<br><br>";
}

hasArguments('PHP', 'cool');

// Function arguments can have default values
// and we can return data from a function

function addTwenty($value=5) {
	return $value + 20;
}

// calling the function with no value
$result = addTwenty();
echo "addTwenty with no arguments = $result<br>";

// when passing an argument
$result = addTwenty(7.5);
echo "addTwenty with an argument =  $result<br>";
?>