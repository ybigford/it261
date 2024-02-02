
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
                <li><a href="website/daily.php">Switch</a></li>
                <li><a href="weeks/week4/adder.php">Troubleshoot</a></li>
                <li><a href="website/calculator.php">Calculator</a></li>
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
        <img src="images/testPHP.png" alt="test_php screenshot">

    </main>



  <aside>
        <h2>Weekly Class Exercises</h2>
        <h3>Week 2</h3>
        <ul>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
            <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
        </ul>

        <h3>Week 3</h3>
        <ul>
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">foreach.php</a></li>
            <li><a href="weeks/week3/for-loop.php">forloop.php</a></li>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/switch.php">switch.php</a></li>
        </ul>

        <h3>Week 4</h3>
         <ul>
            <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
            <li><a href="weeks/week4/form1.php">form1.php</a></li>
            <li><a href="weeks/week4/form2.php">form2.php</a></li>
            <li><a href="weeks/week4/form3.php">form3.php</a></li>
            <li><a href="weeks/week4/form-arithmetic.php">form-arithmetic.php</a></li>
            <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
        </ul>

        <h3>Week 5</h3>
        <ul>
            <li><a href="">currency1.php</a></li>
            <li><a href="">currency2.php</a></li>
            <li><a href="">currency3.php</a></li>
            <li><a href="">null.php</a></li>
        </ul>

        <h3>Week 6</h3>
        <ul>
            <li><a href="">form1.php</a></li>
            <li><a href="">functions.php</a></li>
            <li><a href="">implode.php</a></li>
            <li><a href="">index.php</a></li>
        </ul>

        <h3>Week 7</h3>
        <ul>
            <li><a href="">pictures.php</a></li>
            <li><a href="">random.php</a></li>
            <li><a href="">strings.php</a></li>
        </ul>

        <h3>Week 8</h3>
        <ul>
            <li><a href="">people.php</a></li>
        </ul>

        <h3>Final Assignment</h3>

    </aside>



    </div>
<!-- end wrapper -->

<footer>
    <ul>
        <li>Copyright &copy;<script>document.write(new Date().getFullYear())</script> yBigford</li>
        <li>All Rights Reserved</li>
        <li><a href="website/index.php">Web Design by yBigford</a></li>
        <li><a id="html-checker" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fwww.ybigford.com%2Fit261%2F">HTML Validation</a></li>
        <li><a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.ybigford.com%2Fit261%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>


</footer>
    
</body>
</html>
