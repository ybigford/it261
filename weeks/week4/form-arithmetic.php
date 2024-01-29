<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Our Arithmetic Form</h1>
    <form action="" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="name">


            <label>Phone</label>
            <input type="tel" name="phone">

            <label>How Many Lattes?</label>
            <input type="number" name="lattes">

            <label>How Many Capucinos?</label>
            <input type="number" name="capucinos">

            <label>How Many Americanos?</label>
            <input type="number" name="americanos">

            <label>Special Requests?</label>
            <textarea name="comments"></textarea>



            <input type="submit" value="Send my order">

            <p><a href="">Reset</a></p>


        </fieldset>

    </form>

    <?php 
    // name, phone, lattes, capucinos, americanos, comments


    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H:i');


    if (isset ($_POST['name'],
    $_POST['phone'],
    $_POST['lattes'],
    $_POST['capucinos'],
    $_POST['americanos'],
    $_POST['comments'])) {

    // add my if statement regarding fields that are empty

    

    if(empty($_POST['name'] && 
    $_POST['phone'] &&
    $_POST['lattes'] &&
    $_POST['capucinos'] &&
    $_POST['americanos'] &&
    $_POST['comments'] )) {

    echo '<p class="error">Please fill out all of the fields</p>';

    } else {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $lattes = $_POST['lattes'];
    $capucinos = $_POST['capucinos'];
    $americanos = $_POST['americanos'];
    $comments = $_POST['comments'];
    $total = $lattes + $capucinos + $americanos;



    // if and elseif statement regarding our time

    if($our_time <= 11) {
        $our_time = 'Good Morning';
    } elseif ($our_time <= 17) {
        $our_time = 'Good Afternoon';
    } else {
        $our_time = 'Good Evening';
    }



    echo '

    <div class="box">
    <h2> '.$our_time.'  '.$name.' !</h2>
    <p>We have texted your order to this number '.$phone.' totaling '.$total.' brverages:</p>

    <ul>
        <li> '.$lattes.' lattes</li>
        <li> '.$capucinos.' capucinos</li>
        <li> '.$americanos.' americanos</li>


    </ul>

    <p>And this is your special <b>request</b>: '.$comments.'</p>
    <p>Thank you for choosing our establishment!</p>
        
        
    </div>

    ';

    }





    } //end isset




    ?>
    
</body>
</html>