<?php

echo '<h2>The implode function</h2>';

$cars = array('toyota', 'ford', 'suburu', 'audi', 'bmw', 'mercedes', 'lexus');

$my_cars = implode(', ', $cars);

echo $my_cars;


echo '<h2>The logic behind the wines on our form</h2>

<p>if post wines is not empty, take post wines and implode them, and create a new variable named $my_wines</p>

';