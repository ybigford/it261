<?php  
include('config.php'); 
include('./includes/header.php');



$teams['NFC West'] = 'nfcwe_NFL';
$teams['Seattle Seahawks'] = 'seaha_Seattle';
$teams['San Fransisco 49ers'] = '49ers_San Fransisco';
$teams['Arizona Cardinals'] = 'cardi_Arizona';
$teams['LA Rams'] = 'ramsl_Los Angeles';



?>



<div id="gallerywrapper">

<h1>NFC West Gallery</h1>

<table>
<?php  foreach($teams as $name => $image):  ?>

<tr>
<td><img src="images/<?php echo substr($image, 0, 5);   ?>.jpg" alt="<?php echo str_replace('_', ' ', $name);  ?>"></td>
<td><?php echo str_replace('_', ' ', $name);  ?></td>
<td><?php echo substr($image, 6); ?></td>


</tr>
<?php  endforeach ;      ?>

</table>

</div>

    <footer>
    <ul>
        <li>Copyright &copy;<script>document.write(new Date().getFullYear())</script> yBigford</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by yBigford</a></li>
        <li><a id="html-checker" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fwww.ybigford.com%2Fit261%2Fwebsite%2Fgallery.php">HTML Validation</a></li>
        <li><a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.ybigford.com%2Fit261%2Fwebsite%2Fgallery.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>


</footer>
</body>
</html>
