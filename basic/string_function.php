<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>String Function </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>
  <body>
    <?php
    // strlen — Get string length
    $var = 'natan';
    strlen($var);
    echo $var;
    ?>
    <br />
    <?php
    // substr — Return part of a string
    $var = 'Natan';
    $var2 = substr($var, 2, 2);
    echo $var2;
    ?>
    <br />
    <?php
    // strtolower  - Make a string lowercase
    $var = 'Natan';
    $var2 = strtolower($var);
    echo $var2;
    ?>
    <br />
    <?php
    // htmlentities — Convert all applicable characters to HTML entities
    $var = 'Natan';
    $var2 = htmlentities($var);
    echo "htmlentities: " . $var2;
    ?>
    <br />
    <?php
    // trim — trim part of a srting
    $var = 'Natan shalva';
    $var2 = trim($var, " ");
    echo 'trim: ' . $var2;
    ?>
    <br />
    <?php
    // strstr — trim part of a srting
    $var = 'Natan shalva';
    $var2 = strstr($var, 's');
    echo 'strstr: ' . $var2;
    ?>
    <br />
    <?php
    // number_format — Format a number with grouped thousands
    $var = '10000000';
    $var2 = number_format($var, '2');
    echo 'number_format: ' . $var2 . "\n";
    echo "test";
    ?>
    <br />
    <?php
    // nl2br() - Inserts HTML line breaks before all newlines in a string 
    $var = '10000000';
    $var2 = nl2br($var);
    echo 'number_format: ' . $var2;
    ?>
    <br />
    <?php
    //str_split — Convert a string to an array
    $str = "test";
    foreach (str_split($str) as $key => $letter) {
      echo $key . " =>" . $letter . "<br>";
    }
    ?>

    <a href="http://php.net/manual/en/ref.strings.php"  target="_blank">String function an php.net</a>
  </body>
</html>
