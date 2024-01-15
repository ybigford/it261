<?php
// my variables


$name = "Yapa"; 
$name = 'Wagner';
echo $name;

// if we declare the same variable several times the last value that was assigned is the only value displayed
echo '<br>';

$body_temp = 98;
echo '<br>';
echo $body_temp;
echo '<br>';
$body_temp_new = 98.6;
echo '<br>';
// echo "br";
echo $body_temp;
echo '<br>';
echo $body_temp_new;

echo '<br>';
echo "My name is $name!";
echo '<br>';

// echo 'My name is $name!';  without '. .' variable is not working
echo 'My name is '.$name.'!';
echo '<br>';
echo 'The normal body temperature for a human being is '. $body_temp_new.' ';

echo '<br>';

$name = 'Sharon';
echo $name;

echo '<br>';
$x = 20;
$y = 5;

echo '<br>';
$z = $x + $y;
echo $z;


echo '<br>';
echo $z = $x * $y;
echo '<br>';
echo $z;

echo '<br>';
echo $z = $x / $y;
echo '<br>';
echo $z;

echo '<br>';
$first_name = 'Yapa';
$last_name = 'Bigford';
echo $first_name.' '.$last_name;
echo '<br>';
echo $first_name." ".$last_name;
echo '<br>';
echo "My full name is $first_name $last_name";

echo '<br>';
echo 'My full name is '.$first_name.' '.$last_name.' '; 