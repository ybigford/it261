<?php

// date function amd if statement
echo date('Y');

echo '<br>';
echo date('l, F j, Y H:i A');
// Wednesday, January 17, 2024 08:01 AM (current date and time, actually)
// l = day of the week
// F = month
// j = date
// Y = year
// h:i = hour:minutes - military time
// H:i = 24hrs format
// A = am
// P = pm

echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date('l, F j, Y H:i A');
// set to pacific time


echo '<br>';

$name = 'Yapa';
$our_date = date('H:i A');
echo '<br>';
echo $our_date;

echo '<br>';

$name = 'Yapa';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// the logic behind this is, IF the time is less or equal to 11, then it is morning.
// if the time is less than or equal to 17, which equal 5, then it is afternoon
// now we will have an else, that will mean it is evening!


if($our_time <= 11){
echo '<h2 style="color:yellow;">Good Morning, '.$name.'!</h2> <img src="images/sun.jpeg" alt="sun"> <p>It\'s time to get up!</p>';
} elseif ($our_time <= 17) {
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'</h2> <img src="images/goodafternoon.jpeg" alt="sun">';     
} else {
    echo '<h2 style="color:blue;">Good Evening, '.$name.'</h2> <img src="images/moon.jpeg" alt="sun">';
}