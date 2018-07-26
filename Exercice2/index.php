<?php
//déclaration des variables
$random = rand(0,100);
$i = 0;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" / >
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
    <?php
    //boucle while qu'on limite a 20
    while($i < 20){
      //multiplication de $i et de random
      echo $i * $random . ' ';
      $i++;
    }
     ?>
   </p>
  </body>
</html>
