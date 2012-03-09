
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
    <h1>While loops</h1>
    <?php
    /* example 1 */

    $i = 0;
    while ($i <= 10) {
      echo $i . ", ";
      $i = $i + 10;
    }
    echo "<br>";
    /* example 2 */

//    $i = 1;
//    while ($i <= 10):
//      echo $i;
//      $i++;
//    endwhile;
    $sum = 0;
    $i = 0;
    while ($i <= 10) {
      //    $sum += $i;
      $sum = $sum + $i;
      $i++;
    }
    echo "sum: " . $sum;
    echo "<br>";
    echo "<br>";
    $string = "lior lior";
    $i = 0;
    while ($i < strlen($string)) {
      
      if( $string[$i] == "l" ) {
        $string[$i] = "o"; 
      }
      $i++;
    }
    echo "string: " . $string;
    echo "<br>";
    echo "<br>";
// if else inside of a loops     
    $i = 0;
    while ($i <= 100) {

      if ($i == 10) {
        echo "this is my number! - 10 ";
      } else {
        echo $i . ", ";
      }
      $i = $i + 1;
    }
    ?>
    <br />
    <br />
    <a href="http://php.net/manual/en/control-structures.while.php"  target="_blank">while loops</a>
    <br />
    <br />
    <h1>For loops</h1>
    <?php
    for ($i = 0; $i <= 10; $i++) {
      echo $i . ", ";
    }
    ?>
    <h2> Minus looping </h2>
    <?php 
    for( $i = 10 ; $i >= 0 ; $i--){
      echo $i . "<br>";
    }
    ?>

  </body>
</html>
