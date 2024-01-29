<?php

// mysolution
// $shows = array(
//     "Apple TV" => array("Severance", "For All Mankind"),
//     "Showtime" => array("City on a Hill", "Homeland"),
//     "Movie" => array("Top Gun Maverick", " "),
//     "HBO MAX" => array("Hacks", " ")
//   );



// echo '<ul>';
// foreach($shows as $key => $array) {
//     echo '<li> '.$key.': '.$array[0].', '.$array[1].'</li>';
   
// }
// echo '</ul>';



$shows = array(
  'Apple TV' => array('Severence', 'For All Mankind'),
  'Showtime' => array('City On A Hill', 'Homeland'),
  'Movie' => array('Top Gun'),
  'HBO Max' => array('Hacks')
);


echo '</ul>';

foreach($shows as $key => $values){
  foreach ($values as $value) {
    echo '<li><b>'.$key.'</b>:'.$value.'</li>';
  }
}

echo '</ul>';