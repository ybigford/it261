<?php

// this is our first form
// we will be using the $_GET global variable

// our logic is : i will be asking for a name and email in my form
// if it is set YIPPY SKIPY
// if not, show me the form


if (isset($_GET['name'],
        $_GET['email'])) {
            $name = $_GET['name'];
            $email = $_GET['email'];
        } else {
echo '
<form action="" method="get">
<label>NAME</label>
<input type="text" name="name">
<label>EMAIL</label>
<input type="email" name="email">
<input type="submit" value="Confirm">

</form>
';
        

}