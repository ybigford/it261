<?php

include('config.php');
include('./includes/header.php');



?>


<div id="wrapper">

<div id="hero">
        <img src="images/bakerybg.jpg" alt="bakery">

    </div>
    <!-- end hero -->

<main>

<h1>Let's eat desserts!!!</h1>


<?php

$sql = 'SELECT * FROM dessert';

// now, we need to connect to the database!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


// on the people.php page
// AND... if we cannot connect to the database... we DIE
// or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 

//If we cannot extract data....
//  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));



// we have a row, which translates into an array
// if our result is greater than 0, we are happy

if(mysqli_num_rows($result) > 0) {


// we are going to add a while loop


while ($row = mysqli_fetch_assoc($result)) {

    echo '

    <h2 style="margin-left: 20px;">'.$row['name'].'</h2>

    <ul style="margin-left: 20px;list-style-type:none;">
    <li>Type: '.$row['type'].'</li>
    <li>Origin: '.$row['origin'].'</li>
    
    </ul>
    
    <p style="margin-left: 10px;">Read more about  '.$row['name'].', click <a href="dessert-view.php?id='.$row['dessert_id'].'" style="text-decoration:underline;color:#F4538A;">here</a></p>
    
    ';


} //end while loop

} else {
    echo 'Nobody home!!!';
}


//  we are going to release the server

@mysqli_free_result($result);

@mysqli_close($iConn);

?>



</main>



<aside>


</aside>

</div>

<!-- end wrapper -->

<?php

include('./includes/footer.php');