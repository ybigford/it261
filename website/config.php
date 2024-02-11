<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php' :
        $title = 'Home Page of Our Website Project';
        $body = 'home';
        break;
    

    case 'about.php' :
        $title = 'About Page of Our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php' :
        $title = 'Daily Page of Our Website Project';
        $body = 'daily inner';
        break;

    case 'project.php' :
        $title = 'Project Page of Our Website Project';
        $body = 'project inner';
        break;

    case 'contact.php' :
        $title = 'Contact Page of Our Website Project';
        $body = 'contact inner';
        break;

    case 'gellery.php' :
        $title = 'Gallery Page of Our Website Project';
        $body = 'gallery inner';
        break;
}

// Our navigational array
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);


// My form's PHP


$wines = '';
$wines_err = '';

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

// if inputs are empty, we will declare a statement, else we will assign the $_POSTS to a variable $wines = $_POST['wines'];


if(empty($_POST['wines'])) {

    // say something or do something
    $wines_err = 'What... no wines?';
} else {
    $wines = $_POST['wines'];
}


if(empty($_POST['first_name'])) {

    // say something or do something
    $first_name_err = 'Please fill in your first name!';
} else {
    $first_name = $_POST['first_name'];
}


if(empty($_POST['last_name'])) {

    // say something or do something
    $last_name_err = 'Please fill in your last name!';
} else {
    $last_name = $_POST['last_name'];
}


if(empty($_POST['email'])) {

    // say something or do something
    $email_err = 'Please fill in your email!';
} else {
    $email = $_POST['email'];
}


if(empty($_POST['gender'])) {

    // say something or do something
    $gender_err = 'Please check your gender!';
} else {
    $gender = $_POST['gender'];
}


if(empty($_POST['phone'])) {

    // say something or do something
    $phone_err = 'Please check your phone number!';
} else {
    $phone = $_POST['phone'];
}


if(empty($_POST['comments'])) {

    // say something or do something
    $comments_err = 'We value your input';
} else {
    $comments = $_POST['comments'];
}


if(empty($_POST['privacy'])) {

    // say something or do something
    $privacy_err = 'You must agree to receive spam email!';
} else {
    $privacy = $_POST['privacy'];
}


if($_POST['regions'] == NULL) {

    // say something or do something
    $regions_err = 'Please choose your region!';
} else {
    $regions = $_POST['regions'];
}

function my_wines($wines) {
    $my_return='';
    if(!empty($_POST['wines'])) {
        $my_return = implode(',', $_POST['wines']);
    }
    return $my_return;
} //end my_wines function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

    $to = 'yapabigford@gmail.com';
    $subject = 'Test email on ' .date('m/d/y h i A');
    $body = '
    First Name: '.$first_name.' '.PHP_EOL.'
    Last Name: '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Wines: '.my_wines($wines).' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    
    ';

    $header = array (
        'From' => 'yapabigford@gmail.com'
    );

    // we will be adding an if statement - that this email will work ONLY if all the fields are filled out!!!

    if(!empty(
        $first_name &&
        $last_name &&
        $email &&
        $gender &&
        $wines &&
        $regions &&
        $phone &&
        $comments)) {
            
            mail($to, $subject, $body, $headers);
            header ('Location:thx.php');
        }


} //end isset


} //closing server request method