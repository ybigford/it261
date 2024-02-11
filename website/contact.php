<?php  
include('config.php'); 
include('./includes/header.php');

?>





<div id="wrapper">

   


<main>
        <h2>Welcome to our contact page!</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae provident perferendis tempora, 
        quia iusto praesentium nostrum quibusdam pariatur adipisci voluptatum. Placeat nostrum iusto laboriosam, dolorum nobis asperiores eius aperiam omnis?</p>

        <?php  include('./includes/form.php'); ?>
        

</main>



<aside style="background:<?php echo $background; ?>">
    
        <h2>This is my aside</h2>
        


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