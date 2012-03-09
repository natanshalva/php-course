
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>While loops exercise 2 </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h1>While loops exercise 2 </h1>
    <?php
    $i = 'a';
    while ($i < 'z') {
      echo $i . " - ";
      $i++;
    }
    ?>
    <br />
    <br />
    <br />
    <?php
    $names = array("ahmed", "salim", "muhamad", "ibrahim", "rami", "yossi");
    sort($names);
    $i = 0;
    while ($names[$i][0] <= 'm') {
      echo $names[$i] . " - ";
      $i++;
    }
    ?>
    <br />
    <br />
    <br />
    <?php
//    $char = 0;
//    while ($char < 255) {
//      echo $char . "-" . chr($char) . "<br>";
//      $char++;
//    }
    ?>

  </body>
</html>
