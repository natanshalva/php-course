
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Variable handling functions </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    
    <?php
    // gettype — Get the type of a variable
    $var = 100;
    $var_get = gettype($var);
    echo "gettype(): " . $var_get;
    ?>
    <br />
    <?php
    //isset — Determine if a variable is set and is not NULL
    $var = null;
    $var_get = isset($var);
    echo "isset(): " . $var_get;
    ?>
    <br />
      <?php
    //var_dump — Dumps information about a variable
    //$var = array('natan', 'shalva');
    $var = "shefa";
    $var_get = var_dump($var);
    echo "var_dump(): " . $var_get;
    ?>
    <br />
    <br />
    <br />
    <a href="http://www.php.net/manual/en/ref.var.php"  target="_blank">Variable handling Functions</a>
  </body>
</html>
