
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Test </h3>

    <?php
    for ($s = "looooooong"; $s != ""; $s = substr($s, 0, count($s) - 2)) {
      echo $s . "<br>";
    }
    ?>
    <br>
    <?php
    $names = array("ahmed", "salim", "muhamad", "ibrahim", "rami", "yossi");
    sort($names);
    $i = 0;
    while ($names[$i] <= "muhamad") {
      echo $names[$i] . "<br>";
      ;
      $i++;
    }
    ?>
  </body>
</html>
