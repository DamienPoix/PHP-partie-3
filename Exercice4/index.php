<?php
  $i = 1;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
      <?php
      while ($i < 10){
        echo $i . ' ';
          $i += $i/2;
        }
       ?>
    </p>
  </body>
</html>
