<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yapa's Portal Page</title>
    <link href='css/styles.css' type='text/css' rel='stylesheet'>
</head>
<body>
    <h1><a href="index.php">Yapa's Portal Page</a></h1>
    <h2>The navigation below represents our BIG assignments.</h2>

    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>

    <main>
        <h2>About Yapa</h2>
        <img class="right" src="images/yapa.jpeg" alt="Yapa">

        <p>My name is Yapa Bigford I am a full-time pharmacy technician at Costco Pharmacy and a part-time pharmacy technician at Walgreens. 
        I am also an Information Technology: Software Development AAS-T student at Seattle Central College. My goal is to graduate and pursue my higher degree. 
        I would like to become a professional software developer and transfer to IT department at Costco. I love coding and want to make it my career.</p>

        <p>In my free time I enjoy watching football games. My favorite team is our Seattle home team the Seahawks. I am passionate for dancing. 
            I have been practicing salsa, hip hop, k-pop, and street dance since 2014. I have two adorble puppies, a toy poodle (Wagner) and a stadard poodle (Bucky). 
            Although they are much different in size, they grew up together and make a great pack. We are loving family. I can never spend time with them enough.</p>

        <img src="images/mamp.png" alt="mamp screenshot">
        <img src="images/mamp_w_name.png" alt="mamp screenshot with name">
        <img src="images/test.php.png" alt="test.php screenshot">

    </main>



    <aside>
        <h2>Weekly Class Exercises</h2>
        <h3>Week 2</h3>
        <ul>
            <li><a href="var.php">var.php</a></li>
            <li><a href="">var.php</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>

        </ul>



    </aside>


    </div>
<!-- end wrapper -->

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