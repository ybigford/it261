<?php  
include('config.php'); 
include('./includes/header.php');

$dance = '';
$dance_err = '';

$first_name = '';
$first_name_err = '';

$last_name = '';
$last_name_err = '';

$email = '';
$email_err = '';

$gender = '';
$gender_err = '';

$phone = '';
$phone_err = '';

$comments = '';
$comments_err = '';

$privacy = '';
$privacy_err = '';

$regions = '';
$regions_err = '';



if($_SERVER['REQUEST_METHOD'] == "POST") {

// if inputs are empty, we will declare a statement, else we will assign the $_POSTS to a variable $dance = $_POST['dance'];


if(empty($_POST['dance'])) {

    $dance_err = 'Tell us your dance style!';
} else {
    $dance = $_POST['dance'];
}


if(empty($_POST['first_name'])) {

    $first_name_err = 'Please fill in your first name!';
} else {
    $first_name = $_POST['first_name'];
}


if(empty($_POST['last_name'])) {

    $last_name_err = 'Please fill in your last name!';
} else {
    $last_name = $_POST['last_name'];
}


if(empty($_POST['email'])) {
    $email_err = 'Please fill in your email!';
} else {
    $email = $_POST['email'];
}


if(empty($_POST['gender'])) {

    $gender_err = 'Please check your gender!';
} else {
    $gender = $_POST['gender'];
}



if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if


if(empty($_POST['comments'])) {

    $comments_err = 'We value your input';
} else {
    $comments = $_POST['comments'];
}


if(empty($_POST['privacy'])) {

    $privacy_err = 'You must agree to receive spam email!';
} else {
    $privacy = $_POST['privacy'];
}


if(empty($_POST['regions'])) {
    $regions_err = 'Please choose your region!';
} else {
    $regions = $_POST['regions'];
}

function my_dance($dance) {
    $my_return='';
    if(!empty($_POST['dance'])) {
        $my_return = implode(',', $_POST['dance']);
    }
    return $my_return;
} //end my_dance function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['dance'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

    $to = 'szemeo@mystudentswa.com';
    $subject = 'Test email on ' .date('m/d/y h i A');
    $body = '
    First Name: '.$first_name.' '.PHP_EOL.'
    Last Name: '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Wines: '.my_dance($dance).' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    
    ';

    $header = array (
        'From' => 'szemeo@mystudentswa.com'
    );

   

    if(!empty(
        $first_name &&
        $last_name &&
        $email &&
        $gender &&
        $dance &&
        $regions &&
        $phone &&
        $comments)) {
            
            mail($to, $subject, $body, $headers);
            header ('Location:thx.php');
        }


} //end isset


} //closing server request method




?>






<div id="wrapper">

   

<main>
        <h2>We would love to hear from you!</h2>
        
        <?php  include('./includes/form.php'); ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset style="padding-left:20px;">
    <legend>
    Contact Yapa
    </legend>
        <br>

    <label>First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);  ?>">
    <span style="color:red; font-style:italic;"> <?php echo $first_name_err;   ?></span> <br>

    <br>
    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);  ?>">
    <span style="color:red; font-style:italic;"> <?php echo $last_name_err;   ?></span> <br>

    <br>
    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);  ?>">
    <span style="color:red; font-style:italic;"> <?php echo $email_err;   ?></span> <br>

    <br>
    <label>Gender</label> <span style="color:red; font-style:italic;"> <?php echo $gender_err;   ?></span>
    <ul>
        <li style="list-style-type:none;"> <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked" ';  ?>>Female</li>

        <li style="list-style-type:none;"> <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked" ';  ?>>Male</li>

        <li style="list-style-type:none;"> <input type="radio" name="gender" value="neigher" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked" ';  ?>>Neither</li>
    </ul>
   

    <br>
    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);  ?>">
    <span style="color:red; font-style:italic;"> <?php echo $phone_err;   ?></span> <br>

    <br>
    <label>Favorite Dance Styles</label> <span style="color:red; font-style:italic;"> <?php echo $dance_err;   ?></span>
    <ul>
        <li style="list-style-type:none;"> <input type="checkbox" name="dance[]" value="latin" <?php if(isset($_POST['dance']) && in_array('latin', $dance)) echo 'checked = "checked" ';  ?>>Latin</li>

        <li style="list-style-type:none;"> <input type="checkbox" name="dance[]" value="hiphop" <?php if(isset($_POST['dance']) && in_array('hiphop', $dance)) echo 'checked = "checked" ';  ?>>Hip Hop</li>

        <li style="list-style-type:none;"> <input type="checkbox" name="dance[]" value="jazz" <?php if(isset($_POST['dance']) && in_array('syrah', $dance)) echo 'checked = "checked" ';  ?>>Jazz</li>

        <li style="list-style-type:none;"> <input type="checkbox" name="dance[]" value="swing" <?php if(isset($_POST['dance']) && in_array('swing', $dance)) echo 'checked = "checked" ';  ?>>Swing</li>

        <li style="list-style-type:none;"> <input type="checkbox" name="dance[]" value="other" <?php if(isset($_POST['dance']) && in_array('other', $dance)) echo 'checked = "checked" ';  ?>>Other</li>
    </ul>

   
        <br>

    <label>Regions</label>
    <select name="regions">

    <option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected = "unselected" ';  ?>>Select One!</option>

    <option value="nw" <?php if(isset($_POST['regions']) == "nw")  echo 'selected = "selected" ';  ?>>Northwest</option>
    <option value="sw" <?php if(isset($_POST['regions']) == "sw")  echo 'selected = "selected" ';  ?>>Southwest</option>
    <option value="mw" <?php if(isset($_POST['regions']) == "mw")  echo 'selected = "selected" ';  ?>>Midwest</option>
    <option value="ne" <?php if(isset($_POST['regions']) == "ne")  echo 'selected = "selected" ';  ?>>Northeast</option>
    <option value="se" <?php if(isset($_POST['regions']) == "se")  echo 'selected = "selected" ';  ?>>Southeast</option>
    </select>
    <span style="color:red; font-style:italic;"> <?php echo $regions_err;   ?></span> <br>
        <br>

    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);  ?></textarea>
    <span style="color:red; font-style:italic;"> <?php echo $comments_err;   ?></span> <br>
        <br>

    <label>Privacy</label>
    <ul>
    <li style="list-style-type:none;"><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked" ';  ?>>Yes</li>
    </ul>
    <span style="color:red; font-style:italic;"> <?php echo $privacy_err;   ?></span> <br>
        <br>

    <input type="submit" value="Send it" style="background-color:orange;font-weight:bold;padding:5px;border-radius:5px;border-color:#fff;">

    <p style="font-weight:bold;"><a href="">Reset</a></p>



    </fieldset>
    

    </form>
        

</main>



<aside style="background:<?php echo $background; ?>">
    
        <h2>Welcome to our contact page!</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae provident perferendis tempora, 
        quia iusto praesentium nostrum quibusdam pariatur adipisci voluptatum. Placeat nostrum iusto laboriosam, dolorum nobis asperiores eius aperiam omnis?</p>
        
        <img src="images/dance.jpg" alt="dancing couple">

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae provident perferendis tempora, 
        quia iusto praesentium nostrum quibusdam pariatur adipisci voluptatum. Placeat nostrum iusto laboriosam, dolorum nobis asperiores eius aperiam omnis?</p>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae provident perferendis tempora, 
        quia iusto praesentium nostrum quibusdam pariatur adipisci voluptatum. Placeat nostrum iusto laboriosam, dolorum nobis asperiores eius aperiam omnis?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae provident perferendis tempora</p>

    </aside>



    </div>
<!-- end wrapper -->

<footer>
    <ul>
        <li>Copyright &copy;<script>document.write(new Date().getFullYear())</script> yBigford</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by yBigford</a></li>
        <li><a id="html-checker" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fwww.ybigford.com%2Fit261%2Fwebsite%2Fdaily.php">HTML Validation</a></li>
        <li><a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.ybigford.com%2Fit261%2Fwebsite%2Fdaily.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>


</footer>
    
</body>
</html>