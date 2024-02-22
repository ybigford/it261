<?php

$teams['NFC West'] = 'nfcwe_NFL';
$teams['Seattle Seahawks'] = 'seaha_Seattle';
$teams['San Fransisco 49ers'] = '49ers_San Fransisco';
$teams['Arizona Cardinals'] = 'cardi_Arizona';
$teams['LA Rams'] = 'ramsl_Los Angeles';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFC West Gallery</title>

    <style>

        body {
            background-image: url("images/bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }
      
        table {
            border: 1px solid red;
            border-collapse: collapse;
            text-align: center;
        }


        li {
            float: left;
            list-style-type: none;
            padding-right: 30px;
            margin-bottom: 20px;
        }


        td {
            border: 1px solid navy;
           
        }



    </style>
</head>


<body>


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

<ul>
        <li>Copyright &copy;<script>document.write(new Date().getFullYear())</script> yBigford</li>
        <li><a id="html-checker" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fwww.ybigford.com%2Fit261%2Fwebsite%2Fgallery.php">HTML Validation</a></li>
        <li><a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.ybigford.com%2Fit261%2Fwebsite%2Fgallery.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS Validation</a></li>
    </ul>
</body>
</html>
