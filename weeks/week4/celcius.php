<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/styles.css" type="text/css" rel ="stylesheet">
</head>
<body>
    <h1>Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
    <fieldset>
        <label>Enter your celcius value</label>
        <input type="number" name="cel">

        <input type="submit" value="Convert it!">

    </fieldset>
    <p><a href="">Reset</a></p>


    </form>

<?php
if(isset($_POST['cel'])){
    $cel = $_POST['cel'];

    // we will use a new function to make surethat ourvalues are integers intval()
    $cel_int = intval($cel);
    $far = ($cel_int * 9/5) + 32;

    // if the end user doesn not enter a value, say something

    if($cel == NULL) {
        echo '<p>Please fill out the celcius value!</p>';
    } elseif($far <= 32) {
        echo '<p> '.$cel_int.' degree celcius equals '.$far.' farenheit <br> and it is pretty cold out there! </p>';
    } elseif($far <= 45){
        echo '<p> '.$cel_int.' degree celcius equals '.$far.' farenheit <br> and it is getting warmer! </p>';
    } elseif($far <= 60){
        echo '<p> '.$cel_int.' degree celcius equals '.$far.' farenheit <br> and it is sweater weather! </p>';
    } elseif($far <= 75){
        echo '<p> '.$cel_int.' degree celcius equals '.$far.' farenheit <br> and we\'re going to the park! </p>';
    } elseif($far <= 90){
        echo '<p> '.$cel_int.' degree celcius equals '.$far.' farenheit <br> and we may be going to the beach! </p>';
    } else {
        echo '<p> '.$cel_int.' degree celcius equals '.$far.' farenheit <br> and we are at the beach! </p>';
    }


} //end isset


?>
    
</body>
</html>