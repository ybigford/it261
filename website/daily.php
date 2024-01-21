<?php   
include('./includes/header.php');

?>

<!-- <style>

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


</style> -->



<div id="wrapper">

    <div id="hero">
        <img src="images/drinkbanner.jpg" alt="three green androids">

    </div>
    <!-- end hero -->


<?php
        


if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l') ;
}


switch($today) {
    case 'Friday' :
    $drink = '<h2>Friday is Mimosa Day!</h2>';
    $pic = 'mimosa.jpg';
    $alt = 'mimosa';
    $background = '#C9A7EB';
    $content = '<p>A <b>mimosa</b> cocktail consists of champagne (or other sparkling wine) and chilled citrus juice, usually orange juice. 
    It is often served in a tall champagne flute at festive occasions such as brunch, weddings, or as part of business or first class service on 
    some passenger railways and airlines. The mixing ratio varies</p>
    
    <p>The cocktail is named after the yellow-flowered mimosa plant, Acacia dealbata. The origin of the cocktail is unclear, and was originally 
    called a "champagne orange". Some credit the Paris Ritz\'s bartender and cocktail writer Frank Meier for making the mimosa cocktail; 
    however, Meier\'s 1934 book on mixing drinks, which has a special symbol for his inventions, does not use it for the mimosa. 
    The mimosa can be considered as a variant of the cocktail Buck\'s Fizz, or vice-versa; Buck\'s Fizz appears to date from 1921. 
    - <a href="https://en.wikipedia.org/wiki/Mimosa_(cocktail)">Wikipedia</a></p>';
    break;

    case 'Saturday' :
    $drink = '<h2>Saturday is Mojito Day!</h2>';
    $pic = 'mojito.jpg';
    $alt = 'mojito';   
    $background = '#F6FA70';    
    $content = '<p><b>Mojito</b> is a traditional Cuban punch. The cocktail often consists of five ingredients: white rum, sugar, lime juice, soda water, and mint. 
    Its combination of sweetness, citrus, and herbaceous mint flavors is intended to complement the rum, and has made the mojito a popular summer drink.</p>
    
    <p>When preparing a mojito, fresh lime juice is added to sugar (or to simple syrup) and mint leaves. The mixture is then gently mashed with a muddler. 
    The mint leaves should only be bruised to release the essential oils and should not be shredded. Then rum is added and the mixture is briefly stirred to dissolve 
    the sugar and to lift the mint leaves up from the bottom for better presentation. Finally, the drink is topped with crushed ice and sparkling soda water. 
     - <a href="https://en.wikipedia.org/wiki/Mojito">Wikipedia</a></p>';
    break;

    case 'Sunday' :
    $drink = '<h2>Sunday is Mariners Merlot Day!</h2>';
    $pic = 'merlot.jpg';
    $alt = 'merlot';   
    $background = '#3DB2FF';    
    $content = '<p><b>Merlot</b> is a dark blue–colored wine grape variety that is used as both a blending grape and for varietal wines. The name Merlot is thought 
    to be a diminutive of merle, the French name for the blackbird, probably a reference to the color of the grape. Its softness and "fleshiness," combined with 
    its earlier ripening, make Merlot a popular grape for blending with the sterner, later-ripening Cabernet Sauvignon, which tends to be higher in tannin.</p>
    
    <p>Along with Cabernet Sauvignon, Cabernet Franc, Malbec and Petit Verdot, Merlot is one of the primary grapes used in Bordeaux wine, and it is the most widely planted grape 
    in the Bordeaux wine regions. Merlot is also one of the most popular red wine varietals in many markets. This flexibility has helped to make it one of the world\'s most 
    planted grape varieties. As of 2004, Merlot was estimated to be the third most grown variety at 640,000 acres globally. - <a href="https://en.wikipedia.org/wiki/Merlot">Wikipedia</a></p>';

    
    break;

    case 'Monday' :
    $drink = '<h2>Monday is Coconut Margarita Day!</h2>';
    $pic = 'coconutmargarita.jpg';
    $alt = 'coconut margarita';
    $background = '#FF0060';
    $content = '<p>A <b>margarita</b> is a cocktail consisting of tequila, triple sec, and lime juice. Some margarita recipes include simple syrup as well and are often served 
    with salt on the rim of the glass. Margaritas can be served either shaken with ice (on the rocks), without ice (straight up), or blended with ice (frozen margarita). 
    Most bars serve margaritas in a stepped-diameter variant of a cocktail glass or champagne coupe called a margarita glass. The margarita is one of the world\'s most 
    popular cocktails and the most popular tequila-based cocktail.</p>
    
    <p>The first known publication of a margarita recipe was in the December 1953 issue of Esquire. Margarita is Spanish for Daisy, which is a nickname for Margaret.  
    - <a href="https://en.wikipedia.org/wiki/Margarita">Wikipedia</a></p>';
    break;

    case 'Tuesday' :
    $drink = '<h2>Tuesday is Raspberry Martini Day!</h2>';
    $pic = 'raspberrymartini.jpg';
    $alt = 'martini';
    $background = '#22A699';
    $content = '<p>The <b>martini</b> is a cocktail made with gin and vermouth, and garnished with an olive or a lemon twist. Over the years, the martini has become 
    one of the best-known mixed alcoholic beverages. A popular variation, the vodka martini, uses vodka instead of gin for the cocktail\'s base spirit.</p>
    
    <p>The exact origin of the martini is unclear. The name may derive from the Martini brand of vermouth. Another popular theory suggests it evolved from a cocktail called 
    the Martinez served sometime in the early 1860s at the Occidental Hotel in San Francisco, which people frequented before taking an evening ferry to the nearby town of Martinez, 
    California. - <a href="https://en.wikipedia.org/wiki/Martini_(cocktail)">Wikipedia</a></p>';
    break;

    case 'Wednesday' :
    $drink = '<h2>Wednesday is Pineapple Margarita with Chile Habanero Day!</h2>';
    $pic = 'pineapplemargarita.jpg';
    $alt = 'pineapple margarita';
    $background = '#E86A33';
    $content = '<p>A <b>margarita</b> is a cocktail consisting of tequila, triple sec, and lime juice. Some margarita recipes include simple syrup as well and are often served 
    with salt on the rim of the glass. Margaritas can be served either shaken with ice , without ice, or blended with ice. Most bars serve margaritas in a stepped-diameter 
    variant of a cocktail glass or champagne coupe called a margarita glass.</p>
    
    <p>The first known publication of a margarita recipe was in the December 1953 issue of Esquire. Margarita is Spanish for Daisy, which is a nickname for Margaret.  
    - <a href="https://en.wikipedia.org/wiki/Margarita">Wikipedia</a></p>';
    break;


    case 'Thursday' :
    $drink = '<h2>Thursday is Daiquiri Day!</h2>';
    $pic = 'daiquiri.jpg';
    $alt = 'daiquiri';
    $background = '#FCB1B1';
    $content = '<p>The <b>daiquiri</b> is a cocktail whose main ingredients are rum, citrus juice, and sugar or other sweetener.Originally Daiquirí is also the name of 
    a beach and an iron mine near Santiago de Cuba, and is a word of Taíno origin. The drink was supposedly invented by an American mining engineer named Jennings Cox, 
    who was in Cuba at the time of the Spanish–American War. It is also possible that William A. Chanler, a US congressman, introduced the daiquiri to clubs in New York. 
    - <a href="https://en.wikipedia.org/wiki/Daiquiri">Wikipedia</a></p>';
    break;
}


?>



<main>
        <h2>Visit us and enjoy our special Drink of the Day!</h2>
        <img class="right" src="images/yapa.jpeg" alt="">

        <img src="images/mamp.png" alt="">


<div id="wrapper2">  



<img class="left" src="images/opensign.jpeg" alt="Open Sign">

<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>
</div>
    

</main>



<aside style="background:<?php echo $background; ?>">
        
<?php
echo $drink;
?>  
<img src="./images/<?php echo $pic;  ?>" alt="<?php echo $alt;  ?>">
<?php echo $content; ?>

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