
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Pointers</title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h1>Pointers </h1>
    <?php
    $transport = array('foot', 'bike', 'car', 'plane');
    $mode = current($transport); // $mode = 'foot';
    $mode = next($transport);    // $mode = 'bike';
    $mode = current($transport); // $mode = 'bike';
    $mode = prev($transport);    // $mode = 'foot';
    $mode = end($transport);     // $mode = 'plane';
    $mode = current($transport); // $mode = 'plane';

    $arr = array();
    var_dump(current($arr)); // bool(false)

    $arr = array(array());
    var_dump(current($arr)); // array(0) { }
    ?>

    <h3>Pointer with while loops</h3>
    <?php
    // we reset the array 
    reset($transport);
    $transport = array('foot', 'bike', 'car', 'plane');
    while ($trans = current($transport)) {
      echo $trans . ' - ';
      next($transport);
      if ($trans == 'car') {
        break;
      }
    }


    $t = current($transport);
      echo "<br>" ;
    echo "currnet: " . $t;
    ?>
    <br />
    <br />
    <br />
    <p>
      <a href="http://php.net/manual/en/function.current.php">Pointers in php.net</a>

    </p>
  </body>
</html>
