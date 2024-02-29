<?php

// do not call out the header include yet!!!
// the following information is above the doctype
include('config.php');

// is id set yet???

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];


} else {
    header('Location: dessert.php');
}

$sql = 'SELECT * FROM dessert WHERE dessert_id = '.$id.' ';


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
$name = stripcslashes ($row['name']);
$type = stripcslashes ($row['type']);
$ingredients = stripcslashes ($row['ingredients']);
$origin = stripcslashes ($row['origin']);
$details = stripcslashes ($row['details']);
$recipe = stripcslashes ($row['recipe']);


// will I add a column?

$feedback = '';


    } //close while loop



} else {
    $feedback = 'Houston, we have a problem';
}



include('./includes/header.php');

?>

<div id="wrapper">

<div id="hero">
        <img src="images/bakerybg.jpg" alt="bakery">

    </div>
    <!-- end hero -->

<main>

<h1>Let's eat desserts!!!</h1>
<h2><?php echo $name;?></h2>

<ul style="margin-left: 20px;">
<?php

echo '

<li><b>Dessert:</b>'.$name.'</li>
<li><b>Type:</b>'.$type.'</li>
<li><b>Origin:</b>'.$origin.'</li>
<li><b>About:</b>'.$details.'</li>


';

?>

</ul>

<h3>Recipe</h3>

<p><?php echo $recipe; ?></p>

<p>Back to <a href="dessert.php" style="text-decoration:underline;color:#F4538A;">dessert.php</a></p>


</main>

<aside style="background-color:#FFC0D9;">
    

    <figure>
    <img src="./images/dessert<?php echo $id; ?>.jpg" alt="<?php echo $name;?>">

    
    </figure>

    <h3>ingredients</h3>

    <p><?php echo $ingredients; ?></p>


</aside>


</div>

<!-- end wrapper -->


<?php

@mysqli_free_result($result);

@mysqli_close($iConn);


include('./includes/footer.php');