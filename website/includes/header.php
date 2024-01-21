<?php

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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


#wrapper {
    width: 1200px;
    margin: 20px auto;
    overflow: hidden;
}


main {
    width: 62%;
}

main a {
    color: #3D0C11;   
}

main li {
    letter-spacing: 1px;
    line-height: 30px;
}


aside {
    width: 35%;
}


aside ul {
    float: right;   
}


a {
    text-decoration: none;
}

.left {
    float: left;
    margin-right: 50px;
}

h1, h2, img {
    margin-bottom: 10px;
}


p {
    margin-bottom: 5px;

}

img {
    max-width: 100%;
    text-align: center;
}


</style>
</head>


<body class="<?php echo $body; ?>">

<header>
    <div class="inner-header">
        <a href="index.php">
        
        <img id="logo" src="images/logo.png" alt="logo">

        </a>

<!-- <nav>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Daily</a></li>
        <li><a href="">Project</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Gallery</a></li>
    </ul>
</nav> -->

<nav>
    <ul>
    <?php
        foreach($nav as $key => $value){
            if(THIS_PAGE == $key){
                echo '<li><a style="color:#756AB6;font-weight:bold;text-decoration:underline;" href="'.$key.'">'.$value.'</a></li>';
            } else {
                echo '<li><a style="color:#AC87C5;" href="'.$key.'">'.$value.'</a></li>';
            }
        } //end foreach
    ?>
    </ul>
</nav>
    </div>
    <!-- end inner header -->



</header>