<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
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

#gallerywrapper {
    background-image: url("images/bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    margin-left: 10px;

}


table {
    border: 1px solid red;
    border-collapse: collapse;
    text-align: center;
}


     

td {
    border: 1px solid navy;
           
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


        // echo make_links($nav);
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