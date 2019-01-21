<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore PHP</title>
  </head>
  <body>

    <?php

  $stringa="Questo è un primo esercizio di php con il corso boolean";

  $stringa=str_replace("primo", "****", $stringa);

  echo $stringa;

  ?>
  </body>
</html>
