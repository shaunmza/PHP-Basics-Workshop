<h1>Variables</h1>
<p>Variables are identifiable places in memory to store a value</p>

<p>Variable names must start with an underscore _ or a letter<br>
$123 is NOT a valid variable name<br>
After that the name can contain letters, numbers and underscores</p>
<?php

$a = 'Test';

// We can display variables using the echo function
echo 'echo $a<br>';
echo $a;

// Or print them out
echo '<br><br>print($a)<br>';
print($a);

$b1 = '123';

// Variables can be echo'ed in a string
echo '<br><br>echo "$a $b1"<br>';
echo "$a $b1";

// or printed
echo '<br><br>print("$a $b1")<br>';
print("$a $b1");

echo "<h2>Performing operations on variables</h2>";
// adding variables could have unexpected outcomes
echo '<br>echo $a + $b1<br>';
echo $a + $b1;

// Why does this happen?

// What about with 2 strings?
$c = ': 123';
echo '<br><br>echo $a + $c<br>';
echo $a + $c;

// If we try a different operator?
echo '<br><br>echo $a . $b1<br>';
echo $a . $b1;

$d = 12;
// Now try it with other operators - / * %
echo $a + $d;
?>