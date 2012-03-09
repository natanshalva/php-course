
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Function  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Functions </h3>

    <?php

    function first() {
      echo "Hello World";
    }

    first();
    ?>
    <br />
    <br />
    <p>Function With Variable </p>
    <?php

    function second($var) {
      echo "Hello $var <br>";
    }

    $t = "everybody";
    // we pass the variable $t in to the function
    second($t);
    second("gg");
    ?>
    <br />
    <p>function with return </p>
    <?php

    function third($var) {
      $hello = "Hello $var <br>";
      return $hello;
    }

    // the function dose't print any thing,
    //  so we add the function in to variable and then print the variable
    $new_var = third("everybody");
    echo $new_var;
    ?>
    <br />

    <p>function with return array </p>
    <?php

    function fourth($var) {

      $plas = $var + 2;
      $minus = $var - 2;
      ;
      $arr = array($var, $plas, $minus);
      return $arr;
    }

    $new_var = fourth("7");
    echo $new_var[0] . "<br />";
    echo $new_var[1] . "<br />";
    ?>
    <p>function with global </p>
    <?php
    // get the var in to the function
    $var4 = "string";

    function fifth() {
      global $var4;
      echo $var4;
    }

    fifth();
    echo "<br>";

    function six() {
      global $var5;
      $var5 = "this is var 5.";
      global $var5;
    }
    six();
    echo $var5;
    ?>

  </body>
</html>
