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

      
        table {
            border: 1px solid red;
            border-collapse: collapse;
            text-align: center;
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

    
</body>
</html>
