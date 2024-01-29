
<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 


<form action="">

<label>Enter the first number:</label>
<input type="number" name="Num1"><br>

<label>Enter the second number:</label>
<input type="number" name="num2"><br>

<input type="submit" value="Add Em!!"> 

</form>





<?php     //adder-wrong.php

if (isset($_POST['num1'])){ 
$_POST['num2'];



$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num1_int = intval($num1);
$num2_int = intval($num2);
$myTotal = $num1_int + $num2_int;


echo '<h2>You added '. $num1_int .' and '.$num2_int.' </h2>';
echo '<p style="color:red;"> and the answer is '.$myTotal.'!</p>';

echo '<br>';
echo'<p><a href="">Reset page</a></p>';


}

 
?>

</body>
</html>





<!-- remove minus sign (-) from $mytotal -= $num1 + $num2 -->
<!-- remove  { from closing php tag -->
<!-- move closing php tag and place it above closing body tag  -->
<!-- move html document and place it on top of opening php tag -->
<!-- remove / from opening form tag-->
<!-- add opening label tag to line 15 -->
<!-- fix label tag for line 18 -->
<!-- missing " for value in line 21 -->
<!-- fix single quotes and double quotes for echo with variables -->
<!-- remove '; from closing html tag -->
<!-- fix echo '<br>'; syntax -->
<!-- change type of second and first numbers from text to number -->