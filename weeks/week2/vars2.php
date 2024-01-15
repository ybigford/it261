<?php

// concatenation
// operators - assignment operators
// some preset functions
// arrays


$name = 'Yapa';
$first_name = 'Yapa';
$last_name = 'Bigford';

echo '<br>';
$name = 'Yapa';
$name .= ' Bigford';
echo $name;

echo '<br>';

$color = 'red';
echo $color;

echo '<br>';
echo 'Yapa\'s favorite color is '.$color.' ';

echo '<br>';

$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';

$x = 20;
$x += 5;
echo $x;

echo '<br>';
$x = 100;
$x *= 10;
echo $x;

echo '<br>';

$x = 100;
$x /= 10;
echo $x;

echo '<br>';

echo '<h3>Our quantity and tax excercise<h3>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;

echo '<br>';
echo '<h3>We would like our amount to reflect 2 decimal points -- we are thinking about floats and a new function - number_format()</h3>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2); // 2 is for 2 decimal places

echo 'We have a total of <b>$'.$total_friendly.'</b> dollars.';
echo '<br>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
echo 'We have a total of <b>$'.number_format($total, 2).'</b> dollars.';
echo '<br>';

echo '<h3>Our second preset function is our date function!</h3>';
echo date('Y');

echo '<br>';

echo date('l');
// lowercase l is printing a day of the week

echo '<br>';


// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';

echo date("l jS \of F Y h:i A");

date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date("l jS \of F Y h:i A");
echo '<br>';

echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array</h4>';

// we cannot echo an array! BUT we can print_r($arrayname); AND we can var_dump($arrayname);
$fruit[] = 'bananas';
$fruit[] = 'cherries';
$fruit[] = 'melon';
$fruit[] = 'kiwi';
$fruit[] = 'oranges';
$fruit[] = 'apples';
echo '<br>';
echo $fruit;
echo '<br>';
echo $fruit[2];

echo '<br>';

$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples',
);


$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples',
];

echo '<br>';

print_r($fruit);

echo '<br>';
var_dump($fruit);

echo '<h3>Now we have an associative array</h3>';

$nav = [
    'index.php' => 'Home', //indext is the key. Home is the value.
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
];

echo '<pre>';
var_dump($nav);
echo '</pre>';