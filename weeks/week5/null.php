<?php

// https://www.w3schools.com/php/func_var_is_null.asp

echo '<h2>First Example of "a", ergo, it is FALSE, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";

echo '<h2>Second Example of "b", echoing "1" - what does that mean? 1 equals TRUE</h2>';
$b = null;
echo "b is " . is_null($b) . "<br>";

echo '<h2>Third Example of "c", ergo, c IS NOT NULL</h2>';
$c = "null";
echo "c is " . is_null($c) . "<br>";

echo '<h2>Forth Example of "d", therefore "d" is NULL!</h2>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>


<!-- if it's NULL, the result is "1" -->