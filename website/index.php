




<div id="wrapper">

    <!-- <div id="hero"> -->
<?php  
include('config.php'); 
include('./includes/header.php');



// array
$pics[0] = 'laptop.jpg'; 
$pics[1] = 'androids.png';
$pics[2] = 'code.jpg';
$pics[3] = 'keyboard.jpg';
$pics[4] = 'robot.jpg';

$i = rand(0, 4);


echo '<img src="images/'.$pics[$i].'" alt="'.$pics[$i].'" style="text-align:center;">';



?>


        <!-- <img src="images/androids.png" alt="three green androids"> -->
<!-- 
    </div> -->
    <!-- end hero -->

    <main>
        <h1>Welcome to Web App Programming Class</h1>
        <h2>We are going to learn PHP</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas leo in dolor eleifend, 
            at malesuada nisl imperdiet. Sed hendrerit, tortor eu dictum eleifend, lectus dui euismod nibh, 
            a varius massa velit at enim. Etiam sem felis, finibus vitae convallis ac, porta ut lorem. 
            Phasellus tristique enim eu dolor condimentum malesuada.</p>
        <h2>Another Headline 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas leo in dolor eleifend, 
            at malesuada nisl imperdiet. Sed hendrerit, tortor eu dictum eleifend, lectus dui euismod nibh, 
            a varius massa velit at enim. Etiam sem felis, finibus vitae convallis ac, porta ut lorem. 
            Phasellus tristique enim eu dolor condimentum malesuada.</p>


    </main>
    

    <aside>
        <h3>Headline 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas leo in dolor eleifend, 
        at malesuada nisl imperdiet. Sed hendrerit, tortor eu dictum eleifend, lectus dui euismod nibh, 
        a varius massa velit at enim. Etiam sem felis, finibus vitae convallis ac, porta ut lorem. 
        Phasellus tristique enim eu dolor condimentum malesuada.</p>

       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin egestas leo in dolor eleifend, 
        at malesuada nisl imperdiet. Sed hendrerit, tortor eu dictum eleifend, lectus dui euismod nibh, 
        a varius massa velit at enim. Etiam sem felis</p>

    </aside>


</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');