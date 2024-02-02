<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Travel Calculator</h1>
<!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
  <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?> " method="post">
  <fieldset>

    <label>NAME<label>
    <input type="text" name="name" value="<?php if(isset($_POST['name']))  echo htmlspecialchars ($_POST['name']);  ?>" >

    <label>Total mile driving?</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles']))  echo htmlspecialchars ($_POST['miles']);  ?>">

    <label>How fast do you typically drive?</label>
    <input type="number" name="mph" value="<?php if(isset($_POST['mph']))  echo htmlspecialchars ($_POST['mph']);  ?>">

    <label>How many hours per day do you plan on driving?</label>
    <input type="number" name="hours" value="<?php if(isset($_POST['hours']))  echo htmlspecialchars ($_POST['hours']);  ?>">

    <!-- radio button  -->
    <label>Price of Gas</label>
    <ul>
    <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00)  echo 'checked="checked" ';  ?>>$3.00</li>
    <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50)  echo 'checked="checked" ';  ?>>$3.50</li>
    <li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00)  echo 'checked="checked" ';  ?>>$4.00</li>
    

    </ul>

    <!-- select menu -->
    <label>Fuel Efficiency</label>
    <select name="mpg">
        <option value="" <?php if(isset($_POST['mpg']) &&  is_null($_POST['mpg']))  echo 'selected="unselected" ';  ?>>Select one</option>
        <option value="40.00" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '40.00')  echo 'selected="selected" ';  ?>>40mpg</option>
        <option value="30.00" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '30.00')  echo 'selected="selected" ';  ?>>30mpg</option>
        <option value="27.00" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '27.00')  echo 'selected="selected" ';  ?>>27mpg</option>
        <option value="21.00" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '21.00')  echo 'selected="selected" ';  ?>>21mpg</option>
        

    </select>

   <input type="submit" value="Calculate">

   <p><a href="">Reset</a></p>
  </fieldset>


  </form>  
  <?php
  
  

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(empty($_POST['name'] )) {

          echo '<p class="error">Please fill out your name</p>';
    } 
    
    
    if(empty($_POST['miles'] )) {

        echo '<p class="error">Please fill out your total miles driving</p>';
    } 
    
    if(empty($_POST['mph'] )) {

        echo '<p class="error">Please fill out mph you typically drive</p>';
    } 

    if(empty($_POST['hours'] )) {

        echo '<p class="error">Please fill out total hours per day you plan on driving</p>';
    } 

    if(empty($_POST['price'] )) {

        echo '<p class="error">Please choose your price per gallon of gas</p>';
    } 

  if ($_POST['mpg'] == NULL) {

    echo '<p class="error">Please choose your fuel efficiency</p>';
} 


    if (isset($_POST['name'],
      $_POST['miles'],
      $_POST['mph'],
      $_POST['hours'],
      $_POST['price'],
      $_POST['mpg'] )) {
      $name = $_POST['name'];
      $miles = floatval($_POST['miles']);
      $mph = floatval($_POST['mph']);
      $hours = floatval($_POST['hours']);
      $price = floatval($_POST['price']);
      $mpg = floatval($_POST['mpg']);
      $total_hours = $miles / $hours;
      $total_days = $total_hours / $hours;
      $total_gas = $miles / $mpg;
      $dollars = ($miles / $mpg) * $price;

      if(!empty($name && $miles && $mph && $hours && $price) && ($mpg != NULL)) {

      echo '
      <div class="box">
      <h2>Hello '.$name.'</h2>
      <p>You will be travelling a total of <b> $'.number_format($total_hours, 2).' hours</b>, taking <b> '.number_format($total_days, 1).' days</b></p>
      <p>And you will be using <b> '.number_format($total_gas, 2).' gallons of gas</b>, cosing you <b>'.number_format($dollars, 2).' dollars.</b></p>

      </div>
      
      ';
      }

      }


  } //end server request

?>
</body>
</html>