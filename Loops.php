<h1>Loops</h1>
<p>Loops let you run the same block of code over and over in succession</p>
<?php
// While loops - loop through a block of code as long as a condition is true
echo 'While loops<br>';
$a = 0;
while ($a < 5) {
	echo '$a = ' . $a . '<br>';
	$a++;
}

// Do while loops check the condition at the end, so will always run at least once
echo '<br>do while loops<br>';
$a = 0;
do {
	echo "\$a = $a<br>";
} while ($a > 5);

// For loops are useful when you know in advance how many times you want to loop
echo '<br>For loops<br>';
for ($a=0; $a<=10; $a++) {
	echo '$a = ' . $a . '<br>';
}

// Foreach loops work on arrays 
echo '<br>For loops<br>';
$arr = array('a', 'b', 'c');
foreach ($arr as $key => $value) {
	echo "\$key = $key; \$value = $value<br>";
}

?>