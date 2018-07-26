<?php
//déclaration des variables
$random = rand(0,100);
$i = 100;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" / >
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
    <?php
    while($i >= 10){
      //multiplication de $i et de random
      echo $i * $random . ' ';
      $i--;
    }
     ?>
   </p>
  </body>
</html>
