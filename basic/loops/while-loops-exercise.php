
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>while - loops </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h1>Star Exercise</h1>

    <?php
// 



    for ($row = 1; $row <= 5; $row++) {

      for ($col = 1; $col <= $row; $col++) {

        echo '*';
      }

      echo "$row <br>";
    }
    ?>
    <br />
    <?php
    $alpha = "A";
    for ($j = 1; $j < 7; $j++) {
      echo $j . ".Item " . $alpha . "";
      $alpha++;
    }
    ?>
    <h3>words exercise</h3>

    <?php
    $names = array("ahmed", "salim", "muhamad", "ibrahim", "rami", "yossi");
    sort($names);
    $i = 0;
    while ($names[$i][0] <= "m") {
      echo $names[$i] . "<br>";
      ;
      $i++;
    }
    ?>

  </body>
</html>
