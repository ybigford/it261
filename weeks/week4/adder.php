
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
<input type="number" name="num1"><br>

<label>Enter the second number:</label>
<input type="number" name="num2"><br>

<input type="submit" value="Add Em!!"> 

</form>



<?php     //adder-wrong.php

if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;

   
    
    echo '
    
    <h2>You added '.$num1.' and '.$num2.'</h2>
    <p style="color:red;"> and the answer is '.$myTotal.'!</p>
    <p><a href="">Reset page</a></p>
    
    ';
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
<!-- change uppercase $Num2 to lowercase $num2 -->
<!-- use proper '..' for all variables -->