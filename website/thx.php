<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<header>
    <div class="inner-header">
        <a href="index.html">
        
        <img id="logo" src="images/logo.png" alt="logo">

        </a>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="daily.php">Daily</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
    </ul>
</nav>


    </div>
    <!-- end inner header -->

<style>
    h1, h2 {
        text-align: center;
    }
</style>

</header>

    <div id="wrapper">

    <div id="hero">
        <img src="images/androids.png" alt="three green androids">

    </div>
    <!-- end hero -->
            
    
    



            <h1>Thank you!</h1>
            <h2>We received your message and will get back to you shortly.</h2> 

            

            

    </div>

    <footer>
        <ul>
            <li>Copyright &copy;<script>document.write(new Date().getFullYear())</script> yBigford</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by yBigford</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
    
    
    </footer>
        
    </body>
    </html>