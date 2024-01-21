<?php

// class coffee exercise
// if today is Friday, it will be a pumpkin late day
// INTRODUCING the isset() function
// then we will indroduce our first GLOBAL variable
// our switch


// starting the switch
// if $_GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set?


// $variable = 'This our variable';
// if (isset($variable)) {
//     echo 'Variable has been set';
// } else {
// echo 'Variable has not been set!';
// }


// echo '<br>';


// if (isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'Not!!!!!!!';
// }










if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l') ;
}


switch($today) {
    case 'Friday' :
    $coffee = '<h2>Friday is Our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p>The moment Fall hits, we rush to our local coffee shop and order a <b>pumpkin spice latte</b>. 
    We love them so much, we took it upon ourselves to try making it at home. This recipe is easy and I bet you have most, 
    if not everything, you need to make it at home right now. It also comes together in under 10 minutes!</p>';
    break;

    case 'Saturday' :
    $coffee = '<h2>Saturday is Our Green Tea Latte Day!</h2>';
    $pic = 'greentea.jpeg';
    $alt = 'Green Tea Latte';       
    $content = '<p>A <b>green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, 
    but in a green tea latte, we remove the coffee and use tea in its place.</p>';
    break;

    case 'Sunday' :
    $coffee = '<h2>Sunday is Our Regular Joe Day!</h2>';
    $pic = 'coffee.jpg';
    $alt = 'Regular Coffee';       
    $content = '<p>Boston commuters have their routines timed down to the minute. Most folks can tell if they\'ll be late to work by the length of the line at Dunkin\' 
    Donuts. That\'s why "coffee regular" is such a comforting phrase. For anyone who\'s lived here more than a week, "coffee regular" means 
    "coffee with cream and sugar".</p>';
    break;

    case 'Monday' :
    $coffee = '<h2>Monday is Our Latte Day!</h2>';
    $pic = 'latte.jpg';
    $alt = 'Latte';
    $content = '<p><b>Caffè latte</b>, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk. 
    Variants include the chocolate-flavored mocha or replacing the coffee with another beverage base such as masala chai (spiced Indian tea), mate, 
    matcha, turmeric or rooibos; alternatives to milk, such as soy milk or almond milk, are also used.</p>';
    break;

    case 'Tuesday' :
    $coffee = '<h2>Tuesday is Our Americano Day!</h2>';
    $pic = 'americano.jpeg';
    $alt = 'Americano';
    $content = '<p><b>Caffè americano</b>, also known as Americano or American, is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, 
    resulting in a drink that retains the complex flavors of espresso, but in a lighter way.</p>';
    break;

    case 'Wednesday' :
    $coffee = '<h2>Wednesday is Our Cappuccino Day!</h2>';
    $pic = 'cappuccino.jpg';
    $alt = 'Cappuccino';
    $content = '<p>A <b>cappuccino</b> is an espresso-based coffee drink that is traditionally prepared with steamed milk foam. 
    Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or cocoa powder.</p>';
    break;


    case 'Thursday' :
    $coffee = '<h2>Thursday is Our Mocha Day!</h2>';
    $pic = 'mocha.jpg';
    $alt = 'Mocha';
    $content = '<p>A <b>caffè mocha</b>, also called mocaccino, is a chocolate-flavoured warm beverage that is a variant of a caffè latte, 
    commonly served in a glass rather than a mug. Other commonly used spellings are mochaccino and also mochachino.</p>';
    break;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>

    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }


        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        }


        p {
            margin-bottom: 20px;
        }
    
    </style>
</head>
<body>

<div id="wrapper">
<h1>My wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>  
<img src="./images/<?php echo $pic;  ?>" alt="<?php echo $alt;  ?>">
<?php echo $content; ?>
<h2>Check out Our Daily Specials</h2>
<ul>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>
</div>
    
</body>
</html>
