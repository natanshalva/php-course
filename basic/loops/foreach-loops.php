
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
    <h1>Foreach Loops</h1>
    <?php
    $var = array(45, 55, 1000, 6000);

    foreach ($var as $value) {
      echo $value . ", ";
    }
    ?>
    <br />
    <br />
    <h2>foreach associative array </h2>
    <?php
    $var = array( "name" => "natan", "family" => "shalva", "phone" => "777", 6000);

    foreach ($var as $key => $test) {
      echo $key . " - " . $test . "<br>";
    }
    ?>
    <br />
    <h3>Foreach with if </h3>
    <?php
    $var = array("name" => "natan", "family" => "shalva", "phone" => "777", 6000);

    foreach ($var as $key => $test) {
      if (is_int($test)) {
        echo $key . " - " . $test . "<br>";
      } else {
        echo "not integer <br>" ;
      }
    }
    ?>
    <br />
    <?php 
    
    ?>
    <a href="http://php.net/manual/en/control-structures.while.php"  target="_blank">while loops</a>
    <br />
    <br />



  </body>
</html>
